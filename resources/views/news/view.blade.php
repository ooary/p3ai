@extends('layoutDashboard')
@section('title','Jurusan Panel')

@section('page-header','Show News')
@section('content')

	<table class="table">
		<tr>
			<td>
				<h3><span class="fa fa-tags"></span> {{$news->judul}} </h3>
			</td>
			
		</tr>
		<tr>
			<td>
				<h3><span class="fa fa-calendar"></span> {{date('d-m-Y',strtotime($news->tgl_posting))}} </h3>
			</td>
			
		</tr>
		<tr>
			<td>
				<span class="fa fa-tags"></span> 
				<img src="{{asset('img')}}/{{$news->img}}" width="500" height="500" class="img-rounded">	
				 {!!$news->isi!!}
			</td>
			
		</tr>
	</table>

@stop