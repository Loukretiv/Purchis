@extends('layouts.default')

@section('content')
	<div class="signUpCont">
		<h1 class="ft-white ft-thin">Purchis</h1>
		<div class="signUpText">
			@if(Session::has('message'))
				<p>{{ Session::get('message') }}</p>
			@endif
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
			<p class="ft-white ft-thin">Please fill out the form below to sign up for the Purchis Beta.</p>
		</div>
		<div class="signUpText" style="margin-bottom:50px;">
			{{ Form::open(array('url'=>'registerUser', 'method'=>'POST', 'class'=>'loginForm SignUp')) }}
				{{ Form::hidden('key', $key) }}
				<fieldset>
					<legend>Contact Information</legend>
					<div class="section group">
						<label for="" class="col span_2_of_4">
							{{ Form::label('fname', 'First Name:', array('class'=>'ft-white ft-thin')) }}
							{{ Form::text('fname', null, array('class'=>'ft-thin empty', 'placeholder'=>'&#xF007;  John')) }}
						</label>
						<label for="" class="col span_2_of_4">
							{{ Form::label('lname', 'Last Name:', array('class'=>'ft-white ft-thin')) }}
							{{ Form::text('lname', null, array('class'=>'ft-thin empty', 'placeholder'=>'Doe')) }}
						</label>
					</div>
					<div class="section group">
						<label for="" class="col span_2_of_4">
							{{ Form::label('email', 'Email Address:', array('class'=>'ft-white ft-thin')) }}
							{{ Form::text('email', null, array('class'=>'ft-thin empty', 'placeholder'=>'&#xF0e0;  john@example.com')) }}
						</label>
						<label for="" class="col span_2_of_4">
							{{ Form::label('phone', 'Phone:', array('class'=>'ft-white ft-thin')) }}
							{{ Form::text('phone', null, array('class'=>'ft-thin empty', 'placeholder'=>'&#xf095;  XXX-XXX-XXXX')) }}
						</label>
					</div>
					<div class="section group">
						<label for="" class="col span_4_of_4">
							{{ Form::label('company', 'Company:', array('class'=>'ft-white ft-thin')) }}
							{{ Form::text('company', null, array('class'=>'ft-thin empty', 'placeholder'=>'&#xf1ad; ')) }}
						</label>
					</div>
					<div class="section group">
						<label for="" class="col span_2_of_4">
							{{ Form::label('password', 'Password:', array('class'=>'ft-white ft-thin')) }}
							{{ Form::password('password', null, array('class'=>'ft-thin empty')) }}
						</label>
						<label for="" class="col span_2_of_4">
							{{ Form::label('password_confirmation', 'Confirm Password:', array('class'=>'ft-white ft-thin')) }}
							{{ Form::password('password_confirmation', null, array('class'=>'ft-thin empty')) }}
						</label>
					</div>
				</fieldset>
				{{ Form::submit('Sign Up', array('class'=>'ft-thin signin')) }}
				<!--
				<fieldset class="billingAddress">
					<legend>Billing Address</legend>
					<div class="section group">
						<label for="" class="col span_4_of_4">
							<span class="ft-white ft-thin">Address:</span>
							<input type="text" name="address" class="ft-thin empty" placeholder="&#xf015; ">
						</label>
					</div>
					<div class="section group">
						<label for="" class="col span_5_of_10">
							<span class="ft-white ft-thin">City:</span>
							<input type="text" name="city" class="ft-thin empty" placeholder="&#xf041;">
						</label>
						<label for="" class="col span_2_of_10">
							<span class="ft-white ft-thin">State:</span>
							<input type="text" name="state" class="ft-thin empty" placeholder="&#xf19c; AL">
						</label>
						<label for="" class="col span_3_of_10">
							<span class="ft-white ft-thin">Zip:</span>
							<input type="text" name="zip" class="ft-thin empty" placeholder="&#xf024;">
						</label>
					</div>
				</fieldset>
				<fieldset>
					<legend>Payment Method</legend>
					<p class="ft-white ft-thin">Upon general availability, the full subscription price for Purchis will be $495.00/Mo. However, as a Beta tester, you are receiving a discount of 64% for the lifetime of your membership.</p>
					<h2 class="ft-thin ft-loukblue innerWrap"><span>$495.00/Mo.</span> $180.00/Mo.</h2><br>
					<div class="section group">
						<label for="" class="col span_2_of_4">
							<span class="ft-white ft-thin">Select a payment method:</span>
							<ul class="paymentOpts">
								<li><a class="visa"><i class="fa fa-cc-visa"></i></a></li>
								<li><a class="mastercard"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a class="amex"><i class="fa fa-cc-amex"></i></a></li>
								<li><a class="discover"><i class="fa fa-cc-discover"></i></a></li>
							</ul>
						</label>
						<div class="col span_2_of_4" style="padding-top:20px">
							<input type="submit" value="Enter your Payment Details &raquo;" class="ft-thin bringPay">
						</div>
					</div>
				</fieldset>
				<fieldset class="paymentSet">
					<legend>Your Payment</legend>
					<div class="section group">
						<label for="" class="col span_8_of_10">
							<span class="ft-white ft-thin">Card Number:</span>
							<input type="text" name="cardNumber" class="ft-thin empty" placeholder="&#xf09d;">
						</label>
						<label for="" class="col span_2_of_10">
							<span class="ft-white ft-thin">Security Code:</span>
							<input type="text" name="" class="ft-thin empty" placeholder="&#xf09d;">
						</label>
					</div>
					<fieldset class="section group">
						<legend>Expiration</legend>
						<label for="" class="col span_2_of_10">
							<span class="ft-white ft-thin">Month:</span>
							<select>
								<option selected="selected">Month</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
							</select>
						</label>
						<label for="" class="col span_2_of_10">
							<span class="ft-white ft-thin">Year:</span>
							<select>
								<option selected="selected">Month</option>
								<option>2014</option>
								<option>2015</option>
								<option>2016</option>
								<option>2017</option>
								<option>2018</option>
								<option>2019</option>
								<option>2020</option>
								<option>2021</option>
								<option>2022</option>
								<option>2023</option>
								<option>2024</option>
								<option>2025</option>
								<option>2026</option>
								<option>2027</option>
								<option>2028</option>
								<option>2029</option>
								<option>2030</option>
								<option>2031</option>
								<option>2032</option>
								<option>2033</option>
								<option>2034</option>
								<option>2035</option>
								<option>2036</option>
								<option>2037</option>
								<option>2038</option>
							</select>
						</label>
					</fieldset>
					<div class="section group">
						<p class="billAdd ft-white ft-thin" >BILLING ADDRESS<br>Street Address,<br> City, State, Zip<br><a style="text-align:left;" class="ft-loukblue changeAddy">Change this</a></p>
					</div>
					<div class="innerWrap">
						<input type="submit" value="Confirm Payment Details &raquo;">
					</div>
				</fieldset>
				-->
			{{ Form::close() }}

		</div>

	</div>
@stop
