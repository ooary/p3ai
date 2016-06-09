@extends('layoutDashboard')
@section('title','Surat Masuk Panel')

@section('page-header','Surat Masuk Control')
@section('content')

	<h3></h3>


  <a href="{{url('/dashboard/suratmasuk/create')}}" class="btn btn-primary">Tambah Surat</a>
  <hr>
  <div class="table-responsive">
    
      <table class="table table-stripped table-hover dt-responsive nowrap" id="dataTables">
                    <thead>
                      <tr>
                        <td>No</td>
                        <td>No Surat</td>
                        <td>Judul Surat</td>
                        <td>Action</td>
                      </tr>
                    </thead>
                    <tbody>
                          @php($no=1)
                          @foreach($suratmasuk as $data)    	        
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->no_surat}}</td>
                        <td>{{$data->judul_surat}}</td>
					       	<td>
                       {{Form::model($data,['route'=>['dashboard.suratmasuk.destroy',$data],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("are you sure?")'])}}
                          {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
                           <a href="{{url('/dashboard/suratmasuk/')}}/{{$data->id}}/edit" class="btn btn-sm btn-info">Edit</a>
                               <a href="{{url('/dashboard/suratmasuk/')}}/{{$data->id}}/detail" class="btn btn-sm btn-warning">Detail</a>
                                      {{Form::close()}}
                                
                      </tr>
                           @endforeach
                    </tbody>
                </table>

    
  </div>







@stop