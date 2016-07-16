@extends('layoutDashboard')
@section('title','Dashboard Template for Bootstrap')

@section('page-header','Dashboard P3AI')
@section('content')
    <div class="jumbotron">
        <h2>Selamat Datang di Dashboard Admin P3AI!</h2>
        <p>Pengembangan Pendidikan dan Pembelajaran Aktfitas instruksional</p>
    </div>
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
             <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <span class="fa fa fa-check"></span> Latar Belakang
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      Sejalan dengan perkembangan kapasitas kelembagaan Politeknik Negeri Sriwijaya (Polsri) dan dengan adanya penembahan beragam aktivitas yang bersifat penugasan oleh lembaga vertikal dalam hal ini Direktorat Pendidikan Tinggi Kementrian Pendidikan Nasional (Dikti Kemendiknas) seperti Kurikulum berbasis komputerisasi,sertifikasi Dosen, rencana strategis pengembagan Dosen dan lain sebagainya, menuntut Polsri untuk dapat menyeimbangkan tambahan tugas rutin yang telah diemban selama ini. Selain itu adanya program sertifikasi ISO yang dilaksanakan Polsri saat ini memerlukan suatu organisasi yang mengarah pada pedoman kerja yang jelas, tidak overlapping  dan akuntabel. Dengan demikian laju percepatan perbaikan kualitas pelayanan sebagai semangat dasar institusi Polsri terus dapat dijaga keberlanjutannya. Berpedoman  dengan masalah diatas,sudah saatnya Polsri membentuk suatu unit tersendiri yang dapat mewadahi semua aktivitas yang dijelaskan diatas dalam bentuk unit yang dinamakan Pusat Pengembangan Pendidikan dan Aktivitas Instruksional (P3AI).
      </div>
    </div>
  </div>
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         <span class="fa fa-check"></span> Visi Misi dan Tujuan
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <h3>Visi</h3>
                  <ul>
                    <li>P3AI-Polsri menjadi Pusat Pengembangan Sumber Daya Pendidikan dan Pembelajaran, sains, Teknologi dan Seni yang berkualitas, dan menjadi rujukan bagi Politeknik Se-Indonesia.</li>
                  </ul>
                    <h3>Misi</h3>
                  <ul>
                    <li>Meningkatkan kualitas Sumber Daya Pendidikan berdasarkan prinsip-prinsip pedagogic dan penegakan etika akademik dengan melakukan pengembangan, pelatihan, lokakarya, workshop, monitoring dan evaluasi secara berkelanjutan, serta menyediakan software, hardware dan brainware yang berkualitas dalam mendukung proses pembelajaran bidang sains, teknologi dan seni.</li>
                  </ul>
                     <h3>Tujuan</h3>
                  <ul>
                    <li>Meningkatkan kualitas pembelajaran </li>
                    <li>Meningkatkan kemampuan dosen dalam pembelajaran menurut prinsip-prinsip pedagogic dan etika akademik.</li>
                    <li>Mengembangkan dan menyebarluaskan metode pembelajaran yang sesuai dengan perkembangan sains, teknologi dan seni.</li>
                    <li>Mengembangkan dan melakukan evaluasi kurikulum, SAP dan materi ajar secara berkesinambungan.</li>
                    <li>Menyediakan sumber daya (brainware, software, hardware) pembelajaran yang bermutu untuk meningkatkan kualitas layanan pada stake holder.</li>
                  </ul>
      </div>
    </div>
  </div>
  <!-- Colappse 2-->
   <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         <span class="fa fa fa-check"></span> Organisasi P3AI POLSRI
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
       Oganisasi P3AI-Polsri dibentuk berdasarkan kedudukan dan tujuannya dimana secara structural berada langsung dibawah Direktur dan koordinasinya dengan Pembantu Direktur Bidang Akademik (PD I), P3AI-Polsri secara substansial juga mempunyai hubungan dengan Unit/Pusat Pelayanan lain, Mahasiswa , Dosen dan Jurusan/Prodi di lingkungan Politeknik Negeri Sriwijaya.
        P3AI-POLSRI dipimpin oleh seorang Ketua Pusat yang dibantu olek Sekretaris Pusat. Sekretaris pusat memimpin sebuah secretariat yang menangani aspek administrasi,perangkat keras dan perangkat lunak. Secara operasional Ketua dibantu oleh tiga coordinator bidang yakni :
        <ol>
          <li>Koordinator bidang Penelitian dan Pengembangan Pembelajaran </li>
          <li>Koordinator bidang Pendidikan dan Pelatihan</li>
          <li>Koordinator bidang Media Pembelajaran dan Evaluasi Beban Kerja Dosen</li>
        </ol>
          Disamping itu dalam menyusun, mengembangkan, dan menjalankan program, P3AI didukung oleh kelompok sejawat (Peer Group) yang bersifar adhoc, beranggotakan dosen-dosen dari berbagai jurusan yang mempunyai minat dan kempuan khusus yang berkaitan dengan aspek pendidikan.

      </div>
    </div>
  </div>
  
  </div>

       
@stop