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
        $login = array(
            'member' => 'Does Not Have An Account?   ',
            'signup' => 'Sign Up',
            'image' => '../../images/lecturer.jpg',
            'action' => route('lecturer-login'),
            'method' => 'post',
        );
        return view('pages.login')->with($login);
    }

    public function dancingLogin()
    {
        $login = array(
            'image' => '../../images/dancing.jpg',
            'action' => route('lecturer-login'),
            'method' => 'post',
        );
        return view('pages.login')->with($login);
    }

    public function frenchLogin()
    {
        $login = array(
            'image' => '../../images/french.jpg',
            'action' => route('lecturer-login'),
            'method' => 'post',
        );
        return view('pages.login')->with($login);
    }

    public function englishLogin()
    {
        $login = array(
            'image' => '../../images/english.jpg',
            'action' => route('lecturer-login'),
            'method' => 'post',
        );
        return view('pages.login')->with($login);
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
