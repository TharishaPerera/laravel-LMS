<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function lecturerLogin()
    {
        $signup = array(
            'member' => 'Does Not Have An Account?   ',
            'signup' => 'Sign Up',
            'image' => '../../images/lecturer.jpg',
            'action' => route('lecturer-login'),
            'method' => 'post',
        );
        return view('pages.login')->with($signup);
    }

    public function dancingLogin()
    {
        $image = '../../images/dancing.jpg';
        return view('pages.login')->with('image', $image);
    }

    public function frenchLogin()
    {
        $image = '../../images/french.jpg';
        return view('pages.login')->with('image', $image);
    }

    public function englishLogin()
    {
        $image = '../../images/english.jpg';
        return view('pages.login')->with('image', $image);
    }

    public function signup()
    {
        $data = array(
            'image' => '../../images/signup.jpg',
            'action' => route('register-lecturer'),
            'method' => 'post'
        );
        return view('pages.signup')->with($data);
    }

    public function forgotPassword()
    {
        $image = '../../images/forgotpw.jpg';
        return view('pages.forgotpassword')->with('image', $image);
    }

    public function lecturerDashboard(){
        $data = array();
        if(Session::has('loginId')){
             $data = Lecturer::where('id', '=', Session::get('loginId'))->first();
        }
        return view('pages.dashboards.dashboard')->with('data', $data);
    }
}
