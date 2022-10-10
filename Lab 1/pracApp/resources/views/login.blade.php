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
    <form action="/login" method = "post">
        {{csrf_field()}}
        <label for="uname">Username:</label>
        <input type="text" name="uname" id="uname" value="">
        @if($errors->has('uname'))
        <b>{{$errors->first('uname')}}</b>
        @endif
        <br><br>
        <label for="email">Email: </label>
        <input type="text" name="email" value="">
        @if($errors->has('email'))
        <b>{{$errors->first('email')}}</b>
        @endif
        <br><br>
        <label for="id">ID: </label>
        <input type="text" name="id" value="">
        @if($errors->has('id'))
        <b>{{$errors->first('id')}}</b>
        @endif
        <br><br>
        <label for="phone">Phone: </label>
        <input type="text" name="phone" value="">
        @if($errors->has('phone'))
        <b>{{$errors->first('phone')}}</b>
        @endif
        <br><br>
        <label for="age">Age: </label>
        <input type="text" name="age" value="">
        @if($errors->has('age'))
        <b>{{$errors->first('age')}}</b>
        @endif
        <br><br>
        <label for="companyName">Company Name: </label>
        <input type="text" name="companyName" value="">
        @if($errors->has('companyName'))
        <b>{{$errors->first('companyName')}}</b>
        @endif
        <br><br>
        <input type="submit" value="Registration">
        <br><br>
    </form>
</fieldset>
@endsection