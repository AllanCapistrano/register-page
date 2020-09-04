<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\User;

class UserController extends Controller
{
    // public function index()
    // {
    //   return view('success'); /*Implementar página de registrado com sucesso.*/
    // }

    public function store(Request $request)
    {
      $user = new User();

      $user->name = $request->name;
      $user->lastName = $request->lastName;
      $user->email = $request->email;
      $user->password = Crypt::encryptString($request->password);

      $user->save();

      /*Redirecionar para a página de registrado com sucesso.*/
      return redirect()->route('index');
    }
}
