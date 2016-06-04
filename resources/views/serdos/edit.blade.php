@extends('layoutDashboard')
@section('title','Dosen Panel')

@section('page-header','Edit Data Dosen')
@section('content')

<div class="row">
		<div class="col-md-12">
			{{Form::model($dataDosen,['route'=>['dashboard.serdos.update',$dataDosen],'method'=>'patch' ])}}
						@include('serdos._form',['model'=>$dataDosen])
				{{Form::close()}}
			</div>
		</div>

@stop