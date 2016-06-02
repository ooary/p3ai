@extends('layoutDashboard')
@section('title','Jurusan Panel')

@section('page-header','Add News')
@section('content')

<div class="row">
			<div class="col-md-12">

				{{Form::open(['route'=>'dashboard.news.store','files'=>true])}}
						@include('news._form')
				{{Form::close()}}
			</div>
		</div>

@stop