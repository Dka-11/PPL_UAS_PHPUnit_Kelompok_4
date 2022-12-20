<?php

use App\Camp;
use App\User;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TambahJadwalTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */


   // Form inputan terisi sempurna
   public function testTambahJadwal()
   {
       $user = new User();
       $user->email = 'user123@example.com';
       $user->password = bcrypt('123456');

       $user->save();
       $response = $this->post('/login',[
           'email' => 'user123@example.com',
           'password' => bcrypt('123456'),
       ]);
       
       $response->assertResponseStatus(302);

       $this->actingAs($user);

       $this->get('/camp/new');
       $admintest = new Camp();
       $admintest->details = 'RS Lavalette';
       $admintest->city = 'Malang';
       $admintest->district = 'Blimbing';
       $admintest->state = 'Jl.Singa';
       $admintest->start = '2022-11-29T06:10';
       $admintest->end = '2022-11-31T06:10';

       $admintest->save();
       $response = $this->get('/camp/new');
       $response->assertResponseStatus(200);
   }


    // Semua form inputan kosong
    public function testTambahJadwal2()
    {
        $user = new User();
        $user->email = 'user123@example.com';
        $user->password = bcrypt('123456');
 
        $user->save();
        $response = $this->post('/login',[
            'email' => 'user123@example.com',
            'password' => bcrypt('123456'),
        ]);
        
        $response->assertResponseStatus(302);
 
        $this->actingAs($user);
 
        $this->get('/camp/new');
        $admintest = new Camp();
 
        $admintest->save();
        $response = $this->get('/camp/new');
        $response->assertResponseStatus(200);
    }

    // Field rumah sakit tidak terisi
   public function testTambahJadwal3()
   {
       $user = new User();
       $user->email = 'user123@example.com';
       $user->password = bcrypt('123456');

       $user->save();
       $response = $this->post('/login',[
           'email' => 'user123@example.com',
           'password' => bcrypt('123456'),
       ]);
       
       $response->assertResponseStatus(302);

       $this->actingAs($user);

       $this->get('/camp/new');
       $admintest = new Camp();
       $admintest->city = 'Malang';
       $admintest->district = 'Blimbing';
       $admintest->state = 'Jl.Singa';
       $admintest->start = '2022-11-29T06:10';
       $admintest->end = '2022-11-31T06:10';

       $admintest->save();
       $response = $this->get('/camp/new');
       $response->assertResponseStatus(200);
   }


     // Field kota tidak terisi
     public function testTambahJadwal4()
     {
         $user = new User();
         $user->email = 'user123@example.com';
         $user->password = bcrypt('123456');
  
         $user->save();
         $response = $this->post('/login',[
             'email' => 'user123@example.com',
             'password' => bcrypt('123456'),
         ]);
         
         $response->assertResponseStatus(302);
  
         $this->actingAs($user);
  
         $this->get('/camp/new');
         $admintest = new Camp();
         $admintest->details = 'RS Lavalette';
         $admintest->district = 'Blimbing';
         $admintest->state = 'Jl.Singa';
         $admintest->start = '2022-11-29T06:10';
         $admintest->end = '2022-11-31T06:10';
  
         $admintest->save();
         $response = $this->get('/camp/new');
         $response->assertResponseStatus(200);
     }


    // Field kecamatan tidak terisi
   public function testTambahJadwal5()
   {
       $user = new User();
       $user->email = 'user123@example.com';
       $user->password = bcrypt('123456');

       $user->save();
       $response = $this->post('/login',[
           'email' => 'user123@example.com',
           'password' => bcrypt('123456'),
       ]);
       
       $response->assertResponseStatus(302);

       $this->actingAs($user);

       $this->get('/camp/new');
       $admintest = new Camp();
       $admintest->details = 'RS Lavalette';
       $admintest->city = 'Malang';
       $admintest->state = 'Jl.Singa';
       $admintest->start = '2022-11-29T06:10';
       $admintest->end = '2022-11-31T06:10';

       $admintest->save();
       $response = $this->get('/camp/new');
       $response->assertResponseStatus(200);
   }

     // Field alamat tidak terisi
     public function testTambahJadwal6()
     {
         $user = new User();
         $user->email = 'user123@example.com';
         $user->password = bcrypt('123456');
  
         $user->save();
         $response = $this->post('/login',[
             'email' => 'user123@example.com',
             'password' => bcrypt('123456'),
         ]);
         
         $response->assertResponseStatus(302);
  
         $this->actingAs($user);
  
         $this->get('/camp/new');
         $admintest = new Camp();
         $admintest->details = 'RS Lavalette';
         $admintest->city = 'Malang';
         $admintest->district = 'Blimbing';
         $admintest->start = '2022-11-29T06:10';
         $admintest->end = '2022-11-31T06:10';
  
         $admintest->save();
         $response = $this->get('/camp/new');
         $response->assertResponseStatus(200);
     }

       // Field waktu mulai tidak terisi
   public function testTambahJadwal7()
   {
       $user = new User();
       $user->email = 'user123@example.com';
       $user->password = bcrypt('123456');

       $user->save();
       $response = $this->post('/login',[
           'email' => 'user123@example.com',
           'password' => bcrypt('123456'),
       ]);
       
       $response->assertResponseStatus(302);

       $this->actingAs($user);

       $this->get('/camp/new');
       $admintest = new Camp();
       $admintest->details = 'RS Lavalette';
       $admintest->city = 'Malang';
       $admintest->district = 'Blimbing';
       $admintest->state = 'Jl.Singa';
       $admintest->end = '2022-11-31T06:10';

       $admintest->save();
       $response = $this->get('/camp/new');
       $response->assertResponseStatus(200);
   }

  // Field waktu selesai tidak terisi
  public function testTambahJadwal8()
  {
      $user = new User();
      $user->email = 'user123@example.com';
      $user->password = bcrypt('123456');

      $user->save();
      $response = $this->post('/login',[
          'email' => 'user123@example.com',
          'password' => bcrypt('123456'),
      ]);
      
      $response->assertResponseStatus(302);

      $this->actingAs($user);

      $this->get('/camp/new');
      $admintest = new Camp();
      $admintest->details = 'RS Lavalette';
      $admintest->city = 'Malang';
      $admintest->district = 'Blimbing';
      $admintest->state = 'Jl.Singa';
      $admintest->start = '2022-11-29T06:10';

      $admintest->save();
      $response = $this->get('/camp/new');
      $response->assertResponseStatus(200);
  }
}