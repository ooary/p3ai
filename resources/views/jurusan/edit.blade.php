@extends('layoutDashboard')
@section('title','Jurusan Panel')

@section('page-header','Add Jurusan')
@section('content')

<div class="row">
		<div class="col-md-12">
			{{Form::model($jurusan,['route'=>['dashboard.jurusan.update',$jurusan],'method'=>'patch' ])}}
						@include('jurusan._form',['model'=>$jurusan])
				{{Form::close()}}
			</div>
		</div>

@stop