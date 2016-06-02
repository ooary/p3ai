@extends('layoutDashboard')
@section('title','Data Pangkat Panel')

@section('page-header','Data Pangkat Control')
@section('content')

          <a href="{{url('/dashboard/pangkat/create')}}" class="btn btn-primary">Add Pangkat</a>
			<hr>
   			<table class="table table-stripped table-bordered" id="dataTables">
          					<thead>
          						<tr>
          							<td>No</td>
          							<td>Pangkat</td>
          							<td>Action</td>
          						</tr>
          					</thead>
          					<tbody>
                           <?php
                                $no = 1;
                         ?>
                         @foreach($pangkat as $data)
          						<tr>
          							<td>{{$no++}}</td>
          							<td>{{$data->pangkat}}</td>
          							<td>
                            {{Form::model($data,['route'=>['dashboard.pangkat.destroy',$data],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("are you sure?")'])}}
                            <a href="{{url('/dashboard/pangkat/')}}/{{$data->id}}/edit" class="btn btn-sm btn-info">Edit</a>
                              {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
                            {{Form::close()}}
                                             </td>
          						</tr>
                          @endforeach
          					</tbody>
          			</table>
@stop