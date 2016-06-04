@extends('layoutDashboard')
@section('title','Data Golongan Panel')

@section('page-header','Data Golongan Control')
@section('content')

          <a href="{{url('/dashboard/golongan/create')}}" class="btn btn-primary">Add Golongan</a>
			<hr>
      <div class="table-responsive">
        
   			<table class="table table-stripped table-bordered" id="dataTables">
          					<thead>
          						<tr>
          							<td>No</td>
          							<td>Golongan</td>


          							<td>Action</td>
          						</tr>
          					</thead>
          					<tbody>
                                    
                      @php($no=1)
                                      
                       @foreach($golongan as $data)
          						<tr>
          							<td>{{$no++}}</td>
          							<td>{{$data->golongan}}</td>

          							<td>
                           {{Form::model($data,['route'=>['dashboard.golongan.destroy',$data],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("are you sure?")'])}}
                                                  <a href="{{url('/dashboard/golongan/')}}/{{$data->id}}/edit" class="btn btn-sm btn-info">Edit</a>
                               {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
                          {{Form::close()}}
                                             </td>
          						</tr>
                                        @endforeach
          					</tbody>
          			</table>
      </div>
                
@stop