@extends('layoutDashboard')
@section('title','Pangkat Panel')

@section('page-header','Edit Pangkat')
@section('content')

<div class="row">
		<div class="col-md-12">
			{{Form::model($golongan,['route'=>['dashboard.golongan.update',$golongan],'method'=>'patch' ])}}
						@include('golongan._form',['model'=>$golongan])
				{{Form::close()}}
			</div>
		</div>

@stop