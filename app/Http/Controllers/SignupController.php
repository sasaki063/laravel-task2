<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
  public function index(Request $request)
  {
    return view('signup.index', ['msg'=>'フォームを入力：']);
  }

  public function post(Request $request)
  {
    $validate_rule = [
        'name' => 'required',
        'mail' => 'email',
        'password' => 'required|min:8',
        'password_confirm' => 'required|same:password',
    ];
    $this->validate($request, $validate_rule);

    return view('pages.home', ['name'=> $request->name]);
  }
}
