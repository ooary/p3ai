@extends('layoutDashboard')
@section('title','Dosen Panel')

@section('page-header','Add Data Dosen')
@section('content')

<div class="row">
			<div class="col-md-12">

				{{Form::open(['route'=>'dashboard.dosen.store'])}}
						@include('dosen._form')
				{{Form::close()}}
			</div>
		</div>

@stop