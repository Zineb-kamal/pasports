@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<form  action="{{url('/send')}}" method ="post">
				{{ csrf_field()}}
				
				<div class="form-group" >

					<input type="text" class="form-control @if($errors->get('email')) is-invalid @endif " placeholder="email de destinataire" name="email" value="{{old('email')}}" >	
					
					@if($errors->get('email'))<div class="alert alert-danger">
					@foreach($errors->get('email') as $err)
					<ul><li>{{$err}}</li></ul>
					@endforeach</div>
					@endif
                     
				</div>
				<div class="form-group" >
					<TEXTAREA class="form-control @if($errors->get('body')) is-invalid @endif " name="body" placeholder="Message...">{{old('body')}}</TEXTAREA>
				

					@if($errors->get('body'))<div class="alert alert-danger">
					@foreach($errors->get('body') as $err)
					<ul><li>{{$err}}</li></ul>
					@endforeach
				</div>
					@endif   

				</div>
				
				<button type="submit" class="btn btn-secondary" >Envoyer</button>

			</form>
		</div>
	</div>
</div>
@endsection