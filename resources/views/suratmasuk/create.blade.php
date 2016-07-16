@extends('layoutDashboard')
@section('title','surat masuk Panel')

@section('page-header','Tambah Data surat masuk')
@section('content')

<div class="row">
			<div class="col-md-12">

				{{Form::open(['route'=>'dashboard.suratmasuk.store','files'=>'true'])}}
						@include('suratmasuk._form')
				{{Form::close()}}
			</div>
		</div>

@stop