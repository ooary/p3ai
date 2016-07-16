@extends('layoutDashboard')
@section('title','surat Keluar Panel')

@section('page-header','Tambah Data surat Keluar')
@section('content')

<div class="row">
			<div class="col-md-12">

				{{Form::open(['route'=>'dashboard.suratkeluar.store','files'=>'true'])}}
						@include('suratkeluar._form')
				{{Form::close()}}
			</div>
		</div>

@stop