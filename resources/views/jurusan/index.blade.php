@extends('layoutDashboard')
@section('title','Jurusan Panel')

@section('page-header','Jurusan Control')
@section('content')

 <a href="{{url('/dashboard/jurusan/create')}}" class="btn btn-primary">Tambah Jurusan</a>
			<hr>
  <div class="table-responsive">
    
      <table class="table table-stripped table-hover dt-responsive nowrap" id="dataTables">
                    <thead>
                      <tr>
                        <td>No</td>
                        <td>Jurusan</td>
                        <td>Action</td>
                      </tr>
                    </thead>
                    <tbody>
                       @php($no=1)
                       @foreach($jurusan as $data)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->jurusan}}</td>
                        <td>
                                          {{Form::model($data,['route'=>['dashboard.jurusan.destroy',$data],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("are you sure?")'])}}
                                                  <a href="{{url('/dashboard/jurusan/')}}/{{$data->id}}/edit" class="btn btn-sm btn-info">Edit</a>
                                             {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
                                           {{Form::close()}}
                                             </td>
                      </tr>
                                        @endforeach
                    </tbody>
                </table>

    
  </div>
   			
@stop