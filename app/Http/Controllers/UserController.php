<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

class UserController extends Controller
{
	public function store(request $request){
		$validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed'
		]);
		
		if($validator->fails()) {
			return redirect()->back()->withErrors($validator);	
		}
		
		$name = $request->input('name');
		$email = $request->input('email');
		$password = $request->input('password');
		
       $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)
        ]);	

		auth()->login($user);
		
		return Redirect::to('main');
	}
	
	public function login(request $request)
	{
		$input = Input::all();

		$rules = [ 'name'=>'required', 'password'=>'required' ];

		$validator = Validator::make($input, $rules);

		if ($validator->passes()) {
			$attempt = Auth::attempt([
				'name' => $input['name'],
				'password' => $input['password']
			]);

			if ($attempt) {
				//return Redirect::intended('main');
				return response()->json(array('status' => 'success', 'url' => 'main'));
			}
			
			return response()->json(array('status' => 'error', 'message' => 'Username or password is wrong!'));
			/*return Redirect::to('login')
					->withErrors(['fail'=>'Username or password is wrong!']);*/
		}
		
		//fails
		return response()->json(array('status' => 'error', 'message' => $validator));
		/*return Redirect::to('login')
					->withErrors($validator)
					->withInput(Input::except('password'));*/
	}	
	
	public function logout()
	{
		Auth::logout();
		return Redirect::to('login');
	}	
}
