<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testValue extends Controller
{

    public function index()
    {
        $data = [
            'name' => 'John Doe',
            'age' => 25
        ];
        return view('test', $data);
    }

    public function test()
    {
        $data = [
            'name' => 'John Doea',
            'age' => 256
        ];
        return view('test', $data);
    }
}
