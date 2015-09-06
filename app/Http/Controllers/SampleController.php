<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    public function getBasic()
    {
        $data = array(
                'name' => 'John Doe',
                'company' => 'Links Innovation',
                'position' => 'DevOps'
        );

        $short = [
            'name' => 'John Doe 1',
            'company' => 'Links Innovation 1',
            'position' => 'DevOps 1'
        ];

        $results = [
            'data' => $data,
            'short' => $short
        ];

        return view('samples.demo', $results);
    }

    public function getShortarray()
    {
        $short = [
            'name' => 'John Doe 1',
            'company' => 'Links Innovation 1',
            'position' => 'DevOps 1'
        ];

        return view('samples.demo', ['name' => 'John Doe', 'short2' => $short] );
    }

    public function getWith()
    {
        $short = [
            'name' => 'John Doe 1',
            'company' => 'Links Innovation 1',
            'position' => 'DevOps 1'
        ];

        return view('samples.demo')
                ->with('name', 'John doe')
                ->with('short2', $short);
    }

    public function getCompact()
    {
        $data = array(
            'name' => 'John Doe',
            'company' => 'Links Innovation',
            'position' => 'DevOps'
        );

        $short = [
            'name' => 'John Doe 1',
            'company' => 'Links Innovation 1',
            'position' => 'DevOps 1'
        ];

        return view('samples.demo', compact('data', 'short'));
    }
}
