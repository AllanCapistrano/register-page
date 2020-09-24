<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  // public function index()
  // {
  //   return view('success'); /*Implementar página de registrado com sucesso.*/
  // }

  /*Fazer isso na model.*/
  public function store(Request $request)
  {
    $user = new User();

    $user->name = $request->name;
    $user->lastName = $request->lastName;
    $user->email = $request->email;
    $user->password = $user->encryptPassword($request->password);
    $user->save();

    /*Redirecionar para a página de registrado com sucesso.*/
    return redirect()->route('index');
  }

  public function check(Request $request)
  {
    $user = new User();

    $user->find($request->email, $request->password);
  }
}
