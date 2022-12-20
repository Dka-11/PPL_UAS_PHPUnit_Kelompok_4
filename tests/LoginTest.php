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
    public function test_case_001_Login()
    {
        $user = factory(User::class)->create([
            'email' => 'user@example.com',
            'password' => bcrypt($password = '123456')
        ]);
        $user->save();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);

        $response->assertResponseStatus(302);
        $this->actingAs($user);
    }

    public function test_case_002_Login()
    {
        $user = factory(User::class)->create([
            'email' => 'user@example.com',
            'password' => bcrypt($password = '123456')
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);

        $response->assertResponseStatus(302);
        $this->actingAs($user);
    }

    // public function test_case_003_Login()
    // {
    //     $user = factory(User::class)->create([
    //         'email' => 'user@example.com',
    //         'password' => bcrypt($password = '123456')
    //     ]);

    //     $response = $this->post('/login', [
    //         'email' => $user->email,
    //         'password' => 'wwrong_password',
    //     ]);

    //     $response->assertRedirectedTo('/home');
    //     $response->assertResponseStatus(302);
    //     $this->actingAs($user);
    // }
}
