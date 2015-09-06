<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

use App\Models\Post;
use Auth;
use Input;
use Redirect;
use Session;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'getLogout']);
    }

    public function getIndex(Request $req, $page=1)
    {
        /*if (Auth::check())
        {
            //dd(Auth::user());
            $user = Auth::user();
            echo $user->id;
            dd(Auth::user());
            exit;
        } else {
            return 'Guest';
        }*/

        $data = Post::paginate(2);
        $data->setPath('post');
        $data->lastPage();

        return view('admins.posts.dashboard', compact('data'));
    }

    public function getView($id=0)
    {
        $data = Post::find($id);

        return view('admins.posts.view', compact('data'));
    }

    public function getCreate()
    {
        return view('admins.posts.create');
    }

    public function validator(array $data)
    {
        return Validator::make($data,[
                'title' => 'required',
                'short' => 'required'
            ]);
    }

    public function postStore(Request $req)
    {
        $validator = $this->validator(Input::all());

        if ($validator->fails()) {
            return Redirect('admin/post/create')
                    ->withErrors($validator)
                    ->withInput();
        }

        /*$user = Auth::user();
        echo $user->id;*/

        $data              = new Post;
        $data->title       = $req->title;
        $data->slug        = str_slug($req->title, "-");
        $data->short       = $req->short;
        $data->description = $req->description;
        //$data->user_id     = $user->id;
        $data->status      = 1;
        $data->save();

        Session::flash('success', 'You add ['.$data->title.'] success.');

        return Redirect('admin/post');

    }

    public function getEdit($id=0)
    {
        $data = Post::find($id);
        if ($data == null)
        {
            Session::flash('error', 'Your ID : '.$id.' was not found.');

            return Redirect('admin/post');
        }

        return view('admins.posts.edit', compact('data'));
    }

    public function postUpdate(Request $req, $id=0)
    {
        $validator = $this->validator(Input::all());
        if ($validator->fails()) {
            return Redirect('admin/post/edit/'.$id)
                    ->withErrors($validator)
                    ->withInput();
        }

        $data = Post::find($id);

        if ($data == null) {
            Session::flash('error', 'Your ID : '.$id.' was not found.');

            return Redirect('admin/post');
        }

        $data->title       = $req->title;
        $data->slug        = str_slug($req->title, "-");
        $data->short       = $req->short;
        $data->description = $req->description;
        $data->status      = $req->status;
        $data->updated_at  = date('Y-m-d H:m:s', time());
        $data->save();

        Session::flash('success', 'You Update ['.$data->title.'] success.');
        return Redirect('admin/post');
    }

    public function getDelete($id=0)
    {
        $data = Post::find($id);

        if ($data == null)
        {
            Session::flash('error', 'Your ID : '.$id.' was not found.');
        }

        Session::flash('success', 'Your Delete ['.$data->title.'] success.');

        return Redirect('admin/post');
    }
}
