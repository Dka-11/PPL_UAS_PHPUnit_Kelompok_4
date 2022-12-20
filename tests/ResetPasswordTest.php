<?php

use App\User;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ResetPasswordTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */

   // Mengubah password baru
   public function testResetPassword()
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

       $this->get('/change-password');

       $reset = new User();
       $reset->password = 'andi123';

       $reset->save();
       $response = $this->get('/change-password');
       $response->assertResponseStatus(200);
    }

    // Field password tidak terisi
   public function testResetPassword2()
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

       $this->get('/change-password');

       $reset = new User();

       $reset->save();
       $response = $this->get('/change-password');
       $response->assertResponseStatus(200);
    }
}