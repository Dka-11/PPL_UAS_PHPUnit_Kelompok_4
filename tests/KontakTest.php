<?php

use App\Support;
use App\User;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class KontakTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
   // Form inputan terisi sempurna
   public function testKontak()
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

       $this->get('/support');
       $kontak = new Support();
       $kontak->name = 'Andi Mushawwir Rahmat';
       $kontak->email = 'mushawwir123@gmail.com';
       $kontak->message = 'Websitenya sangat membantu';

       $kontak->save();
       $response = $this->get('/support');
       $response->assertResponseStatus(200);
   }

    // Semua form inputan kosong
    public function testKontak2()
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
 
        $this->get('/support');
        $kontak = new Support();
 
        $kontak->save();
        $response = $this->get('/support');
        $response->assertResponseStatus(200);
    }
 
    // Field nama tidak terisi
   public function testKontak3()
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

       $this->get('/support');
       $kontak = new Support();
       $kontak->email = 'mushawwir123@gmail.com';
       $kontak->message = 'Websitenya sangat membantu';

       $kontak->save();
       $response = $this->get('/support');
       $response->assertResponseStatus(200);
   }

      // Field email tidak terisi
      public function testKontak4()
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
   
          $this->get('/support');
          $kontak = new Support();
          $kontak->name = 'Andi Mushawwir Rahmat';
          $kontak->message = 'Websitenya sangat membantu';
   
          $kontak->save();
          $response = $this->get('/support');
          $response->assertResponseStatus(200);
      }

      // Field email tidak menggunakan @
   public function testKontak5()
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

       $this->get('/support');
       $kontak = new Support();
       $kontak->name = 'Andi Mushawwir Rahmat';
       $kontak->email = 'mushawwir123gmail.com';
       $kontak->message = 'Websitenya sangat membantu';

       $kontak->save();
       $response = $this->get('/support');
       $response->assertResponseStatus(200);
   }

    // Form pesan tidak terisi
    public function testKontak6()
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
 
        $this->get('/support');
        $kontak = new Support();
        $kontak->name = 'Andi Mushawwir Rahmat';
        $kontak->email = 'mushawwir123@gmail.com';
        $kontak->message = 'Websitenya sangat membantu';
 
        $kontak->save();
        $response = $this->get('/support');
        $response->assertResponseStatus(200);
    }
}