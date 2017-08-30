@extends('layout.layout')
@section('page')
	Профиль
@endsection
@section('content')
<div class="panel-body">
	<div class="wrapper">
		<div class="form-signin">
			<h2 class="form-signin-heading">Данные</h2>
			@foreach($users as $user)
			<ul class="list-group">
			  	<li class="list-group-item"><strong>Имя: </strong>{{$user->name}}</li>
			  	<li class="list-group-item"><strong>Фамилия: </strong>{{$user->fam}}</li>
			  	<li class="list-group-item"><strong>Логин: </strong>{{$user->login}}</li>
			  	<li class="list-group-item"><strong>Почта: </strong>{{$user->email}}</li>
			  	<li class="list-group-item"><strong>Дата рождения: </strong>{{$user->datet}}</li>
			  	<li class="list-group-item"><strong>Пол: </strong>{{$user->pol}}</li>
			</ul>
			@endforeach
		</div>
	</div>
</div>
@endsection