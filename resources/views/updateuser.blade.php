@extends('layout.layout')
@section('page')
	Страница редактирования пользователя
@endsection
@section('content')
	<div class="panel-body">
		<div class="container">
			<div class="row">
				@if(Session::has('success'))
				<div class="col-sm-offset-4 col-sm-4 col-sm-offset-4">
					<div class="alert alert-success">
						{{Session::get('success')}}
					</div>
				</div>
				@endif
				<div class="wrapper">
					@if($user)
					<form class="form-signin" action="{{route('updateUs', $user['id'])}}" method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							@if($errors->has('name'))<p style="color:red">{{$errors->first('name')}}</p>@endif
							<input type="text" class="form-control" id="name" name="name" value="{{$user['name']}}" placeholder="Имя">
						</div>
						<div class="form-group">
							@if($errors->has('fam'))<p style="color:red">{{$errors->first('fam')}}</p>@endif
							<input type="text" class="form-control" id="fam" name="fam" value="{{$user['fam']}}" placeholder="Фамилия">
						</div>
						<div class="form-group">
							@if($errors->has('login'))<p style="color:red">{{$errors->first('login')}}</p>@endif
							<input type="text" class="form-control" id="login" name="login" value="{{$user['login']}}" placeholder="Логин">
						</div>
						<div class="form-group">
							@if($errors->has('password'))<p style="color:red">{{$errors->first('password')}}</p>@endif
							<input type="password" class="form-control" id="pass" name="password" value="{{$user['password']}}" placeholder="Пароль">
						</div>
						<div class="form-group">
							@if($errors->has('datet'))<p style="color:red">{{$errors->first('datet')}}</p>@endif
							<input type="text" class="form-control" id="datepicker" name="datet" value="{{$user['datet']}}" placeholder="Дата рождения">
						</div>
						<div class="form-group">
							@if($errors->has('datet'))<p style="color:red">{{$errors->first('email')}}</p>@endif
							<input type="email" class="form-control" id="datepicker" name="email" value="{{$user['email']}}" placeholder="email">
						</div>
						<div class="form-group">
							@if($errors->has('pol'))<p style="color:red">{{$errors->first('pol')}}</p>@endif
							<select class="form-control" name="pol" id="pol">
							 	<option value="" disabled selected>Выберите пол</option>
							  	<option>Мужской</option>
							  	<option>Женский</option>
							</select>
						</div>
						<button type="submit" name="register" class="btn btn-lg btn-primary btn-block">Готово</button>
					</form>
					@endif	
					</div>
				</div>
			</div>	
        </div> <!-- ./container -->
	</div>
@endsection