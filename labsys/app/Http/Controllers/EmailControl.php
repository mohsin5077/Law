<?php
namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use App\Mail\ContactConfirmationMail;
use Illuminate\Support\Facades\Mail;

class EmailControl extends Controller
{
    public function submit(Request $request)
    {

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Send confirmation email
        Mail::to($data['email'])->send(new ContactUs($data));

        return back()->with('success', 'Thank you! Your message has been received.');
    }


    public function sendNewsletter(Request $request)
{
    $email = $request->email;

    Mail::raw('You subscribed to our newsletter!', function ($message) use ($email) {
        $message->to($email)
                ->subject('Newsletter Subscription');
    });

    return back()->with('success', 'Thanks for subscription.');
}
}
