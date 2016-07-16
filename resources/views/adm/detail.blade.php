@extends('layoutDashboard')
@section('title','Data Dosen Panel')

@section('page-header','Detail Data '.$dataDosen->nama)
@section('content')

<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Detail Dosen</div>
<div class="media">
  <div class="media-left">
   	@if($dataDosen->photo =='')
		 <a href="{{asset('foto')}}/photo.png" data-lightbox="mygallery">
		 <img src="{{asset('foto')}}/photo.png" alt="">
		@else
         <a href="{{asset('foto')}}/{{$dataDosen->photo}}" data-lightbox="mygallery">
         <img src="{{asset('foto')}}/{{$dataDosen->photo}}" alt="">
	@endif

  </div>
  <div class="media-body">
  <!-- Table -->
  <table class="table">
		<tr>
			<td>NIP</td>
			<td>:</td>
			<td>{{$dataDosen->nip}}</td>
		</tr>
		<tr>
			<td>Nama</td></td>
			<td>:</td>
			<td>{{$dataDosen->nama}}</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>{{$dataDosen->agama}}</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td>{{date("d-m-Y",strtotime($dataDosen->agama))}}</td>
		</tr>
		<tr>
			<td>No Handphone</td>
			<td>:</td>
			<td>{{$dataDosen->no_hp}}</td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td>{{$dataDosen->showJurusan->jurusan}}</td>
		</tr>
		<tr>
			<td>Pangkat</td>
			<td>:</td>
			<td>
				@foreach($pangkat as $dataPangkat)
				@if($dataDosen->golongan_id == $dataPangkat->golongan_id)
					{{$dataPangkat -> showPangkat ->pangkat}}
						
				@endif
				@endforeach
			</td>
		</tr>
		<tr>
			<td>Golongan</td>
			<td>:</td>
			<td>
				{{$dataDosen->showGol->golongan}}
			</td>
		</tr>
		
		
		<tr>
			<td>Pendidikan</td>
			<td>:</td>
			<td>{{strtoupper($dataDosen->pendidikan)}}</td>
		</tr>
		<tr>
			<td>Posisi	</td>
			<td>:</td>
			<td>{{$dataDosen->posisi}}</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button onclick="history.go(-1)" class="btn btn-danger">Kembali</button></td>
		</tr>
		
  </table>
</div>
</div>
</div>

@stop