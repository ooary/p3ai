@extends('layoutDashboard')
@section('title','Pangkat Panel')

@section('page-header','Tambah Pangkat')
@section('content')

<div class="row">
			<div class="col-md-12">

				{{Form::open(['route'=>'dashboard.pangkat.store'])}}
						@include('pangkat._form')
				{{Form::close()}}
			</div>
		</div>

@stop