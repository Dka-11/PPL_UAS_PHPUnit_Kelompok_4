<?php

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */

    //  Menguji Fungsionalitas fitur login

    // TC_LOGIN_001 - Form Inputan Terisi Sempurna
    // Start - TC_LOGIN_001

    // public function test_Login_001()
    // {
    //     $user = new User([
    //         'email' => 'user@example.com',
    //         'password' => bcrypt('123456'),
    //     ]);

    //     $user->save();

    //     $response = $this->post('/login', [
    //         'email' => 'adika123@gmail.com',
    //         'password' => bcrypt('123456'),
    //     ]);

    //     $response->assertResponseStatus(302);
    // }

    // End - TC_LOGIN_001

    // --------------------

    // TC_LOGIN_002 - Form inputan kosong
    // Start - TC_LOGIN_002

    // public function test_Login_002()
    // {
    //     $user = new User([
    //         'email' => 'user@example.com',
    //         'password' => bcrypt('123456'),
    //     ]);

    //     $user->save();

    //     $response = $this->post('/login', []);

    //     $response->assertResponseStatus(302);
    // }

    // End - TC_LOGIN_002

    // --------------------

    // TC_LOGIN_003 - Form pada bagian email berisi email yang belum terdaftarkan
    // Start - TC_LOGIN_003

    // public function test_Login_003()
    // {
    //     $user = new User([
    //         'email' => 'user@example.com',
    //         'password' => bcrypt('123456'),
    //     ]);

    //     $user->save();

    //     $response = $this->post('/login', [
    //         'email' => 'user"gmail.com',
    //         'password' => bcrypt('123456'),
    //     ]);

    //     $response->assertResponseStatus(302);
    // }

    // End - TC_LOGIN_003

    // --------------------

    // TC_LOGIN_004 - Form pada bagian email tidak terisi
    // Start - TC_LOGIN_004

    // public function test_Login_004()
    // {
    //     $user = new User([
    //         'email' => 'user@example.com',
    //         'password' => bcrypt('123456'),
    //     ]);

    //     $user->save();

    //     $response = $this->post('/login', [
    //         'email' => '',
    //         'password' => bcrypt('123456'),
    //     ]);

    //     $response->assertResponseStatus(302);
    // }

    // End - TC_LOGIN_004

    // --------------------

    // TC_LOGIN_005 - Form pada bagian password tidak terisi
    // Start - TC_LOGIN_005

    public function test_Login_005()
    {
        $user = new User([
            'email' => 'user@example.com',
            'password' => bcrypt('123456'),
        ]);

        $user->save();

        $response = $this->post('/login', [
            'email' => 'adika123@gmail.com',
            'password' => bcrypt(''),
        ]);

        $response->assertResponseStatus(302);
    }

    // End - TC_LOGIN_005

    // --------------------
}
