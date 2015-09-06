<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;


class PostController extends Controller
{
    public function getIndex()
    {
       /* Post::chunk(5, function ($data) {
            foreach ($data as $item) {
                echo $item->title.'<br />';
            }
        });*/


       /* $data = Post::take(100)
                    ->orderBy('status', 'asc')
                    ->get();*/
       // return view('samples.admin.demoadmin', compact('data'));
        return view('admins.posts.create');
    }

    public function getView($id =0)
    {
        $data = Post::find($id);
        return view('samples.admin.view', compact('data'));
    }

    public function getShow()
    {
        $data3 = ['company' => 'Links Innovation'];
        $data  = ['xxx'=>'AAAA', 'yyy'=>'BBB'];
        $data2  = ['xxx'=>'AAAA222', 'yyy'=>'BBB222'];

        return view('samples.admin.demoadmin', compact('data', 'data2', 'data3'));
    }

    public function postStore()
    {
        return 'Store';
    }

    public function getCreate()
    {
        return view('admins.posts.create');
    }
}
