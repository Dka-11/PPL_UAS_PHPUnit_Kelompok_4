<?php

use App\BloodRequest;
use App\User;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FormulirTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */

    // Form inputan terisi sempurna
    public function testFormulir()
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

        $this->get('/request-blood');
        $bloodrequest = new BloodRequest();
        $bloodrequest->patient = 'Andi Dashtaran';
        $bloodrequest->group = 'AB +';
        $bloodrequest->city = 'Malang';
        $bloodrequest->district = 'Polowijen';
        $bloodrequest->state = 'Blimbing';
        $bloodrequest->hospital = 'Jl. Cakalang Indah 1';
        $bloodrequest->doctor = 'Lavalette';
        $bloodrequest->contact_person = '0852676324';
        $bloodrequest->contact_phone = '085298853452';
        $bloodrequest->contact_email = 'andimushawwir@gmail.com';
        $bloodrequest->when = '2022-11-29T06:10';

        $bloodrequest->save();
        $response = $this->get('/request-blood');
        $response->assertResponseStatus(200);
    }

     // Semua form inputan kosong
     public function testFormulir2()
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
 
         $this->get('/request-blood');
         $bloodrequest = new BloodRequest();
 
         $bloodrequest->save();
         $response = $this->get('/request-blood');
         $response->assertResponseStatus(200);
     }

    //Field nama pasien tidak terisi
    public function testFormulir3()
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

        $this->get('/request-blood');
        $bloodrequest = new BloodRequest();
        $bloodrequest->group = 'AB +';
        $bloodrequest->city = 'Malang';
        $bloodrequest->district = 'Polowijen';
        $bloodrequest->state = 'Blimbing';
        $bloodrequest->hospital = 'Jl. Cakalang Indah 1';
        $bloodrequest->doctor = 'Lavalette';
        $bloodrequest->contact_person = '0852676324';
        $bloodrequest->contact_phone = '085298853452';
        $bloodrequest->contact_email = 'andimushawwir@gmail.com';
        $bloodrequest->when = '2022-11-29T06:10';

        $bloodrequest->save();
        $response = $this->get('/request-blood');
        $response->assertResponseStatus(200);
    }

    // Field Kecamatan tidak terisi
    public function testFormulir4()
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

        $this->get('/request-blood');
        $bloodrequest = new BloodRequest();
        $bloodrequest->patient = 'Andi Dashtaran';
        $bloodrequest->group = 'AB +';
        $bloodrequest->city = 'Malang';
        $bloodrequest->state = 'Blimbing';
        $bloodrequest->hospital = 'Jl. Cakalang Indah 1';
        $bloodrequest->doctor = 'Lavalette';
        $bloodrequest->contact_person = '0852676324';
        $bloodrequest->contact_phone = '085298853452';
        $bloodrequest->contact_email = 'andimushawwir@gmail.com';
        $bloodrequest->when = '2022-11-29T06:10';

        $bloodrequest->save();
        $response = $this->get('/request-blood');
        $response->assertResponseStatus(200);
    }
    
// Field kelurahan tidak terisi
public function testFormulir5()
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

    $this->get('/request-blood');
    $bloodrequest = new BloodRequest();
    $bloodrequest->patient = 'Andi Dashtaran';
    $bloodrequest->group = 'AB +';
    $bloodrequest->city = 'Malang';
    $bloodrequest->district = 'Polowijen';
    $bloodrequest->hospital = 'Jl. Cakalang Indah 1';
    $bloodrequest->doctor = 'Lavalette';
    $bloodrequest->contact_person = '0852676324';
    $bloodrequest->contact_phone = '085298853452';
    $bloodrequest->contact_email = 'andimushawwir@gmail.com';
    $bloodrequest->when = '2022-11-29T06:10';

    $bloodrequest->save();
    $response = $this->get('/request-blood');
    $response->assertResponseStatus(200);
}

 // Field kota tidak terisi
 public function testFormulir6()
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

     $this->get('/request-blood');
     $bloodrequest = new BloodRequest();
     $bloodrequest->patient = 'Andi Dashtaran';
     $bloodrequest->group = 'AB +';
     $bloodrequest->district = 'Polowijen';
     $bloodrequest->state = 'Blimbing';
     $bloodrequest->hospital = 'Jl. Cakalang Indah 1';
     $bloodrequest->doctor = 'Lavalette';
     $bloodrequest->contact_person = '0852676324';
     $bloodrequest->contact_phone = '085298853452';
     $bloodrequest->contact_email = 'andimushawwir@gmail.com';
     $bloodrequest->when = '2022-11-29T06:10';

     $bloodrequest->save();
     $response = $this->get('/request-blood');
     $response->assertResponseStatus(200);
 }

 // Field alamat rumah tidak terisi
 public function testFormulir7()
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

     $this->get('/request-blood');
     $bloodrequest = new BloodRequest();
     $bloodrequest->patient = 'Andi Dashtaran';
     $bloodrequest->group = 'AB +';
     $bloodrequest->city = 'Malang';
     $bloodrequest->district = 'Polowijen';
     $bloodrequest->state = 'Blimbing';
     $bloodrequest->doctor = 'Lavalette';
     $bloodrequest->contact_person = '0852676324';
     $bloodrequest->contact_phone = '085298853452';
     $bloodrequest->contact_email = 'andimushawwir@gmail.com';
     $bloodrequest->when = '2022-11-29T06:10';

     $bloodrequest->save();
     $response = $this->get('/request-blood');
     $response->assertResponseStatus(200);
 }

  // Field rumah sakit tidak terisi
  public function testFormulir8()
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

      $this->get('/request-blood');
      $bloodrequest = new BloodRequest();
      $bloodrequest->patient = 'Andi Dashtaran';
      $bloodrequest->group = 'AB +';
      $bloodrequest->city = 'Malang';
      $bloodrequest->district = 'Polowijen';
      $bloodrequest->state = 'Blimbing';
      $bloodrequest->hospital = 'Jl. Cakalang Indah 1';
      $bloodrequest->doctor = 'Lavalette';
      $bloodrequest->contact_person = '0852676324';
      $bloodrequest->contact_phone = '085298853452';
      $bloodrequest->contact_email = 'andimushawwir@gmail.com';
      $bloodrequest->when = '2022-11-29T06:10';

      $bloodrequest->save();
      $response = $this->get('/request-blood');
      $response->assertResponseStatus(200);
  }

   // field nomor orangtua/wali tidak terisi
   public function testFormulir9()
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

       $this->get('/request-blood');
       $bloodrequest = new BloodRequest();
       $bloodrequest->patient = 'Andi Dashtaran';
       $bloodrequest->group = 'AB +';
       $bloodrequest->city = 'Malang';
       $bloodrequest->district = 'Polowijen';
       $bloodrequest->state = 'Blimbing';
       $bloodrequest->hospital = 'Jl. Cakalang Indah 1';
       $bloodrequest->doctor = 'Lavalette';
       $bloodrequest->contact_phone = '085298853452';
       $bloodrequest->contact_email = 'andimushawwir@gmail.com';
       $bloodrequest->when = '2022-11-29T06:10';

       $bloodrequest->save();
       $response = $this->get('/request-blood');
       $response->assertResponseStatus(200);
   }

    // Field email tidak terisi
    public function testFormulir10()
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

        $this->get('/request-blood');
        $bloodrequest = new BloodRequest();
        $bloodrequest->patient = 'Andi Dashtaran';
        $bloodrequest->group = 'AB +';
        $bloodrequest->city = 'Malang';
        $bloodrequest->district = 'Polowijen';
        $bloodrequest->state = 'Blimbing';
        $bloodrequest->hospital = 'Jl. Cakalang Indah 1';
        $bloodrequest->doctor = 'Lavalette';
        $bloodrequest->contact_person = '0852676324';
        $bloodrequest->contact_phone = '085298853452';
        $bloodrequest->when = '2022-11-29T06:10';

        $bloodrequest->save();
        $response = $this->get('/request-blood');
        $response->assertResponseStatus(200);
    }


    // Field nomor handphone tidak terisi
    public function testFormulir11()
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

        $this->get('/request-blood');
        $bloodrequest = new BloodRequest();
        $bloodrequest->patient = 'Andi Dashtaran';
        $bloodrequest->group = 'AB +';
        $bloodrequest->city = 'Malang';
        $bloodrequest->district = 'Polowijen';
        $bloodrequest->state = 'Blimbing';
        $bloodrequest->hospital = 'Jl. Cakalang Indah 1';
        $bloodrequest->doctor = 'Lavalette';
        $bloodrequest->contact_person = '0852676324';
        $bloodrequest->contact_email = 'andimushawwir@gmail.com';
        $bloodrequest->when = '2022-11-29T06:10';

        $bloodrequest->save();
        $response = $this->get('/request-blood');
        $response->assertResponseStatus(200);
    }

      // Field tanggal permintaan tidak terisi
      public function testFormulir12()
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
  
          $this->get('/request-blood');
          $bloodrequest = new BloodRequest();
          $bloodrequest->patient = 'Andi Dashtaran';
          $bloodrequest->group = 'AB +';
          $bloodrequest->city = 'Malang';
          $bloodrequest->district = 'Polowijen';
          $bloodrequest->state = 'Blimbing';
          $bloodrequest->hospital = 'Jl. Cakalang Indah 1';
          $bloodrequest->doctor = 'Lavalette';
          $bloodrequest->contact_person = '0852676324';
          $bloodrequest->contact_phone = '085298853452';
          $bloodrequest->contact_email = 'andimushawwir@gmail.com';
  
          $bloodrequest->save();
          $response = $this->get('/request-blood');
          $response->assertResponseStatus(200);
      }

}