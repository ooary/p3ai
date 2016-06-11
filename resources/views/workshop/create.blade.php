@extends('layoutDashboard')
@section('title','Workshop Panel')

@section('page-header','Create Workshop')
@section('content')

<div class="row">
			<div class="col-md-12">

				{{Form::open(['route'=>'dashboard.workshop.store'])}}
						@include('workshop._form')
				{{Form::close()}}
			</div>
		</div>

@stop