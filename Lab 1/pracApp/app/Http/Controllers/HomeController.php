<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobProvider;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    public function profile()
    {
        return view('profile');
    }
    public function get()
    {
        return view('home');
    }
    public function register()
    {
        return view('register');
        // return view('login', ['name' => "Bivas", 'password' => "123"]);
        // return view('login')->with('name', "Anindra")->with("password", "123");
    }

    public function postRegister(Request $request)
    {
        $this->validate(
            $request,
            [
                'fname' => 'required|string|max:70',
                'lname' => 'required|string|max:70',
                'uname' => 'required|string|max:70',
                'email' => 'required|string|email',
                'pass' => 'required',
                'work_position' => 'required|string',
            ],
            [
                'required' => 'This feild is required',
                'string' => 'This feild must be a string',
                'email' => 'You must provide a valid email address',
                // 'integer' => 'You must provide a valid phone number',
                // 'size:100' => 'Maximum size is 100',
                'max:70' => 'Maximum size is 70 for username',
                // 'min:11' => 'Minimum size is 11 for phone',
                // 'numeric' => 'Age must be a number between'
            ]
        );
        if (isset($error)) {
            $output = "Wrong Input";
            // $output = $request->uname;
            // $output ="Uname: ".$request->uname;
            // $output.="Email: ".$request->email;
            // $output.="ID: ".$request->id;
            // $output.="phone: ".$request->phone;
            // $output.="age: ".$request->age;
            // $output.="Company Name: ".$request->companyName;
            return $output;
        } else {

            $jobProvider = new JobProvider();
            $jobProvider->fname = $request->fname;
            $jobProvider->lname = $request->lname;
            $jobProvider->uname = $request->uname;
            $jobProvider->mail = $request->email;
            $jobProvider->pass = $request->pass;
            $jobProvider->work_position = $request->work_position;
            $jobProvider->save();
            return view('login');
        }
    }
}