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
use App\Income;

class UserController extends Controller
{
	public function store(request $request){
		/*$validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed'
		]);*/
        $errors = [];
		if(!$request->input('name')) {
			//return redirect()->back()->withErrors($validator);
            $errors['name'] = "Username is required.";
		}else{
            $name = (string) $request->input('name');
            if (strlen($name) < '8') {
                $errors['name'] = "Username must more than 7 character.";
            }else {
                $user = User::where('name', $request->input('name'))->first();
                if (count($user) > 0) {
                    $errors['name'] = "Username is already been used.";
                }
            }
        }

        if(!$request->input('email')) {
            $errors['email'] = "Email is required.";
        }else{
            if (!filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Invalid email format.";
            }else {
                $user = User::where('email', $request->input('email'))->first();
                if (count($user) > 0) {
                    $errors['email'] = "Email is already been used.";
                }
            }
        }

        if(!$request->input('password')) {
            $errors['password'] = "Password is required.";
        }else{
            $password = (string) $request->input('password');
            if (strlen($password) <= '8') {
                $errors['password'] = "Your Password Must Contain At Least 8 Characters.";
            }
            elseif(!preg_match("#[0-9]+#",$password)) {
                $errors['password'] = "Your Password Must Contain At Least 1 Number.";
            }
            elseif(!preg_match("#[A-Z]+#",$password)) {
                $errors['password'] = "Your Password Must Contain At Least 1 Capital Letter.";
            }
            elseif(!preg_match("#[a-z]+#",$password)) {
                $errors['password'] = "Your Password Must Contain At Least 1 Lowercase Letter.";
            }
        }

        if(count($errors) <= 0) {
            $name = $request->input('name');
            $email = $request->input('email');
            $password = $request->input('password');

            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password)
            ]);

            auth()->login($user);

            //return Redirect::to('main');
            return response()->json(array('status' => 'success', 'url' => 'main'));
        }else{
            return response()->json(array('status' => 'error', 'errors' => $errors));
        }
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
				return response()->json(array('status' => 'success', 'url' => 'main'));
			}else{
				$count = User::where('name', $input['name'])->count();
				if($count <= 0){
					return response()->json(array('status' => 'error', 'message' => 'Username does not exist'));
				}

				$count = User::where('name', $input['name'])->where('password', $input['password'])->count();
				if($count <= 0){
					return response()->json(array('status' => 'error', 'message' => 'Password is incorrect'));
				}
			}
		}

		//fails
		return response()->json(array('status' => 'error', 'message' => $validator));
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('login');
	}

	public function getIncomes(){
		$user = Auth::user();
		$incomes = DB::table('incomes')
						->leftJoin('categories','categories.id','incomes.category')
						->where('incomes.user_id',$user->id)
						->select('incomes.amount','incomes.date','categories.name as category','incomes.description')
						->get();

        return response()->json(compact('incomes'));
	}
}
