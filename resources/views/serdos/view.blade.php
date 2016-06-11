@extends('layoutDashboard')
@section('title','Data Dosen Panel')

@section('page-header','Data Serdos ' . $dataDosen['jurusan']->jurusan)
@section('content')

  <h4>Statistik Data Serdos {{$dataDosen['jurusan']->jurusan}}</h4>
  <div width="50" height="50">
    <canvas id="chartStatistik" ></canvas>


  </div>
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
 <a href="{{url('/dashboard/serdos/report')}}/{{$dataDosen['jurusan']->id}}" class="btn btn-success">Report</a>
  <a href="{{url('/dashboard/serdos/reportlulus')}}/{{$dataDosen['jurusan']->id}}" class="btn btn-primary">Report Lulus</a>
  <a href="{{url('/dashboard/serdos/reporttdk')}}/{{$dataDosen['jurusan']->id}}" class="btn btn-danger">Report Tidak Lulus</a>
  <a href="{{url('/dashboard/serdos/reportblm')}}/{{$dataDosen['jurusan']->id}}" class="btn btn-warning">Report Belum Serdos</a>


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

                      
                         <a href="{{url('/dashboard/serdos/')}}/{{$data->id}}/edit" class="btn btn-sm btn-warning " ><span class="fa fa-edit"></span></a>

                         
                               </td>
                      </tr>
                         @endforeach             
                    </tbody>
                </table>

    
  </div>

  <script>
          //http://www.chartjs.org/docs/
          var dataLulus = {{json_encode($ketLulus)}}
          var dataBelum = {{json_encode($ketBelum)}}
          var dataTidak = {{json_encode($ketTidak)}}

          var barData = {
                          labels: ['Lulus','Tidak Lulus','Belum Serdos'],
                          datasets: [
                          {
                            label: "Data Sertifikasi Dosen",
                              backgroundColor: [
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                             borderColor: [
                              
                              'rgba(54, 162, 235, 1)',
                              'rgba(255,99,132,1)',
                              'rgba(255, 206, 86, 1)',
                              'rgba(75, 192, 192, 1)',
                              'rgba(153, 102, 255, 1)',
                              'rgba(255, 159, 64, 1)'
                          ],
                         borderWidth: 1,
                          data: [dataLulus.length,dataTidak.length,dataBelum.length] ,
                           scales: {
                                                          yAxes: [{
                                                              ticks: {
                                                                  beginAtZero:true,
                                                              }
                                                                  }]
                                                      }
                          }

                          ]
                          };
              window.onload = function(){
               var ctx = document.getElementById("chartStatistik").getContext("2d");
              var myChartLine = new Chart(ctx, {
                                              type: 'bar',
                                              data: barData,
                                              responsive:true,
                                              maintainAspectRatio: false,
                                              scaleOverride:true,
                                              scaleSteps:9,
                                              scaleStartValue:0,
                                              scaleStepWidth:100
                                             
                                                                                                     
                                                 
                                          });
              


          }
         

  </script>







@stop