<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class TodoController extends Controller
{

  public function getUserList(){
    return response()->json(User::all());
  }

}
