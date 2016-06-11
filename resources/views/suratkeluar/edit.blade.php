@extends('layoutDashboard')
@section('title','Surat Keluar Panel')

@section('page-header','Edit Surat Keluar')
@section('content')

<div class="row">
		<div class="col-md-12">
			{{Form::model($suratkeluar,['route'=>['dashboard.suratkeluar.update',$suratkeluar],'method'=>'patch','files'=>true ])}}
						@include('suratkeluar._form',['model'=>$suratkeluar])
				{{Form::close()}}
			</div>
		</div>

@stop