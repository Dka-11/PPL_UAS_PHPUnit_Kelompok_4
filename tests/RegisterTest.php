<?php
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegistrasi()
    {
        $response = $this->post('/register', [
            'name' => 'Hanif',
            'age' => '21',
            'weight' => '62',
            'phone' => '0813557082',
            'address' => 'Jalan Abdul Jalil',
            'city' => 'Batu',
            'district' => 'Batu',
            'state' => 'Sisir',
            'email' => 'hanif196@gmail.com',

            'password' => '654321',
            'password_confirmation' => '654321',
            'last_donated' => '2022-06-11 13:00'
        ]);

        $response -> assertResponseStatus(200);

}}