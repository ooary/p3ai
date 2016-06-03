@extends('layoutDashboard')
@section('title','News Update Panel')

@section('page-header','News Update Control')
@section('content')

          <a href="{{url('/dashboard/news/create')}}" class="btn btn-primary">Create News</a>
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
                                        <?php 
                                             $no =1;
                                        ?>
                                        @foreach($news as $data)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$data->judul}}</td>
                       <td>
                                          {{Form::model($data,['route'=>['dashboard.news.destroy',$data],'method'=>'delete','class'=>'form-inline','onsubmit'=>'return confirm("are you sure?")'])}}
                                              <a href="{{url('/dashboard/news/')}}/{{$data->id}}/edit" class="btn btn-sm btn-info">Edit</a>
                                                <a href="{{url('/dashboard/news/')}}/{{$data->id}}" class="btn btn-sm btn-warning">Show</a>
                                             {{Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])}}
                                             {{Form::close()}}
                                             </td>
                      </tr>
                                        @endforeach
                    </tbody>
                </table>


      </div>
        			



@stop