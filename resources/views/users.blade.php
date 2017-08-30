@extends('layout.layout')
@section('page')
	Все пользователи
@endsection
@section('content')
<div class="panel-body">
	<table class="table">
	  	<thead class="thead-inverse">
		    <tr>
		     	<th>Имя</th>
		      	<th>Фамилия</th>
		     	<th>Email</th>
		     	<th>Дата рождения</th>
		     	<th>Профиль</th>
		     	<th>Редактировать</th>
		     	<th>Удалить</th>
		    </tr>
	  	</thead>
	  	<tbody>
	  	@foreach($users as $user)
		    <tr>
		      	<td>{{$user->name}}</td>
		      	<td>{{$user->fam}}</td>
		      	<td>{{$user->email}}</td>
		      	<td>{{$user->datet}}</td>
		      	<td>
		      		<a href="{{route('prof',$user['id'])}}" class="btn btn-primary btn-xs">Посмотреть</a>
		      	</td>
		      	<td>
		      		<a href="{{route('updateUser',$user['id'])}}" class="btn btn-primary btn-xs">Редактировать</a>
		      	</td>
		      	<td>
		      		<form action="{{route('del',$user['id'])}}" method="delete">
		      			<button type="submit" class="btn btn-danger btn-xs">Удалить</button>
		      		</form>
		      	</td>
		    </tr>
		@endforeach    
	  	</tbody>
	</table>
	<div class="text-right">
		{{ $users->links() }}
	</div>
</div>
@endsection