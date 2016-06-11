@extends('layoutDashboard')
@section('title','Golongan Panel')

@section('page-header','Edit Golongan')
@section('content')

<div class="row">
		<div class="col-md-12">
			{{Form::model($golongan,['route'=>['dashboard.golongan.update',$golongan],'method'=>'patch' ])}}
						@include('golongan._form',['model'=>$golongan])
				{{Form::close()}}
			</div>
		</div>

@stop