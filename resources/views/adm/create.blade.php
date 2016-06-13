@extends('layoutDashboard')
@section('title','Administrasi Jurusan Panel')

@section('page-header','Add Data ')
@section('content')

<div class="row">
			<div class="col-md-12">

				{{Form::open(['route'=>'dashboard.adm.store','files'=>true])}}
						@include('adm._form',['jurusan',$jurusan])
				{{Form::close()}}
			</div>
		</div>

@stop