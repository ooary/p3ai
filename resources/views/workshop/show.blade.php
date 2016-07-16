@extends('layoutDashboard')
@section('title','Show Workshop Panel')

@section('page-header','Workshop '. $workshop->tema)
@section('content')

<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Detail Workshop {{$workshop->tema}}</div>

<div class="media">

  <div class="media-body">
   <table class="table">
		<tr>
			<td>Tema</td>
			<td>:</td>
			<td>{{$workshop->tema}}</td>
		</tr>
		<tr>
			<td>Narasumber</td></td>
			<td>:</td>
			<td>{{$workshop->narasumber}}</td>
		</tr>
		<tr>
			<td>Tanggal Mulai</td>
			<td>:</td>
			<td><span class="fa fa-calendar"></span> {{date("d-m-Y",strtotime($workshop->tgl_mulai))}}</td>
		</tr>
		<tr>
			<td>Tanggal Selesai</td>
			<td>:</td>
			<td><span class="fa fa-calendar"></span> {{date("d-m-Y",strtotime($workshop->tgl_selesai))}}</td>
		</tr>
		<tr>
			<td>Surat Keterangan</td>
			<td>:</td>
			<td><ul>
				@foreach($workshop->hasSk as $sk)
				<li> <a href="{{url('/dashboard/workshop/sk')}}/{{$sk->id}}/download" >{{$sk -> sk}}</a> </li>
				@endforeach
				</ul>
		</td>
		</tr>
		<tr>
			<td>Materi</td>
			<td>:</td>
			<td><ul>
				@foreach($workshop->hasMateri as $fileMateri)
				<li><a href="{{url('/dashboard/workshop/materi')}}/{{$fileMateri->id}}/download">{{$fileMateri -> nama_materi}}  </a></li>
				@endforeach
				</ul>
			</td>
		</tr>
		<tr>
			<td>Isi</td>
			<td>:</td>
			<td>
				{!!$workshop->isi!!}
			</td>
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