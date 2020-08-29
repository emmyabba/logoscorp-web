<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function contactus()
    {
        $description    = 'contact us';
        $keywords        = 'contact us';
        $title          = 'Contact Logeak +234(0)8185877551';

        return view('contactus', \compact('title', 'keywords', 'description'));
    }
}
