@extends('layoutDashboard')
@section('title','News Update Panel')

@section('page-header','News Update Control')
@section('content')

          <a href="{{url('/dashboard/news/create')}}" class="btn btn-primary">Create News</a>
			<hr>
        			<table class="table table-stripped table-bordered" id="dataTables">
          					<thead>
          						<tr>
          							<td>No</td>
          							<td>Judul</td>
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