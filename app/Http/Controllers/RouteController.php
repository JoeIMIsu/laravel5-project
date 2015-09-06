<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class RouteController extends Controller
{
    public function index()
    {
        echo Session::token();
        return 'My Index';
    }

    public function view()
    {
        return 'My View';
    }

    public function show($id=0)
    {
        return 'Show ID :'.$id;
    }

    public function post()
    {
        return 'Post 1';
    }
}
