@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
       @include('parties.flash-msg')
			<form  action="{{url('/sendTo')}}" method ="post" enctype="multipart/form-data">
				{{ csrf_field()}}
				<div class="form-group" >
					<input class="form-control "  name="subject" placeholder="objet" value="{{old('subject')}}"></input>
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
			<div class="form-group" >
					<input class="form-control " name="img" type="file" value="{{old('img')}}"></input>

			</div>
				
				<button type="submit" class="btn btn-secondary" >Envoyer</button>

			</form>
		</div>
	</div>
</div>
@endsection