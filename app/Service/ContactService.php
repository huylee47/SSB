<?php

namespace App\Service;
use App\Http\Requests\StoreContactRequest;
use App\Http\Resources\ContactResource;
use App\Http\Resources\CourseResource;
use App\Models\Config;
use App\Models\Contact;
use App\Models\Course;
use http\Env\Request;

class ContactService {
    public function index(){
        $contacts = Course::all();
        return view('admin.contact.index',compact('contacts'));
    }


    public function store(StoreContactRequest $request){
            $contactInfoAsArray = $request->all();
            $createdContact = Contact::create($contactInfoAsArray);
            return $createdContact;
    }

    public function create(Config $config)
    {
        $contact = new Contact();
        $contact = new ContactResource($contact);
        $courses = Course::all();
        $section = "content";
        $extends="client.master";
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
            $extends="client.contact.spa";//Dummy extends if page already called by master layout
        }
        return view("client.contact.create", compact("contact", "config", "courses","extends","section"));

    }


}
