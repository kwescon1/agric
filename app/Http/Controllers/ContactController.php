<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Contact;

class ContactController extends Controller
{
    //
    public function create(){
    	return view('contact.contact');
    }

    public function store(Request $request){

    	// return $request;
    	// dd(request()->all());
    	$this->validate($request,[
    		'name' => 'required',
			'email' => 'required|email',
			'mobile_number' => 'required',
			'subject' => 'required',
			'message' => 'required',
			// status
    	]);

    $contact = new Contact;

    $contact->name = trim($request->name);
    $contact->email = trim($request->email);
    $contact->mobile_number = trim($request->mobile_number);
    $contact->subject = trim($request->subject);
    $contact->message = trim($request->message);
    $contact->status = "Unattended";

    //if attended then status should be 'attended'

    $contact->save();

    $data = array(
    	'name' => $request ->name,
		'email' => $request ->email,
		'mobile_number' => $request ->mobile_number,
		'subject' => $request ->subject,
		'message' => $request ->message
    );

    //Send An Email
    	// Mail::to('kwescon1@gmail.com')->send(new ContactFormMail($data));

    
    return redirect()->back()->with('success', 'Thank you for reaching out. Your message has successfully been sent');
    	
    }
}
