@extends('layoutDashboard')
@section('title','Download Control Manager')

@section('page-header','Download Control')
@section('content')

 <a href="{{url('/dashboard/download/create')}}" class="btn btn-primary">Tambah File</a>
			<hr>
  <div class="table-responsive">
    
      <table class="table table-stripped table-hover dt-responsive nowrap" id="dataTables">
                    <thead>
                      <tr>
                        <td>No</td>
                        <td>Keterangan</td>
                        <td>File</td>
                        <td>Tanggal Upload</td>
                        <td>Downloaded</td>

                        <td>Action</td>
                      </tr>
                    </thead>
                    <tbody>
                       @php($no=1)
                      @foreach($dataFile as $data)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->ket}}</td>
                        <td>{{$data->nama_file}}</td>
                        <td>{{date('d-m-Y',strtotime($data->tgl_upload))}}</td>
                        <td>{{$data->downloaded}}</td>
                        <td>
                             {{Form::model($data,['route'=>['dashboard.download.destroy',$data],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("are you sure?")'])}}
                             <a href="{{url('/dashboard/download')}}/{{$data->nama_file}}/get" class="btn btn-primary btn-sm">Download</a>
  							{{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
                                           {{Form::close()}}
                                           
                                             </td>
                      </tr>
                         @endforeach             
                    </tbody>
                </table>

    
  </div>
   			
@stop