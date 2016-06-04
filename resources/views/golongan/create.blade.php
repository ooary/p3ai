@extends('layoutDashboard')
@section('title','Golongan Panel')

@section('page-header','Add Golongan')
@section('content')

<div class="row">
			<div class="col-md-12">

				{{Form::open(['route'=>'dashboard.golongan.store'])}}
						@include('golongan._form')
				{{Form::close()}}
			</div>
		</div>

@stop