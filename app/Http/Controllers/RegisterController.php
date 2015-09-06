<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Support\Facades\Validator;
use Input;
use Redirect;
use Session;

class RegisterController extends Controller
{
    public function getIndex()
    {
        return view('auth.register');
    }

    public function validator(Array $input)
    {
        return Validator::make($input, [
                'name' => 'required',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:5',
                'password_confirmation' => 'required|min:5|same:password'
        ]);
    }

    public function postStore(Request $req)
    {
        $validator = $this->validator(Input::all());

        if($validator->fails())
        {
            return Redirect()->back()->withInput()->withErrors($validator);
        }
        $data           = new User;
        $data->name     = $req->name;
        $data->email    = $req->email;
        $data->password = bcrypt($req->password);
        $data->save();

        Session::flash('register_success', 'Your registration success. Please Login!');
        return Redirect('auth/login');
    }
}
