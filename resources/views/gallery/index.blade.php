@extends('layoutDashboard')
@section('title','Data Gallery Panel')

@section('page-header','Data Gallery')
@section('content')
        

          {{Form::open(['url'=>'dashboard/gallery/store','class'=>'form-inline'])}}
              {{Form::text('nama_gallery',null,['class'=>'form-control','placeholder'=>'Masukan Nama Gallery','required'])}}
              {{Form::submit('Save',['class'=>'btn btn-sm btn-primary'])}}
          {{Form::close()}}
           @if ($errors->has('nama_gallery'))
            <span class="help-block">
                     <strong>{{ $errors->first('nama_gallery') }}</strong>
             </span>
           @endif
			<hr>
      <div class="table-responsive">
        
   			<table class="table table-stripped table-bordered" id="dataTables">
          					<thead>
          						<tr>
          							<td>No</td>
          							<td>Gallery</td>
                        <td>Tanggal Upload</td>
                        <td>Action</td>
          						</tr>
          					</thead>
          					<tbody>
                                    
                      @php($no=1)
                                      
                       @foreach($gallery as $data)
          						<tr>
          							<td>{{$no++}}</td>
          							<td>{{$data->nama_gallery}}</td>
                        <td>{{date('d-m-Y',strtotime($data->tgl_upload))}}</td>
          							<td>
                           <a href="{{url('/dashboard/gallery/')}}/{{$data->id}}/edit" class="btn btn-warning btn-sm"><span class="fa fa-upload"></span></a>
                            <a href="{{url('/dashboard/gallery/destroy')}}/{{$data->id}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                                             </td>
          						</tr>
                                        @endforeach
          					</tbody>
          			</table>
      </div>
                
@stop