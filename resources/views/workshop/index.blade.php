@extends('layoutDashboard')
@section('title','Workshop Panel')

@section('page-header','Workshop Control')
@section('content')

          <a href="{{url('/dashboard/workshop/create')}}" class="btn btn-primary">Create Workshop</a>
			<hr>
      <div class="table-repsonsive">
        <table class="table table-stripped table-bordered dt-responsive nowrap" id="dataTables">
                    <thead>
                      <tr>
                        <td >No</td>
                        <td>Judul</td>
                        <td>Action</td>
                      </tr>
                    </thead>
                    <tbody>
                        @php($no=1)
                        @foreach($workshop as $data)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->tema}}</td>
                       <td>
                             {{Form::model($data,['route'=>['dashboard.workshop.destroy',$data],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("are you sure?")'])}}
                               <a href="{{url('dashboard/workshop')}}/{{$data->id}}/sk" class="btn btn-info btn-sm">Upload Sk</a>
                                <a href="{{url('dashboard/workshop')}}/{{$data->id}}/materi" class="btn btn-success btn-sm">Upload Materi</a>
                               <a href="{{url('/dashboard/workshop/')}}/{{$data->id}}/edit" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{url('/dashboard/workshop/')}}/{{$data->id}}" class="btn btn-sm btn-warning">Show</a>

                                             {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
                                             {{Form::close()}}
                                             </td>
                      </tr>
                                        @endforeach
                    </tbody>
                </table>


      </div>
        			



@stop