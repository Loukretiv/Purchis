@extends('layouts.default')

@section('content')
	<div class="loginContent">
		<div class="loginInner">
			<h1 class="ft-light">Purchis</h1>
			<p class="ft-light loginNote">
				@if(Session::has('message'))
					<p>{{ Session::get('message') }}</p>
				@endif
				Welcome, please sign in.
			</p>
			{{ Form::open(array('url'=>'login', 'method'=>'POST', 'class'=>'loginForm')) }}
				<div class="signinForm">
					<label for="user">
						{{ Form::label('user', 'Email Address:') }}
						{{ Form::text('user', null, array('class'=>'ft-thin')) }}
					</label>
					<label for="">
						{{ Form::label('pw', 'Password:') }}
						{{ Form::password('pw', null, array('class'=>'ft-thin')) }}
					</label>
					{{ Form::submit('Sign In', array('class'=>'ft-thin signin')) }}
				</div>
				<div class="pwReset">
					<span class="ft-thin pwAdv" >
						If your profile is the only admin account in your subscription, please fill in the form below.
						<br><br>
						Otherwise, please contact your subscription administrator to reset your account password.
					</span>
					<label for="">
						<span class="">Email Address:</span>
						<input type="text" name="" class="ft-thin">
					</label>
					<input type="submit" value="Get reset link" class="ft-thin">
					<a class="switching">Back to Login</a>
				</div>
			{{ Form::close() }}
			<p class="copyInfo">&copy; <a href="http://loukretiv.com" title="Loukretiv"><img src="img/LoginLogo.png" alt="Loukretiv"></a><sup>TM</sup> &nbsp;2014. All Rights Reserved.</p>
	   </div>
	</div>
	<div class="logPg ft-white">
		<p class="largeText ft-thin">Welcome to your <br>competitive advantage.</p>
		<p class="smallText ft-light">Modern Deal-modeling solution for the sophisticated CRE Investor.</p>
	</div>
@stop
