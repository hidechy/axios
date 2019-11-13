<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Log;

class TodoController extends Controller
{

  public function getUserList(){
    return response()->json(User::all());
  }

  public function addUser(Request $request){
    Log::debug('デバッグメッセージ' . $request->atai);
  }

}
