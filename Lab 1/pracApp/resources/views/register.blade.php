@extends('layout.app')

@section('title')
    Register
@endsection

@section('content')
    <h1>Job Provider Registration</h1>
    <fieldset>
        <legend>
            Registration
        </legend>


        <form action="/register" method="post">
            {{ csrf_field() }}
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" value="">
            @if ($errors->has('fname'))
                <b>{{ $errors->first('fname') }}</b>
            @endif
            <br><br>
            <label for="lname">Last Name: </label>
            <input type="text" name="lname" value="">
            @if ($errors->has('lname'))
                <b>{{ $errors->first('lname') }}</b>
            @endif
            <br><br>
            <label for="uname">Username: </label>
            <input type="text" name="uname" value="">
            @if ($errors->has('uname'))
                <b>{{ $errors->first('uname') }}</b>
            @endif
            <br><br>
            <label for="email">Email: </label>
            <input type="text" name="email" value="">
            @if ($errors->has('email'))
                <b>{{ $errors->first('email') }}</b>
            @endif
            <br><br>

            <label for="pass">Password: </label>
            <input type="password" name="pass" value="">
            @if ($errors->has('pass'))
                <b>{{ $errors->first('pass') }}</b>
            @endif
            <br><br>
            <label for="work_position">Work Position: </label>
            <input type="text" name="work_position" value="">
            @if ($errors->has('work_position'))
                <b>{{ $errors->first('work_position') }}</b>
            @endif
            <br><br>
            <input type="submit" value="Registration">
            <br><br>
        </form>
    </fieldset>
@endsection
