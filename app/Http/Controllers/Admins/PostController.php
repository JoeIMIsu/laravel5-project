<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;

class PostController extends Controller
{
    public function getIndex()
    {
        return 'Admin Post';
    }

    public function getCreate()
    {
        return view('admins.posts.create');
    }

    public function postStore(Request $request)
    {
        $data = new Post;
        $data->title = $request->title;
        $data->slug = str_slug($request->title, "-");
        $data->short = $request->short;
        $data->description = $request->description;
        $data->save();
        return 'Save';
    }
}
