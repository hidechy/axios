<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Log;

use App\Http\Requests\UserRequest;

class UserController extends Controller
{

  public function getUserList(){
    return response()->json(User::all());
  }

  public function addUser(UserRequest $request){

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->save();

  }

}
