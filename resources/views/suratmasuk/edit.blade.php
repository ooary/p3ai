@extends('layoutDashboard')
@section('title','Surat Masuk Panel')

@section('page-header','Tambah Data Surat Masuk')
@section('content')

<div class="row">
		<div class="col-md-12">
			{{Form::model($suratmasuk,['route'=>['dashboard.suratmasuk.update',$suratmasuk],'method'=>'patch','files'=>true ])}}
						@include('suratmasuk._form',['model'=>$suratmasuk])
				{{Form::close()}}
			</div>
		</div>

@stop