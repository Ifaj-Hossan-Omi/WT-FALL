@extends('layout.app')

@section('title')
    Login
@endsection

@section('content')
    <h1>Job Provider Registration</h1>
    <fieldset>
        <legend>
            Registration
        </legend>


        <form action="/login" method="post">
            {{ csrf_field() }}
            <label for="uname">Username:</label>
            <input type="text" name="uname" id="uname" value="">
            @if ($errors->has('uname'))
                <b>{{ $errors->first('uname') }}</b>
            @endif
            <br><br>
            <label for="pass">Password: </label>
            <input type="password" name="pass" value="">
            @if ($errors->has('pass'))
                <b>{{ $errors->first('pass') }}</b>
            @endif
            <br><br>
            <input type="submit" value="Registration">
            <br><br>
        </form>
    </fieldset>
@endsection
