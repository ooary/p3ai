<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('news')->truncate();
        
        $news = [   
                         ['judul'=>'Hello World',
                          'slug_judul'=>'hello-world',
                          'img'=>'helloWorld.png',
                          'isi'=>'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.',
                          'tgl_posting'=>date('Y-m-d'),
                          'posted_by'=>1],
                          ['judul'=>'Hello World 2',
                          'slug_judul'=>'hello-world-2',
                          'img'=>'helloWorld.png',
                          'isi'=>'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.',
                          'tgl_posting'=>date('Y-m-d'),
                          'posted_by'=>1] ,  
                          ['judul'=>'Hello World 3',
                          'slug_judul'=>'hello-world-3',
                          'img'=>'helloWorld.png',
                          'isi'=>'Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.',
                          'tgl_posting'=>date('Y-m-d'),
                          'posted_by'=>1]   
                ];
        DB::table('news')->insert($news);
    
         /// copy image 
          $from = database_path().DIRECTORY_SEPARATOR .'seeds'.DIRECTORY_SEPARATOR .'img'.DIRECTORY_SEPARATOR;
          $to = public_path().DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR;

         File::copy($from . 'helloWorld.png',$to .'helloWorld.png');
    }
}
