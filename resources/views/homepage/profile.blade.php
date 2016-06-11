 @extends('layoutHome')
 @section('content')

   <div class="jumbotron">
      <div class="container">
        <h1> P3AI!</h1>
        <p>Pengembangan Pendidikan dan Pembelajaran Aktfitas instruksional</p>
      </div>
    </div>

    <div class="container">

      

      <div class="row">
        <div class="col-sm-8 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title">Profile</h2>
            <hr>
            <p class="blog-post-meta"></p>
                <p>
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
                </p>
               
          </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->

      @include('homepage._sidebar',['latest'=>$latest])

      </div><!-- /.row -->

    </div><!-- /.container -->

@stop
  