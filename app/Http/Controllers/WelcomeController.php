<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class WelcomeController extends Controller
{
    public function index()
    {
        $sliderImages = array( "a"=>"1", "b"=>"2", "c"=>"3");
        shuffle($sliderImages);
        $sliderImage =  $sliderImages[0];
        $description    = 'Home';
        $keywords        = 'Offficial, logeak, elearning, web design, no 1 web developer, no 1 elearning consultant';
        $title          = 'Home';

        return view('home', compact('title', 'keywords', 'description', 'sliderImage'));
    }
    public function contactus()
    {
        $description    = 'contact us';
        $keywords        = 'contact us';
        $title          = 'Contact Us';

        return view('contactus', compact('title', 'keywords', 'description'));
    }

    public function sendcontactmail(Request $request){
        $this->validate($request, [
                        'name' => 'required',
                        'email' => 'required|email',
                        'comments' => 'required'
                ]);


        Mail::send('emails.contactus', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone_number'),
            'subject' => $request->get('subject'),
            'comment' => $request->get('comment') ],

                function ($message) {
                        $message->from('hello@logeaksolutions.com');
                        $message->to('emmyabba@gmail.com', 'Peronal Website')
                                ->subject('EmmanuelAbba.dev Contact Form');
        });

        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');

    }

    public function services()
    {
        $description    = 'Our Services';
        $keywords        = 'elearning, website development, mobile application development, software, software development';
        $title          = 'Our Services';

        return view('services.index', compact('title', 'keywords', 'description'));
    }

    public function softwareservice()
    {
        $description    = 'Software development';
        $keywords        = 'contact us';
        $title          = 'Software development';

        return view('services.software', compact('title', 'keywords', 'description'));
    }

    public function aboutus()
    {
        $description    = 'About us';
        $keywords        = 'contact us';
        $title          = 'About Us';

        return view('contactus', compact('title', 'keywords', 'description'));
    }


}
