<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditProfileUserTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */

     // Mengubah semua field
    public function testEditProfileUser()
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

        $usertest = new User([
            'name' => 'Andi Mushawwir Rahmat',
            'email' => 'andiawi123@gmail.com',
            'password' => '123456',
            'social' => '',
            'whatsapp' => '1',
            'age' => '21',
            'weight' => '80',
            'address' => 'Jalan Cakalang Indah 1',
            'state' => 'Polowijen',
            'city' => 'Malang',
            'district' => 'Blimbing',
            'phone' => '085267234',
            'is_donor' => '0',
            'is_admin' => '1',
            'last_donated' => '2022-11-29T06:10',
        ]);
        $usertest->save();

        $this->actingAs($usertest);

        $response = $this->get('/settings');
        $edituser = new User();
        $usertest->name = 'Andi Mushawwir Rahmat';
        $usertest->email = 'andiawi123@gmail.com';
        $usertest->password = '123456';
        $usertest->social = '';
        $usertest->whatsapp = '1';
        $usertest->age = '21';
        $usertest->weight = '80';
        $usertest->address = 'Jalan Cakalang Indah 1';
        $usertest->state = 'Polowijen';
        $usertest->city = 'Malang';
        $usertest->district = 'Blimbing';
        $usertest->phone = '085267234';
        $usertest->is_donor = '0';
        $usertest->is_admin = '1';
        $usertest->last_donated = '2022-11-29T06:10';


        $usertest->save();

        $response->assertResponseStatus(200);

    }

     // Field nama tidak terisi
     public function testEditProfileUser2()
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
 
         $usertest = new User([
             'name' => 'Andi Mushawwir Rahmat',
             'email' => 'andiawi123@gmail.com',
             'password' => '123456',
             'social' => '',
             'whatsapp' => '1',
             'age' => '21',
             'weight' => '80',
             'address' => 'Jalan Cakalang Indah 1',
             'state' => 'Polowijen',
             'city' => 'Malang',
             'district' => 'Blimbing',
             'phone' => '085267234',
             'is_donor' => '0',
             'is_admin' => '1',
             'last_donated' => '2022-11-29T06:10',
         ]);
         $usertest->save();
 
         $this->actingAs($usertest);
 
         $response = $this->get('/settings');
         $edituser = new User();
         $usertest->email = 'andiawi123@gmail.com';
         $usertest->password = '123456';
         $usertest->social = '';
         $usertest->whatsapp = '1';
         $usertest->age = '21';
         $usertest->weight = '80';
         $usertest->address = 'Jalan Cakalang Indah 1';
         $usertest->state = 'Polowijen';
         $usertest->city = 'Malang';
         $usertest->district = 'Blimbing';
         $usertest->phone = '085267234';
         $usertest->is_donor = '0';
         $usertest->is_admin = '1';
         $usertest->last_donated = '2022-11-29T06:10';
 
 
         $usertest->save();
 
         $response->assertResponseStatus(200);
 
     }

     // Field umur tidak terisi
     public function testEditProfileUser3()
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
 
         $usertest = new User([
             'name' => 'Andi Mushawwir Rahmat',
             'email' => 'andiawi123@gmail.com',
             'password' => '123456',
             'social' => '',
             'whatsapp' => '1',
             'age' => '21',
             'weight' => '80',
             'address' => 'Jalan Cakalang Indah 1',
             'state' => 'Polowijen',
             'city' => 'Malang',
             'district' => 'Blimbing',
             'phone' => '085267234',
             'is_donor' => '0',
             'is_admin' => '1',
             'last_donated' => '2022-11-29T06:10',
         ]);
         $usertest->save();
 
         $this->actingAs($usertest);
 
         $response = $this->get('/settings');
         $edituser = new User();
         $usertest->name = 'Andi Mushawwir Rahmat';
         $usertest->email = 'andiawi123@gmail.com';
         $usertest->password = '123456';
         $usertest->social = '';
         $usertest->whatsapp = '1';
         $usertest->weight = '80';
         $usertest->address = 'Jalan Cakalang Indah 1';
         $usertest->state = 'Polowijen';
         $usertest->city = 'Malang';
         $usertest->district = 'Blimbing';
         $usertest->phone = '085267234';
         $usertest->is_donor = '0';
         $usertest->is_admin = '1';
         $usertest->last_donated = '2022-11-29T06:10';
 
 
         $usertest->save();
 
         $response->assertResponseStatus(200);
 
     }

      // Field berat badan tidak terisi
    public function testEditProfileUser4()
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

        $usertest = new User([
            'name' => 'Andi Mushawwir Rahmat',
            'email' => 'andiawi123@gmail.com',
            'password' => '123456',
            'social' => '',
            'whatsapp' => '1',
            'age' => '21',
            'weight' => '80',
            'address' => 'Jalan Cakalang Indah 1',
            'state' => 'Polowijen',
            'city' => 'Malang',
            'district' => 'Blimbing',
            'phone' => '085267234',
            'is_donor' => '0',
            'is_admin' => '1',
            'last_donated' => '2022-11-29T06:10',
        ]);
        $usertest->save();

        $this->actingAs($usertest);

        $response = $this->get('/settings');
        $edituser = new User();
        $usertest->name = 'Andi Mushawwir Rahmat';
        $usertest->email = 'andiawi123@gmail.com';
        $usertest->password = '123456';
        $usertest->social = '';
        $usertest->whatsapp = '1';
        $usertest->weight = '80';
        $usertest->address = 'Jalan Cakalang Indah 1';
        $usertest->state = 'Polowijen';
        $usertest->city = 'Malang';
        $usertest->district = 'Blimbing';
        $usertest->phone = '085267234';
        $usertest->is_donor = '0';
        $usertest->is_admin = '1';
        $usertest->last_donated = '2022-11-29T06:10';

        $usertest->save();
        $response->assertResponseStatus(200);
    }

     // Field alamat rumah tidak terisi
     public function testEditProfileUser5()
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
 
         $usertest = new User([
             'name' => 'Andi Mushawwir Rahmat',
             'email' => 'andiawi123@gmail.com',
             'password' => '123456',
             'social' => '',
             'whatsapp' => '1',
             'age' => '21',
             'weight' => '80',
             'address' => 'Jalan Cakalang Indah 1',
             'state' => 'Polowijen',
             'city' => 'Malang',
             'district' => 'Blimbing',
             'phone' => '085267234',
             'is_donor' => '0',
             'is_admin' => '1',
             'last_donated' => '2022-11-29T06:10',
         ]);
         $usertest->save();
 
         $this->actingAs($usertest);
 
         $response = $this->get('/settings');
         $edituser = new User();
         $usertest->name = 'Andi Mushawwir Rahmat';
         $usertest->email = 'andiawi123@gmail.com';
         $usertest->password = '123456';
         $usertest->social = '';
         $usertest->whatsapp = '1';
         $usertest->age = '21';
         $usertest->weight = '80';
         $usertest->state = 'Polowijen';
         $usertest->city = 'Malang';
         $usertest->district = 'Blimbing';
         $usertest->phone = '085267234';
         $usertest->is_donor = '0';
         $usertest->is_admin = '1';
         $usertest->last_donated = '2022-11-29T06:10';
 
 
         $usertest->save();
 
         $response->assertResponseStatus(200);
 
     }

      // Field kelurahan tidak terisi
    public function testEditProfileUser6()
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

        $usertest = new User([
            'name' => 'Andi Mushawwir Rahmat',
            'email' => 'andiawi123@gmail.com',
            'password' => '123456',
            'social' => '',
            'whatsapp' => '1',
            'age' => '21',
            'weight' => '80',
            'address' => 'Jalan Cakalang Indah 1',
            'state' => 'Polowijen',
            'city' => 'Malang',
            'district' => 'Blimbing',
            'phone' => '085267234',
            'is_donor' => '0',
            'is_admin' => '1',
            'last_donated' => '2022-11-29T06:10',
        ]);
        $usertest->save();

        $this->actingAs($usertest);

        $response = $this->get('/settings');
        $edituser = new User();
        $usertest->name = 'Andi Mushawwir Rahmat';
        $usertest->email = 'andiawi123@gmail.com';
        $usertest->password = '123456';
        $usertest->social = '';
        $usertest->whatsapp = '1';
        $usertest->age = '21';
        $usertest->weight = '80';
        $usertest->address = 'Jalan Cakalang Indah 1';
        $usertest->state = 'Polowijen';
        $usertest->city = 'Malang';
        $usertest->district = 'Blimbing';
        $usertest->phone = '085267234';
        $usertest->is_donor = '0';
        $usertest->is_admin = '1';
        $usertest->last_donated = '2022-11-29T06:10';

        $usertest->save();
        $response->assertResponseStatus(200);
    }

     // Field kecamatan tidak terisi
     public function testEditProfileUser7()
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
 
         $usertest = new User([
             'name' => 'Andi Mushawwir Rahmat',
             'email' => 'andiawi123@gmail.com',
             'password' => '123456',
             'social' => '',
             'whatsapp' => '1',
             'age' => '21',
             'weight' => '80',
             'address' => 'Jalan Cakalang Indah 1',
             'state' => 'Polowijen',
             'city' => 'Malang',
             'district' => 'Blimbing',
             'phone' => '085267234',
             'is_donor' => '0',
             'is_admin' => '1',
             'last_donated' => '2022-11-29T06:10',
         ]);
         $usertest->save();
 
         $this->actingAs($usertest);
 
         $response = $this->get('/settings');
         $edituser = new User();
         $usertest->name = 'Andi Mushawwir Rahmat';
         $usertest->email = 'andiawi123@gmail.com';
         $usertest->password = '123456';
         $usertest->social = '';
         $usertest->whatsapp = '1';
         $usertest->age = '21';
         $usertest->weight = '80';
         $usertest->address = 'Jalan Cakalang Indah 1';
         $usertest->state = 'Polowijen';
         $usertest->city = 'Malang';
         $usertest->phone = '085267234';
         $usertest->is_donor = '0';
         $usertest->is_admin = '1';
         $usertest->last_donated = '2022-11-29T06:10';
 
         $usertest->save();
         $response->assertResponseStatus(200);
     }

      // Field kota tidak terisi
    public function testEditProfileUser8()
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

        $usertest = new User([
            'name' => 'Andi Mushawwir Rahmat',
            'email' => 'andiawi123@gmail.com',
            'password' => '123456',
            'social' => '',
            'whatsapp' => '1',
            'age' => '21',
            'weight' => '80',
            'address' => 'Jalan Cakalang Indah 1',
            'state' => 'Polowijen',
            'city' => 'Malang',
            'district' => 'Blimbing',
            'phone' => '085267234',
            'is_donor' => '0',
            'is_admin' => '1',
            'last_donated' => '2022-11-29T06:10',
        ]);
        $usertest->save();

        $this->actingAs($usertest);

        $response = $this->get('/settings');
        $edituser = new User();
        $usertest->name = 'Andi Mushawwir Rahmat';
        $usertest->email = 'andiawi123@gmail.com';
        $usertest->password = '123456';
        $usertest->social = '';
        $usertest->whatsapp = '1';
        $usertest->age = '21';
        $usertest->weight = '80';
        $usertest->address = 'Jalan Cakalang Indah 1';
        $usertest->state = 'Polowijen';
        $usertest->district = 'Blimbing';
        $usertest->phone = '085267234';
        $usertest->is_donor = '0';
        $usertest->is_admin = '1';
        $usertest->last_donated = '2022-11-29T06:10';

        $usertest->save();
        $response->assertResponseStatus(200);
    }

     // Field nomor handphone tidak terisi
     public function testEditProfileUser9()
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
 
         $usertest = new User([
             'name' => 'Andi Mushawwir Rahmat',
             'email' => 'andiawi123@gmail.com',
             'password' => '123456',
             'social' => '',
             'whatsapp' => '1',
             'age' => '21',
             'weight' => '80',
             'address' => 'Jalan Cakalang Indah 1',
             'state' => 'Polowijen',
             'city' => 'Malang',
             'district' => 'Blimbing',
             'phone' => '085267234',
             'is_donor' => '0',
             'is_admin' => '1',
             'last_donated' => '2022-11-29T06:10',
         ]);
         $usertest->save();
 
         $this->actingAs($usertest);
 
         $response = $this->get('/settings');
         $edituser = new User();
         $usertest->name = 'Andi Mushawwir Rahmat';
         $usertest->email = 'andiawi123@gmail.com';
         $usertest->password = '123456';
         $usertest->social = '';
         $usertest->whatsapp = '1';
         $usertest->age = '21';
         $usertest->weight = '80';
         $usertest->address = 'Jalan Cakalang Indah 1';
         $usertest->state = 'Polowijen';
         $usertest->city = 'Malang';
         $usertest->district = 'Blimbing';
         $usertest->is_donor = '0';
         $usertest->is_admin = '1';
         $usertest->last_donated = '2022-11-29T06:10';
 
         $usertest->save();
         $response->assertResponseStatus(200);
     }

      // Field terakhir donor tidak terisi
    public function testEditProfileUser10()
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

        $usertest = new User([
            'name' => 'Andi Mushawwir Rahmat',
            'email' => 'andiawi123@gmail.com',
            'password' => '123456',
            'social' => '',
            'whatsapp' => '1',
            'age' => '21',
            'weight' => '80',
            'address' => 'Jalan Cakalang Indah 1',
            'state' => 'Polowijen',
            'city' => 'Malang',
            'district' => 'Blimbing',
            'phone' => '085267234',
            'last_donated' => '2022-11-29T06:10',
        ]);
        $usertest->save();

        $this->actingAs($usertest);

        $response = $this->get('/settings');
        $edituser = new User();
        $usertest->name = 'Andi Mushawwir Rahmat';
        $usertest->email = 'andiawi123@gmail.com';
        $usertest->password = '123456';
        $usertest->social = '';
        $usertest->whatsapp = '1';
        $usertest->age = '21';
        $usertest->weight = '80';
        $usertest->address = 'Jalan Cakalang Indah 1';
        $usertest->state = 'Polowijen';
        $usertest->city = 'Malang';
        $usertest->district = 'Blimbing';
        $usertest->phone = '085267234';

        $usertest->save();
        $response->assertResponseStatus(200);
    }
}