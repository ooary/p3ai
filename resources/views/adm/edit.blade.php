@extends('layoutDashboard')
@section('title','Adm Panel')

@section('page-header','Edit Data ')
@section('content')

<div class="row">
		<div class="col-md-12">
			{{Form::model($dataDosen,['route'=>['dashboard.adm.update',$dataDosen],'method'=>'patch','files'=>true ])}}
						@include('adm._form',['model'=>$dataDosen])
				{{Form::close()}}
			</div>
		</div>

@stop