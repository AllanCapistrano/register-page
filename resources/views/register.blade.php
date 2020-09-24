{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register</title>

        <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}">
    </head>
    <body>
        <main>
          <div class="title">
            <h1>Bem-vindo a uma plataforma genérica</h1>
            <h3>Preencha os campos abaixo para realizar o seu registro!</h3>
          </div>

          <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <input type="text" name="name" placeholder="Nome" class="form-field">
            </div>
            <div class="form-group">
              <input type="text" name="lastName" placeholder="Sobrenome" class="form-field">
            </div>
            <div class="form-group">
              <input type="email" name="email" placeholder="E-mail" class="form-field">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Senha" class="form-field">
            </div>
            <button type="submit" class="button-register">Cadastrar-se</button>
          </form>
        </main>
    </body>
</html> --}}

@extends('layouts.layout')

@section('title')
  <h1>Bem-vindo a uma plataforma genérica</h1>
  <h3>Preencha os campos abaixo para realizar o seu registro!</h3>
@endsection

@section('container')
  <form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <input type="text" name="name" placeholder="Nome" class="form-field">
    </div>
    <div class="form-group">
      <input type="text" name="lastName" placeholder="Sobrenome" class="form-field">
    </div>
    <div class="form-group">
      <input type="email" name="email" placeholder="E-mail" class="form-field">
    </div>
    <div class="form-group">
      <input type="password" name="password" placeholder="Senha" class="form-field">
    </div>
    <button type="submit" class="button-register">Cadastrar-se</button>
  </form>
@endsection