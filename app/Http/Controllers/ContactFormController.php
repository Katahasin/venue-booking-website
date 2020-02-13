<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact ;

class ContactFormController extends Controller
{

    public function contact()
    {
        return view('contact.create');
    }
    public function store(Request $request){
        


        
        $request->validate([
                'name'=>'required',
                'email'=>'required',
                'subject' => 'required',
                'message' => 'required'
            ]);

            $contact = new Contact([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'message' => $request->get('message')
            ]);
            
            $contact->save();
            return redirect()->back()->with('message', 'Contact saved! Thank you');


            //Mail::to('letsbook001@gmail.com')->send(new ContactFormMail());
            
        }
}
