<?php

namespace App\Service;
use App\Http\Requests\StoreContactRequest;
use App\Http\Resources\ContactResource;
use App\Http\Resources\CourseResource;
use App\Models\Config;
use App\Models\Contact;
use App\Models\Course;
use http\Env\Request;
use Illuminate\Database\QueryException;


$rdir =public_path();
require $rdir . '/assets/phpmailer/Exception.php';
require $rdir.'/assets/phpmailer/PHPMailer.php';
require $rdir.'/assets/phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


class ContactService {
    public function index(){
        $contacts = Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }


    public function store(StoreContactRequest $request){
            $contactInfoAsArray = $request->all();
            try{
                $createdContact = Contact::create($contactInfoAsArray);
                $createdContact = new ContactResource($createdContact);
                $emailIsSent=false;
                 $emailIsSent = $this->sendEmail($createdContact);
                 if($emailIsSent){
                     return response()->json(['message' => "Đã gửi email"], 200);
                 }else{
                     return response()->json(['message' => "Gửi email thất bại"], 409);
                 }
            }catch (QueryException $e){
                if ($e->getCode() === '23000') { // SQLSTATE code for integrity constraint violation
                    return response()->json(['message' => "Trùng email"], 409);
                }
                return response()->json(['message' => 'Database error'], 500);
            }

    }

    public function create(Config $config)
    {
        $contact = new Contact();
        $contact = new ContactResource($contact);
        $courses = Course::all();
        $isSPA=false;
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
            $isSPA=true;
        }

        $html = $config->map;
        preg_match('/<iframe[^>]+src="([^"]+)"/', $html, $matches);
        if (isset($matches[1])) {
            $config->map=$matches[1];
        } else {
            $config->map="";
        }

        return view("client.contact.create", compact("contact", "config", "courses","isSPA"));

    }

    public function sendEmail(ContactResource $contact): bool
    {
        $email = $contact->email;
        $name = $contact->name;
        $message = $contact->message;
        $phone_number=$contact->phone_number;

        if (empty($email)) {
            return false;
        }

        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF; // Use DEBUG_OFF for production
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'huyvhpp02961@fpt.edu.vn';//<-- PUT YOUR GOOGLE EMAIL HERE
            $mail->Password = 'ztit zadj yyga snqv';//<-- PUT YOUR GOOGLE APPLICATION PASSWORD HERE
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Recipients
            $mail->addReplyTo('huyvhpp02961@fpt.edu.vn', 'Information');
            $mail->setFrom('huyvhpp02961@fpt.edu.vn', 'SSB Education and Financial');
            $mail->addAddress($email, $name);

            // Content
            $mail->isHTML(true);
            $mail->Subject    = "Contact Center";
            $mail->Body = '<div style="font-family: Arial, sans-serif; color: #333; padding: 20px; background-color: #f9f9f9; border-radius: 8px; border: 1px solid #e1e1e1;">
        <table style="width: 100%; max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
            <tr>
                <td style="text-align: center; padding-bottom: 20px;">
                    <h2 style="font-size: 24px; color: #0073e6; font-weight: 600;">Customer Inquiry</h2>
                </td>
            </tr>
            <tr>
                <td style="padding-bottom: 15px;">
                    <strong style="font-size: 16px;">Message from Customer ' . nl2br(htmlspecialchars($name)) . '</strong>
                    <p style="background-color: #f4f4f4; padding: 15px; border-radius: 5px; font-size: 14px; line-height: 1.6;">' . nl2br(htmlspecialchars($message)) . '</p>
                </td>
            </tr>
            <tr>
                <td style="padding-bottom: 15px;">
                    <strong style="font-size: 16px;">Contact Information:</strong>
                    <ul style="font-size: 14px; line-height: 1.6; margin-left: 20px;">
                        <li><strong>Email:</strong> ' . htmlspecialchars($email) . '</li>
                        <li><strong>Phone Number:</strong> ' . htmlspecialchars($phone_number) . '</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td style="text-align: center; padding-top: 20px;">
                    <p style="font-size: 12px; color: #999;">Thank you for contacting SSB Education and Financial. We will get back to you shortly.</p>
                </td>
            </tr>
        </table>
    </div>';
            $mail->AltBody = $message;
            $mail->send();
            return true;
        } catch (Exception $e) {
            echo $e;
            return false;
        }
    }



}
