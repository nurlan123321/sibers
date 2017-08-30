@extends('layout.layout')
@section('page')
	Страница авторизации
@endsection
@section('content')
<div class="panel-body">
	<div class="wrapper">
		<form class="form-signin" action="{{route('loginCheck')}}" method="POST"> 
			<input type="hidden" name="_token" value="{{ csrf_token() }}">      
			<h2 class="form-signin-heading">Авториза́ция</h2>
			@if($errors->has('login'))<p style="color:red">{{$errors->first('login')}}</p>@endif
			<input type="text" class="form-control" name="login" placeholder="Логин">
			@if($errors->has('password'))<p style="color:red">{{$errors->first('password')}}</p>@endif
			<input type="password" class="form-control" name="password" placeholder="Пароль">      
			<button class="btn btn-lg btn-primary btn-block" type="submit">Готово</button>   
		</form>
	</div>
</div>
@endsection