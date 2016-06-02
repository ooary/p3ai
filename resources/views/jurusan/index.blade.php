@extends('layoutDashboard')
@section('title','Jurusan Panel')

@section('page-header','Jurusan Control')
@section('content')

          <a href="{{url('/dashboard/jurusan/create')}}" class="btn btn-primary">Add Jurusan</a>
			<hr>
   			<table class="table table-stripped table-bordered" id="dataTables">
          					<thead>
          						<tr>
          							<td>No</td>
          							<td>Jurusan</td>
          							<td>Action</td>
          						</tr>
          					</thead>
          					<tbody>
          						<tr>
          							<td>data</td>
          							<td>data</td>
          							<td>data</td>
          						</tr>
          					</tbody>
          			</table>

@stop