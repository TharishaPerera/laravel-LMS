<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function lecturerLogin()
    {
        $signup = array(
            'member' => 'Not a member? ',
            'signup' => 'Sign Up',
            'image' => '../../images/lecturer.jpg'
        );
        return view('pages.logins.login')->with($signup);
    }

    public function dancingLogin()
    {
        $image = '../../images/dancing.jpg';
        return view('pages.logins.login')->with('image', $image);
    }

    public function frenchLogin()
    {
        $image = '../../images/french.jpg';
        return view('pages.logins.login')->with('image', $image);
    }

    public function englishLogin()
    {
        $image = '../../images/english.jpg';
        return view('pages.logins.login')->with('image', $image);
    }
}
