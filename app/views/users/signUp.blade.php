@extends('layouts.default')

@section('content')
  <div class="signUpCont">
    <h1 class="ft-white ft-thin">Purchis</h1>

    <div class="innerWrap signUpText codeEnt">
      <p class="ft-white ft-thin">Please enter your invitation code to sign up for a Purchis Beta Account.</p>
      {{ Form::open(array('url'=>'authenticateCode', 'method'=>'POST', 'class'=>'loginForm', 'style'=>'margin-top:20px;')) }}
        <label for="">
          <span class="ft-white ft-thin">Invite Code:</span>
          <input type="text" name="inviteCode" class="ft-thin" placeholder="XXX-XXX-XXX-XXX">
        </label>
        @if(Session::has('message'))
          <p style="color:#8f061e;">{{ Session::get('message') }}</p>
        @endif
        <input type="submit" value="Authenticate &raquo;" class="ft-thin authenticate">
      {{ Form::close() }}
      <br><br><br><br><br>
      <p class="ft-white ft-thin">If you do not have an invitation code and would like to request one, please </p><a class="ft-loukblue switching">Click Here</a>
    </div>
    <div class="innerWrap signUpText codeReq">
      <p class="ft-white ft-thin">Please enter your contact information below to request an invite code.</p>
      {{ Form::open(array('url'=>'requestCode', 'method'=>'POST', 'class'=>'loginForm', 'style'=>'margin-top:20px;')) }}
        <label for="">
          <span class="ft-white ft-thin">Full Name:</span>
          <input type="text" name="" class="ft-thin" placeholder="John Doe">
        </label>
        <label for="">
          <span class="ft-white ft-thin">Email:</span>
          <input type="text" name="" class="ft-thin" placeholder="john@example.com">
        </label>
        <label for="">
          <span class="ft-white ft-thin">Phone Number:</span>
          <input type="text" name="" class="ft-thin" placeholder="(XXX) XXX-XXXX">
        </label>
        <input type="submit" value="Request Code" class="ft-thin">
      {{ Form::close() }}
      <br><br><br><br><br>
      <p class="ft-white ft-thin">If you already have an invitation code, please </p><a class="ft-loukblue switching">Click Here to sign up.</a>
    </div>
  </div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/login.js"></script>
@stop
