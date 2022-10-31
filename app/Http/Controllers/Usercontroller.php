<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
   function show(){
     $data=['mayin','akash','sajib'];
     return view('users',["names"=>$data]);

   }
}
