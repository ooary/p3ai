@extends('layoutDashboard')
@section('title','Data Dosen Panel')

@section('page-header','Data Serdos ' . $dataDosen['jurusan']->jurusan)
@section('content')

  <h4>Statistik Data Serdos {{$dataDosen['jurusan']->jurusan}}</h4>
    <canvas id="chartStatistik"></canvas>
    <ul>
      <li >
      <h4>Jumlah Dosen Lulus  <span class="badge"> {{count($dataDosen['lulus'])}}</span></h4>
      </li>
      <li>
      <h4>Jumlah Tidak Lulus  <span class="badge">{{count($dataDosen['tidak'])}}</span> </h4>
      </li>
      <li>
         <h4>Jumlah Belum Serdos <span class="badge">{{count($dataDosen['belum'])}}</span> </h4>
      </li>
    </ul>

	<hr>
  <div class="table-responsive">
    
      <table class="table table-stripped table-hover dt-responsive nowrap" id="dataTables">
                    <thead>
                      <tr>
                        <td>No</td>
                        <td>NIP</td>
                        <td>Nama</td>
                        <td>Status</td>
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
                        <td>
                              @if($data->status =='3')
                              <span class="btn btn-xs btn-warning">BELUM SERDOS</span>
                             @elseif($data->status=='1')
                             <span class="btn btn-xs btn-primary">LULUS</span>
                              @elseif($data->status=='')
                              <span class="btn btn-xs btn-warning">BELUM SERDOS</span>
                             
                             @else
                             <span class="btn btn-xs btn-danger">TIDAK LULUS</span>

                             @endif

                        </td>
						            <td> 

                      
                         <a href="{{url('/dashboard/serdos/')}}/{{$data->id}}/edit" class="fa fa-edit"></a>

                         
                               </td>
                      </tr>
                         @endforeach             
                    </tbody>
                </table>

    
  </div>

  <script>
          var dataLulus = {{json_encode($ketLulus)}}
          var dataBelum = {{json_encode($ketBelum)}}
          var dataTidak = {{json_encode($ketTidak)}}

          var barData = {
                          labels: ['Lulus','Tidak Lulus','Belum Serdos'],
                          datasets: [
                          {
                           labels:'Lulus', 
                          fillColor: "green",
                          strokeColor: "rgba(151,187,205,0.8)",
                          pointColor: "rgba(220,220,220,1)",
                          pointStrokeColor: "#fff",
                          pointHighlightFill: "#fff",
                          pointHighlightStroke: "rgba(220,220,220,1)",
                          highlightFill: "rgba(151,187,205,0.75)",
                          highlightStroke: "rgba(151,187,205,1)",
                          data: [dataLulus.length,dataTidak.length,dataBelum.length] ,
                          }


                          ]
                          };
          window.onload = function(){
               var ctx = document.getElementById("chartStatistik").getContext("2d");
              var myChartLine = new Chart(ctx, {
                                              type: 'bar',
                                              data: barData,
                                              responsive:true,
                                              scaleOverride:true,
                                              scaleSteps:9,
                                              scaleStartValue:0,
                                              scaleStepWidth:100
                                                       
                                                 
                                          });
              


          }
         

  </script>







@stop