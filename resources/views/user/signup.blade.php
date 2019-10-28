@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1>Регистрация</h1>
    @if(count($errors) > 0 )
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
        <form action="{{ route('user.signup') }}" method="POST">
            <div class="form-group">
                <label for="email">Почта E-mail</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Зарегистрироватся</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>
    @endsection