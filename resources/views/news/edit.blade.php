@extends('layoutDashboard')
@section('title','Jurusan Panel')

@section('page-header','Add Jurusan')
@section('content')

<div class="row">
		<div class="col-md-12">
			{{Form::model($news,['route'=>['dashboard.news.update',$news],'method'=>'patch','files'=>true ])}}
						@include('news._form',['model'=>$news])
				{{Form::close()}}
			</div>
		</div>

@stop