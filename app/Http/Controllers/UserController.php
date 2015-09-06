<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Input;
use Redirect;
use Validator;
use Session;

class UserController extends Controller
{
    public function getIndex()
    {
        $data = User::all();
    	return view('users.dashboard', compact('data'));
    }

    public function getCreate()
    {
    	return view('users.create');
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
                'name'     => 'required|max:10',
                'lastname' => 'required|max:10',
                'email'    => 'required|email|max:255|unique:users', 
                'birthday' => 'required',
                'image'    => 'required',
                'profile'  => 'required'
            ]);
    }

    public function postStore(Request $req)
    {
        $validator = $this->validator(Input::all());

        if ($validator->fails()) {
            return Redirect('user/create')
                    ->withErrors($validator)
                    ->withInput();
        }

        $data           = new User;
        $data->name     = $req->name;
        $data->lastname = $req->lastname;
        $data->email    = $req->email;
        $data->password = $req->password;
        $data->birthday = date('Y-m-d H:i:s', strtotime($req->birthday));
        $data->image    = $req->image;
        $data->profile  = $req->profile;
        $data->sex      = 1;
        $data->message  = $req->message;
        $id = $data->save();

        //echo '<br />ID : '.$id;
        return Redirect('user')->withInput();
    }

    public function getEdit($id=0)
    {
        $data = User::find($id);
        return view('users/edit', compact('data'));
    }

    public function postUpdate(Request $req, $id=0)
    {
        $validator = $this->validator(Input::all());
        if ($validator->fails()) {
            return Redirect('user/edit/'.$id)
                    ->withError($validator)
                    ->withInput();
        }

        $data           = User::find($id);
        $data->name     = $req->name;
        $data->lastname = $req->lastname;
        $data->email    = $req->email;
        $data->password = $req->password;
        $data->birthday = date('H-m-d H:i:s', strtotime($req->birthday));
        $data->image    = $req->image;
        $data->profile  = $req->profile;
        $data->sex      = $req->sex;
        $data->message  = $req->message;
        $data->save();
        Session::flash('success', 'You Update ['.$data->name.'] success.');

        return Redirect('user')->withInput();

    }

    public function getView($id=0)
    {
        $data = User::find($id);
        return view('users.view', compact('data'));
    }

    public function getDelete($id=0)
    {
        $data = User::find($id);

        if ($data->count() > 0) {
            Session::flash('success', 'You delete ['.$data->name.'] success.');
            $data->delete();
        } else {
            Session::flash('error', 'Your id :'.$id.' was not found in system.');
        }

        return Redirect('user');
    }
}
