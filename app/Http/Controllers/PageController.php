<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main(){
        return view('page.main');
    }
    public function login(){
        return view('page.login');
    }
}
