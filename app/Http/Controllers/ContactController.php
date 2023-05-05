<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Http\Response;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['contacts'] = Contact::orderBy('id', 'desc')->get();
        return view('backend.pages.contacts.show-contacts', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [];
        return view('backend.pages.contacts.create-contact', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreContactRequest $request
     * @return Response
     */
    public function store(StoreContactRequest $request)
    {
        $contact_id = $request->contact_id;

        $contact = Contact::updateOrCreate(['id' => $contact_id],
            [
                'name' => $request->name,
                'email' => $request->email,
                'phonenumber' => $request->phonenumber,
                'subject' => $request->subject,
                'message' => $request->message,
                'status' => 'Non resolu',

            ]);

        return redirect()->route('contacts.index', app()->getLocale())->with('success', 'contact has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Contact $contact
     * @return Response
     */
    public function show($lang, Contact $contact)
    {
        $data['contact'] = $contact;
        return view('backend.pages.contacts.show-contact', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Contact $contact
     * @return Response
     */
    public function edit($lang, Contact $contact)
    {
        $data['contact'] = $contact;
        return view('backend.pages.contacts.edit-contact', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateContactRequest $request
     * @param Contact $contact
     * @return Response
     */
    public function update(UpdateContactRequest $request, $lang, Contact $contact)
    {
        $contact_id = $contact->id;

        $contact = Contact::updateOrCreate(['id' => $contact_id],
            [
                'status' => $request->status,

            ]);

        return redirect()->route('contacts.index', app()->getLocale())->with('success', 'contact has been added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Contact $contact
     * @return Response
     */
    public function destroy($lang, Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index', app()->getLocale())->with('success', 'contact has been deleted successfully');
    }
}
