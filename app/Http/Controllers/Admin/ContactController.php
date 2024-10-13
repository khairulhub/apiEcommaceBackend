<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function PostContactDetails(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');
        date_default_timezone_set("Asia/Dhaka");
        $contact_time = date("h:i:sa");
        $contact_date = date("d-m-Y");

        $result = Contact::insert([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'contact_time' => $contact_time,
            'contact_date' => $contact_date,
        ]);

        return $result;
    }
}
