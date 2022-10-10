<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    public function get()
    {
        return view('home');
    }
    public function login()
    {
        return view('login', ['name' => "Bivas", 'password' => "123"]);
        // return view('login')->with('name', "Anindra")->with("password", "123");
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,
        [
            'uname' => 'required|string|max:70',
            'email' => 'required|string|email',
            'id' => 'required',
            'phone' => 'required|integer|min:11',
            'age' => 'required|numeric',
            'companyName' => 'required|string'
        ],
        [
            'required' => 'This feild is required',
            'string' => 'This feild must be a string',
            'email' => 'You must provide a valid email address',
            'integer' => 'You must provide a valid phone number',
            'size:100' => 'Maximum size is 100',
            'max:70' => 'Maximum size is 70 for username',
            'min:11' => 'Minimum size is 11 for phone',
            'numeric' => 'Age must be a number between'
        ]
    );

        // $output = $request->uname;
        $output ="Uname: ".$request->uname;
        $output.="Email: ".$request->email;
        $output.="ID: ".$request->id;
        $output.="phone: ".$request->phone;
        $output.="age: ".$request->age;
        $output.="Company Name: ".$request->companyName;
        return $output;
    }
}
