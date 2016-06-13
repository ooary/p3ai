@extends('layoutDashboard')
@section('title','Dosen Panel')

@section('page-header','Add Data Dosen')
@section('content')

<div class="row">
			<div class="col-md-12">

				{{Form::open(['route'=>'dashboard.dosen.store','files'=>true])}}
						@include('dosen._form',['jurusan'=>$jurusan])
				{{Form::close()}}
			</div>
		</div>

@stop