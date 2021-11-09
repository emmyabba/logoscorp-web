<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactusEmail;
use App\Mail\ContactusEmail_client;

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
                        'comment' => 'required',
                        'budget' => 'required',
                        'project_type' => 'required'
                ]);

                $data = array(
                    'name'      =>  $request->name,
                    'email'   =>   $request->email,
                    'comment'      =>  $request->comment,
                    'budget'   =>   $request->budget,
                    'project_type'      =>  $request->project_type
                );
            
                Mail::to(['hello@logeaksolutions.com', 'emmyabba@gmail.com'])->send(new ContactusEmail($data));
                Mail::to($request->email)->send(new ContactusEmail_client($data));
        

        return back()->with('success', 'Thanks for contacting LOGEAK, We will reachout to you shortly!');

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
        $keywords        = 'Software development';
        $title          = 'Software development';

        return view('services.software', compact('title', 'keywords', 'description'));
    }

    public function elearningservice()
    {
        $description    = 'eLearning';
        $keywords        = 'eLearning';
        $title          = 'eLearning';

        return view('services.software', compact('title', 'keywords', 'description'));
    }

    public function mobileappservice()
    {
        $description    = 'Mobile ';
        $keywords        = 'mobile app';
        $title          = 'mobileapp';

        return view('services.software', compact('title', 'keywords', 'description'));
    }

    public function aboutus()
    {
        $description    = 'About us';
        $keywords        = 'contact us';
        $title          = 'About Us';

        return view('aboutus', compact('title', 'keywords', 'description'));
    }


}
