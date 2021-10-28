<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class WelcomeController extends Controller
{
    public function index()
    {
        $description    = 'Home';
        $keywords        = 'Offficial, logeak, elearning, web design, no 1 web developer, no 1 elearning consultant';
        $title          = 'Home';

        return view('home', compact('title', 'keywords', 'description'));
    }
    public function contactus()
    {
        $description    = 'contact us';
        $keywords        = 'contact us';
        $title          = 'Contact Us';

        return view('contactus', compact('title', 'keywords', 'description'));
    }

    public function sendcontactmail(Request $request)
    {
        $this->validate($request, [
                        'name' => 'required',
                        'email' => 'required|email',
                        'comment' => 'required'
                ]);

        Mail::send('emails.contactus', [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'comment' => $request->get('comment') ],
                function ($message) {
                        $message->from('hello@logeaksolutions.com');
                        $message->to('hello@logeaksolutions', 'Your Name')
                        ->subject('Your Website Contact Form');
        });

        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');

    }
    public function aboutus()
    {
        $description    = 'About us';
        $keywords        = 'contact us';
        $title          = 'About Us';

        return view('contactus', compact('title', 'keywords', 'description'));
    }


}
