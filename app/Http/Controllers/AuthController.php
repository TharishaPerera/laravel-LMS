<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function lecturerLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $lecturer = Lecturer::where('email', '=', $request->email)->first();
        if($lecturer){
            if (Hash::check($request->password, $lecturer->password)){
                $request->session()->put('loginId', $lecturer->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail', 'Incorrect password');
            }
        }else{
            return back()->with('fail', 'This email is not registered');
        }
    }

    public function lecturerRegistration(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:lecturers',
            'password' => 'required|min:8',
            'confirmPassword' => 'required|required_with:password|same:password',
        ]);

        $lecturer = new Lecturer();
        $lecturer->username = $request->username;
        $lecturer->email = $request->email;
        $lecturer->password = Hash::make($request->confirmPassword);

        $response = $lecturer->save();
        if ($response){
            back()->with('success', 'Lecturer has been registered successfully');
            return redirect('lecturer');
        }else{
            return back()->with('fail', 'Something wrong');
        }
    }

    public function logout()
    {
        if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/');
        }
    }
}
