<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\JobProvider;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {

        $this->validate(
            $request,
            [
                'uname' => 'required|string|max:70',
                'pass' => 'required'
            ],
            [
                'required' => 'This feild is required',
                'string' => 'This feild must be a string',
                'max:70' => 'Maximum size is 70 for username'
            ]
        );

        $jobProvider = new JobProvider();
        $username = $jobProvider->where('uname', $request->uname)->first();
        $pass = $jobProvider->where('pass', $request->pass)->first();
        if (isset($username) && isset($pass)) {
            return view('home')->with('username',  $request->uname);
        } else {
            $output = "Wrong Input";
            return $output;
        }


        return view('profile');
    }
}