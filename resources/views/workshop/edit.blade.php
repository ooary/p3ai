@extends('layoutDashboard')
@section('title','Workshop Panel')

@section('page-header','Edit Workshop '. $workshop->tema)
@section('content')

<div class="row">
		<div class="col-md-12">
			{{Form::model($workshop,['route'=>['dashboard.workshop.update',$workshop],'method'=>'patch','files'=>true ])}}
						@include('workshop._form',['model'=>$workshop])
				{{Form::close()}}
			</div>
		</div>

@stop