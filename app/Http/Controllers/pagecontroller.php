<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function main(){
        return view(pages.main);
    }
}
