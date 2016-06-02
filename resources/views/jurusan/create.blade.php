@extends('layoutDashboard')
@section('title','Jurusan Panel')

@section('page-header','Add Jurusan')
@section('content')

<div class="row">
			<div class="col-md-12">

				{{Form::open(['route'=>'dashboard.jurusan.store'])}}
						@include('jurusan._form')
				{{Form::close()}}
			</div>
		</div>

@stop