<?php

class UsersController extends BaseController {

	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
	}

	public function showLogin() {
		// if the user is logged in, redirect to the dashboard
		if(Auth::check()) {
			return Redirect::to('dashboard');
		} else {
			return View::make('users.index')
				->with('title', 'Login || PURCHIS')
				->with('bodyClass', 'loginBody');
		}
	}

	public function doLogin() {
		if(Auth::attempt(array('email'=>Input::get('user'), 'password'=>Input::get('pw')), true)) {
			return Redirect::to('dashboard')->with('message', 'You are now logged in!');
		} else {
			return Redirect::to('login')
				->with('message', 'Your username/password combination was incorrect.')
				->withInput();
		}
	}

	public function doLogout() {
		Auth::logout();
		return Redirect::to('login')
			->with('message', 'You have been logged out. Use the form below to log back in.');
	}

	public function showSignUp() {
		// if the user is logged in, redirect to the dashboard
		if(Auth::check()) {
			return Redirect::to('dashboard');
		} else {
			return View::make('users.signUp')
				->with('title', 'Sign Up || PURCHIS')
				->with('bodyClass', 'signUpBody');
		}
	}

	public function authenticateCode() {
		// Query for invite keys that match the key entered,
		// and also have been marked as sent to a user,
		// and have not yet been used
		$keys = InviteKey::where('key', '=', Input::get('inviteCode'))
										//->where('sent', '=', 'Y') commenting this out for testing purposes
										->where('registered', '<>', 'Y')
										->get();
		$key = null;
		if(count($keys) > 0) {
			$key = $keys[0]; // if the query returns any keys, just grab the first one
		}
		if(isset($key)) {
			$key->registered = 'Y'; // mark the key as registered so it is never returned again
			$key->save();
			return View::make('users.signUpInfo')
				->with('title', 'Sign Up || PURCHIS')
				->with('bodyClass', 'signUpBody')
				->with('key', $key->id); // we need to pass the key along so that we can tie a user ID to it once they register
		} else {
			return Redirect::to('signUp')
				->with('message', 'This code is not valid.')
				->withInput();
		}
	}

	public function requestCode() {

	}

	public function showRegister() {
		// if the user is logged in, redirect to the dashboard
		if(Auth::check()) {
			return Redirect::to('dashboard');
		} else {
			return View::make('users.register')
				->with('title', 'Sign Up || PURCHIS')
				->with('key', Input::get('key'));
		}
	}

	public function doRegister() {
		$rules = array(
			'fname'                 => 'required|alpha|min:2',
			'lname'                 => 'required|alpha|min:2',
			'email'                 => 'required|email|unique:users',
			//'phone'								=> insert awesome phone number regex here
			'company'               => 'required|alpha|min:2', // right now this isn't accepting spaces, but it should
			'password'              => 'required|alpha_num|between:6,12|confirmed', // these password rules need to be improved
			'password_confirmation' => 'required|alpha_num|between:6,12'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->passes()) {
			$user = User::create(array(
				'fname'      => Input::get('fname'),
				'lname'      => Input::get('lname'),
				'email'      => Input::get('email'),
				'password'   => Hash::make(Input::get('password')),
				'phone'      => Input::get('phone'),
				'company'    => Input::get('company')
			));

			// Update the invite key that was passed to the register page
			// with this new user's ID.
			$key = InviteKey::find(Input::get('key'));
			$key->user_id = $user->id;
			$key->save();

			// In the future, we probably want to send the user an email with a
			// verification link. That logic would probably go right here.

			return Redirect::to('login')->with('message', 'Thank you for registering!');
		} else {
			return Redirect::to('register')
				->with('message', 'The following errors occurred')
				->withErrors($validator)
				->withInput(Input::except('password'));
		}
	}
}
