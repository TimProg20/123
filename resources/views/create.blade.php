@extends('layouts.app')
@section('title')Создание@endsection
@section('content')
<section class="col-lg-5 mt-3">
    <div class="card"> 
    <form action="/contact/submit" method="post">
    @csrf  
	<div class="form-group">
	    <label for="name">Введите имя</label>
	    <div class="input-group">
		<input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
	    </div>
	</div>
	
	<div class="form-group">
	    <label for="email">email</label>
	    <div class="input-group">
		<input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
	    </div>
	</div>
	<div class="form-group">
	    <label for="message">Сообщение</label>
	    <div class="input-group">
		<textarea name="message" id="message" class="form-control"></textarea>
	    </div>
	</div>
	<button class="btn btn-navbar" type="submit">
	<i class="nav-icon fas fa-edit"></i>
	</button>
	
    </form>
    </div> 
<section>
@endsection