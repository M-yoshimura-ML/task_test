<?php

namespace App\Http\Controllers\Auth;

use App\Models\Contact;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Mail\ContactUsReply;
use App\Mail\ContactUsAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * Class ContactsController.
 *
 * @package namespace App\Http\Controllers;
 */
class ContactUsController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'name'  => 'required',
            'contact_content' => '',
            'text'  => 'required|min:10',
        ],[
            'name.required' => 'お名前を入力して下さい。' ,
            'contact_content.required' => 'お問い合わせ内容を選択して下さい。' ,
            'text.required' => '本文を入力して下さい。' ,
            'text.min' => '本文を10文字以上入力して下さい。' ,
        ]);

        $contact = Contact::create($request->all());
        if(!$contact){
            return response()->error();
        }

        // For user recipient
        Mail::to($request->email)->send(new ContactUsReply($contact));

        // For admin recipient
        Mail::to(config('takumoi.admin_email.address'))->send(new ContactUsAdmin($contact));

        return response()->json([
            'message' => 'We have succesfully receive your inquiry'
        ]);
    }
}
