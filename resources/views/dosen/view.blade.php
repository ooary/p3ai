@extends('layoutDashboard')
@section('title','Data Dosen Panel')

@section('page-header','Data Dosen Control')
@section('content')

	<h3>Data Dosen {{$dataDosen['jurusan']->jurusan}}</h3>


  <a href="{{url('/dashboard/dosen/create')}}" class="btn btn-primary">Add Data Dosen</a>
	<a href="{{url('/dashboard/dosen/report')}}/{{$dataDosen['jurusan']->id}}" class="btn btn-primary">Report Dosen</a>
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
						<td>  {{Form::model($data,['route'=>['dashboard.dosen.destroy',$data],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("are you sure?")'])}}
                             <a href="{{url('/dashboard/dosen/')}}/{{$data->id}}/edit" class="btn btn-sm btn-info">Edit</a>
                               <a href="{{url('/dashboard/dosen/')}}/{{$data->nip}}/detail" class="btn btn-sm btn-warning">Detail</a>
                                {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
                              {{Form::close()}}</td>
                      </tr>
                         @endforeach             
                    </tbody>
                </table>

    
  </div>







@stop