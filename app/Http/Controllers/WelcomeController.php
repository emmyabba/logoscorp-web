<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $description    = 'Home';
        $keywords        = 'Offficial, logeak, elearning, web design, no 1 web developer, no 1 elearning consultant';
        $title          = 'Home';

        return view('welcome', compact('title', 'keywords', 'description'));
    }
    public function contactus()
    {
        $description    = 'contact us';
        $keywords        = 'contact us';
        $title          = 'Contact Us';

        return view('contactus', compact('title', 'keywords', 'description'));
    }
    public function aboutus()
    {
        $description    = 'About us';
        $keywords        = 'contact us';
        $title          = 'About Us';

        return view('contactus', compact('title', 'keywords', 'description'));
    }
}
