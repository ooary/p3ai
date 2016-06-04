@extends('layoutDashboard')
@section('title','Pangkat Panel')

@section('page-header','Edit Pangkat')
@section('content')

<div class="row">
		<div class="col-md-12">
			{{Form::model($pangkat,['route'=>['dashboard.pangkat.update',$pangkat],'method'=>'patch' ])}}
						@include('pangkat._form',['model'=>$pangkat])
				{{Form::close()}}
			</div>
		</div>

@stop