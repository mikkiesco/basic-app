<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $users = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users'));
        return view('home')->with('users',$users);
    }
}
