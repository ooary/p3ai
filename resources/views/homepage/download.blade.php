@extends('layoutHome')

@section('content')

   <div class="jumbotron">
      <div class="container">
        <h1> Download Area</h1>
        <p>Tempat Download Konten P3AI</p>
      </div>
    </div>
    <div class="container">
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
                            <a href="{{url('/download/')}}/{{$data->nama_file}}/get" class="btn btn-primary btn-sm"><span class="fa fa-download"></span></a>
  					            </td>
                      </tr>
                         @endforeach             
                    </tbody>
                </table>

    
  </div>
  </div>
   			
@stop