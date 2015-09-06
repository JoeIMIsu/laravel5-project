<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use App\Post;
use Input;
use Redirect;
use Session;

class PostController extends Controller
{
    public function getIndex()
    {
        $data = Post::all();

        return view('admins.posts.dashboard', compact('data'));
    }

    public function getCreate()
    {
        return view('admins.posts.create');
    }

    public function validator(Array $input)
    {
        return Validator::make($input, [
                'title' => 'required',
                'short' => 'required'
        ]);
    }

    public function postStore(Request $request)
    {
        $validator = $this->validator( Input::all() );

        if ( $validator->fails() )
        {
            return Redirect('admin/post/create')
                    ->withErrors($validator)
                    ->withInput();
        }

        $data = new Post;
        $data->title = $request->title;
        $data->slug = str_slug($request->title, "-");
        $data->short = $request->short;
        $data->description = $request->description;
        $data->save();

        Session::flash('success', 'You add ['.$data->title.'] success.');
        return Redirect('admin/post');
    }
}
