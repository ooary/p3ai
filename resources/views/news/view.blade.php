@extends('layoutDashboard')
@section('title','Data Dosen Panel')

@section('page-header','Detail Data Dosen ')
@section('content')

<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Detail {{$news -> judul}}</div>

<div class="media">
  <div class="media-left">
		@if($news->img =='')
		 <a href="{{asset('foto')}}/nopic.png" data-lightbox="mygallery">
		 <img src="{{asset('foto')}}/nopic.png" alt="">
		@else
         <a href="{{asset('img')}}/{{$news->img}}" data-lightbox="mygallery">
         <img src="{{asset('img')}}/{{$news->img}}" class="img-rounded"alt="">
	@endif

   </a>
  </div>
  <div class="media-body">
   <table class="table">
		<tr>
			<td>Judul</td>
			<td>:</td>
			<td>{{$news->judul}}</td>
		</tr>
	
		
		<tr>
			<td>Tanggal Posting</td>
			<td>:</td>
			<td><span class="fa fa-calendar"></span> {{date("d-m-Y",strtotime($news->tgl_posting))}}</td>
		</tr>
			<tr>
			<td>Isi</td></td>
			<td>:</td>
			<td>{!!$news->isi!!}</td>
		</tr>
		
		<tr>
			<td></td>
			<td></td>
			<td><button onclick="history.go(-1)" class="btn btn-danger">Kembali</button></td>
		</tr>
		
  </table>
  </div>
</div>
  <!-- Table -->
 
</div>

@stop