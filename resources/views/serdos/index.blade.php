@extends('layoutDashboard')
@section('title','Data Serdos Panel')

@section('page-header','Data Serdos Control')
@section('content')
	
	<div class="row">
		<div class="col-md-12">
				<div class="list-group">
				@foreach($jurusan as $data)
					<a href="{{url('/dashboard/serdos')}}/{{$data->id}}" class="list-group-item"><span class="fa fa-folder"></span> {{$data->jurusan}}</a>
				@endforeach
				</div>	

		</div>
		
	</div>
	



@stop