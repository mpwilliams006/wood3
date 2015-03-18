<?php


class UserController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return $users;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$firstname = Input::get('firstname');
		$lastname = Input::get('lastname');
		$input['email'] = Input::get('email');
		$password = Input::get('password');


		// Must not already exist in the `email` column of `users` table
		$rules = array('email' => 'unique:users,email');

		$validator = Validator::make($input, $rules);

		if ($validator->fails()) {
			if (Auth::attempt(array('email' => $input['email'], 'password' => $password), true))
			{
				return View::make('success');
			}else{
				return $password;
			}
		}
		else {

			$password = Hash::make($password);

			$user = new User;

			$user->firstname = $firstname;
			$user->lastname = $lastname;
			$user->email = $input['email'];
			$user->password = $password;

			$user->save();
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($email)
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password), true))
		{
			return View::make('success');
		}else{
			return $email;
		}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function logout() {
		Auth::logout();
		return View::make('hello');
	}


}
