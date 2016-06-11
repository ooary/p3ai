@extends('layoutDashboard')
@section('title','Edit News Panel')

@section('page-header','Edit '. $news->judul)
@section('content')

<div class="row">
		<div class="col-md-12">
			{{Form::model($news,['route'=>['dashboard.news.update',$news],'method'=>'patch','files'=>true ])}}
						@include('news._form',['model'=>$news])
				{{Form::close()}}
			</div>
		</div>

@stop