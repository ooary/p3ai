@extends('layoutDashboard')
@section('title','Data  Administrasi Jurusan Panel')

@section('page-header','Data Administrasi Jurusan Control')
@section('content')
	
	<div class="row">
		<div class="col-md-12">
				<div class="list-group">
				@foreach($jurusan as $data)
					<a href="{{url('/dashboard/adm')}}/{{$data->id}}" class="list-group-item"><span class="fa fa-folder"></span> {{$data->jurusan}}</a>
				@endforeach
				</div>	

		</div>
		
	</div>
	



@stop