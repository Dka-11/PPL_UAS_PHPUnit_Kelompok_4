<?php

use App\User;
use App\Camp;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditJadwalByAdminTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testEditBankSempurna()
    {
        $user = new User([
            'email' => 'user123@example.com',
            'password' => bcrypt('password'),
        ]);
        $user->save();

        $response = $this->post('/login', [
            'email' => 'user123@example.com',
            'password' => bcrypt('password'),
        ]);

        $response->assertResponseStatus(302);

        $camptest = new Camp([
            'details' => 'PMI Kota Jakarta',
            'city' => 'Jakarta',
            'district' => 'Blimbing',
            'state' => 'Polowijen',
            'start' => '2022-12-25 14:00',
            'end' => '2022-12-25 16:00'
        ]);
        $camptest->save();  

        $this->actingAs($user);

        $response = $this->get('/camp/edit/1' . $camptest->id);
        $camptest->details = 'PMI Kota Malang';
        $camptest->state = 'Lowokwaru';
        $camptest->district = 'Lowokwaru';
        $camptest->city = 'Malang';
        $camptest->start = '2022-12-27 13:00';
        $camptest->end = '2022-12-27 15:00';

        $camptest->save();
        $response->assertResponseStatus(200);

    }
}