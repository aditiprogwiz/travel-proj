<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class applicationformcontroller extends Controller
{
   public function load() {
    return view('applicationform');
}
}
