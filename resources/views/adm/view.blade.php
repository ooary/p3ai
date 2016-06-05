@extends('layoutDashboard')
@section('title','Data Dosen Panel')

@section('page-header','Data Administrasi Jurusan '. $dataDosen['jurusan']->jurusan )
@section('content')

	<h3>Data Administrasi Jurusan {{$dataDosen['jurusan']->jurusan}}</h3>


	<a href="{{url('/dashboard/adm/create')}}" class="btn btn-primary">Add Data</a>
			<hr>
  <div class="table-responsive">
    
      <table class="table table-stripped table-hover dt-responsive nowrap" id="dataTables">
                    <thead>
                      <tr>
                        <td>No</td>
                        <td>NIP</td>
                        <td>Nama</td>
                        <td>Action</td>
                      </tr>
                    </thead>
                    <tbody>
                          @php($no=1)
                         @foreach($dataDosen['dosen'] as $data)     	        
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data -> nip}}</td>
                        <td>{{$data -> nama}}</td>
						<td> {{Form::model($data,['route'=>['dashboard.adm.destroy',$data],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("are you sure?")'])}}
                             <a href="{{url('/dashboard/adm/')}}/{{$data->id}}/edit" class="btn btn-sm btn-info">Edit</a>
                               <a href="{{url('/dashboard/adm/')}}/{{$data->nip}}/detail" class="btn btn-sm btn-warning">Detail</a>
                                {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
                              {{Form::close()}}</td>
                      </tr>
                         @endforeach             
                    </tbody>
                </table>

    
  </div>







@stop