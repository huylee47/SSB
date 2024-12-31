<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Config;
use App\Models\Contact;
use App\Service\ConfigService;
use App\Service\ContactService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $contactService;
    private $configService;

    public function __construct(ContactService $contactService, ConfigService $configService){
        $this->contactService = $contactService;
        $this->configService = $configService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->contactService->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Needs config for header and footer
        //By default , use config 1
        $config = Config::find(1);
        return   $this->contactService->create($config);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        return $this->contactService->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
