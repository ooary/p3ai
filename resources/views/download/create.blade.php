@extends('layoutDashboard')
@section('title','Upload File')

@section('page-header','Upload File')
@section('content')

<div class="row">
			<div class="col-md-12">

				{{Form::open(['route'=>'dashboard.download.store','files'=>true])}}
						@include('download._form')
				{{Form::close()}}
			</div>
		</div>

@stop