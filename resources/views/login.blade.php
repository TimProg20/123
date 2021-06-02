@extends('layouts.app')
@section('title')Аутентификация@endsection
@section('content')
<section class="col-lg-5 mt-3">
    <div class="card"> 
    <form method="post" action="{{route('login')}}">
	@csrf
            <div class="form-group">
                <label for="email">email</label>
                <div class="input-group">
                    <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <div class="input-group">
                    <input type="text" name="password" placeholder="пароль" id="password" class="form-control">
                </div>
	    </div>
            <div class="form-group">
            <button class="btn btn-navbar" type="submit">
                <i class="nav-icon fas fa-edit"></i>
            </button>
    </form>
    </div>
</section>
@endsection