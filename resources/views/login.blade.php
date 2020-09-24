@extends('layouts.layout')

@section('title')
  <h1>Faça o login preenchendo os campos abaixo</h1>
@endsection

@section('container')
  <form action="{{ route('user.check') }}" method="GET">
    <div class="form-group">
      <input type="email" name="email" placeholder="E-mail" class="form-field">
    </div>
    <div class="form-group">
      <input type="password" name="password" placeholder="Senha" class="form-field">
    </div>
    <button type="submit" class="button-register">Entrar</button>
  </form>
@endsection