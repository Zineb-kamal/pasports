@extends('layouts.app')
@section('content')
		
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<form   method ="POST" action="{{ url('index/'.$p->id.'/update')}}">
				@csrf
				@method('PUT')
				<div class="form-group" >
					<label for="nom">Nom :</label>
					<input type="text" class="form-control @if($errors->get('nom')) is-invalid @endif" name="nom" value="{{ old('nom',$p->nom )}}">
					@if($errors->get('nom'))
					  @foreach($errors->get('nom') as $err)
					       <ul><li>{{$err}}</li></ul>
					     @endforeach
					@endif
				</div>
				<div class="from-group ">
					<label for="prenom">Prenom:</label>
					<input type="text" class="form-control @if($errors->get('prenom')) is-invalid @endif" name="prenom" value="{{old('prenom',$p->prenom)}}" >
					@if($errors->get('prenom'))
					@foreach($errors->get('prenom') as $err)
					<ul><li>{{$err}}</li></ul>
					@endforeach
					@endif	
				</div>
				<div class="from-group ">
					<label for="Num">Pasport:</label>
					<input type="text" class="form-control @if($errors->get('Num')) is-invalid @endif" name="Num" value="{{old('Num',$p->Num_Pasport)}}">
					@if($errors->get('Num'))
					@foreach($errors->get('Num') as $err)
					<ul><li>{{$err}}</li></ul>
					@endforeach
					@endif	
				</div>

				<div class="form-group" >
					<label for="email">Email :</label>
					<input type="text" class="form-control @if($errors->get('email')) is-invalid @endif"
					name="email" value="{{old('email',$p->email)}}" >
					@if($errors->get('email'))
					@foreach($errors->get('email') as $err)
					<ul><li>{{$err}}</li></ul>
					@endforeach
					@endif	
				</div>
				
			</br>
				<div class="from-group">
					<input type="submit" class="form-control btn btn-primary" value="Edit" >
				</div>
			</form>
		</div>
	</div>
</div>
@endsection