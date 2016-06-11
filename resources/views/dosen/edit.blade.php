@extends('layoutDashboard')
@section('title','Dosen Panel')

@section('page-header','Edit Data Dosen '.$dataDosen->nama)
@section('content')

<div class="row">
		<div class="col-md-12">
			{{Form::model($dataDosen,['route'=>['dashboard.dosen.update',$dataDosen],'method'=>'patch' ])}}
						@include('dosen._form',['model'=>$dataDosen])
				{{Form::close()}}
			</div>
		</div>

@stop