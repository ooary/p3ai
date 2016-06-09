@extends('layoutDashboard')
@section('title','Jurusan Panel')

@section('page-header','Add Jurusan')
@section('content')

<div class="row">
		<div class="col-md-12">
			{{Form::model($suratmasuk,['route'=>['dashboard.suratmasuk.update',$suratmasuk],'method'=>'patch','files'=>true ])}}
						@include('suratmasuk._form',['model'=>$suratmasuk])
				{{Form::close()}}
			</div>
		</div>

@stop