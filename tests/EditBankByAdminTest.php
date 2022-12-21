<?php

use App\User;
use App\BloodCenter;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditBankByAdminTest extends TestCase
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

        $banktest = new BloodCenter([
            'name' => 'PMI Kota Jakarta',
            'phone' => '08231232199',
            'landmark' => 'Jalan Selamat No.1',
            'city' => 'Jakarta',
            'state' => 'Polowijen',
            'district' => 'Blimbing',
        ]);
        $banktest->save();  

        $this->actingAs($user);

        $response = $this->get('/center/edit/1' . $banktest->id);
        $banktest->name = 'PMI Kota Surabaya';
        $banktest->phone = '08231232200';
        $banktest->landmark = 'Jalan Tomo No.1';
        $banktest->city = 'Surabaya';
        $banktest->state = 'Kaliasin';
        $banktest->district = 'Genteng';

        $banktest->save();
        $response->assertResponseStatus(200);

    }

    public function testEditBankNamaKosong()
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

        $banktest = new BloodCenter([
            'name' => 'PMI Kota Jakarta',
            'phone' => '08231232199',
            'landmark' => 'Jalan Selamat No.1',
            'city' => 'Jakarta',
            'state' => 'Polowijen',
            'district' => 'Blimbing',
        ]);
        $banktest->save();  

        $this->actingAs($user);

        $response = $this->get('/center/edit/1' . $banktest->id);
        $banktest->name = '';
        $banktest->phone = '08231232200';
        $banktest->landmark = 'Jalan Tomo No.1';
        $banktest->city = 'Surabaya';
        $banktest->state = 'Kaliasin';
        $banktest->district = 'Genteng';

        $banktest->save();
        $response->assertResponseStatus(200);

    }

    public function testEditBankKontakKosong()
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

        $banktest = new BloodCenter([
            'name' => 'PMI Kota Jakarta',
            'phone' => '08231232199',
            'landmark' => 'Jalan Selamat No.1',
            'city' => 'Jakarta',
            'state' => 'Polowijen',
            'district' => 'Blimbing',
        ]);
        $banktest->save();  

        $this->actingAs($user);

        $response = $this->get('/center/edit/1' . $banktest->id);
        $banktest->name = 'PMI Kota Surabaya';
        $banktest->phone = '';
        $banktest->landmark = 'Jalan Tomo No.1';
        $banktest->city = 'Surabaya';
        $banktest->state = 'Kaliasin';
        $banktest->district = 'Genteng';

        $banktest->save();
        $response->assertResponseStatus(200);

    }

    public function testEditBankAlamatKosong()
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

        $banktest = new BloodCenter([
            'name' => 'PMI Kota Jakarta',
            'phone' => '08231232199',
            'landmark' => 'Jalan Selamat No.1',
            'city' => 'Jakarta',
            'state' => 'Polowijen',
            'district' => 'Blimbing',
        ]);
        $banktest->save();  

        $this->actingAs($user);

        $response = $this->get('/center/edit/1' . $banktest->id);
        $banktest->name = 'PMI Kota Surabaya';
        $banktest->phone = '08231232200';
        $banktest->landmark = 'Jalan Tomo No.1';
        $banktest->city = 'Surabaya';
        $banktest->state = 'Kaliasin';
        $banktest->district = '';

        $banktest->save();
        $response->assertResponseStatus(200);

    }

    public function testEditBankKotaKosong()
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

        $banktest = new BloodCenter([
            'name' => 'PMI Kota Jakarta',
            'phone' => '08231232199',
            'landmark' => 'Jalan Selamat No.1',
            'city' => 'Jakarta',
            'state' => 'Polowijen',
            'district' => 'Blimbing',
        ]);
        $banktest->save();  

        $this->actingAs($user);

        $response = $this->get('/center/edit/1' . $banktest->id);
        $banktest->name = 'PMI Kota Surabaya';
        $banktest->phone = '08231232200';
        $banktest->landmark = 'Jalan Tomo No.1';
        $banktest->city = '';
        $banktest->state = 'Kaliasin';
        $banktest->district = 'Genteng';

        $banktest->save();
        $response->assertResponseStatus(200);

    }

    public function testEditBankKecamatanKosong()
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

        $banktest = new BloodCenter([
            'name' => 'PMI Kota Jakarta',
            'phone' => '08231232199',
            'landmark' => 'Jalan Selamat No.1',
            'city' => 'Jakarta',
            'state' => 'Polowijen',
            'district' => 'Blimbing',
        ]);
        $banktest->save();  

        $this->actingAs($user);

        $response = $this->get('/center/edit/1' . $banktest->id);
        $banktest->name = 'PMI Kota Surabaya';
        $banktest->phone = '08231232200';
        $banktest->landmark = 'Jalan Tomo No.1';
        $banktest->city = 'Surabaya';
        $banktest->state = '';
        $banktest->district = 'Genteng';

        $banktest->save();
        $response->assertResponseStatus(200);

    }

    public function testEditBankKelurahanKosong()
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

        $banktest = new BloodCenter([
            'name' => 'PMI Kota Jakarta',
            'phone' => '08231232199',
            'landmark' => 'Jalan Selamat No.1',
            'city' => 'Jakarta',
            'state' => 'Polowijen',
            'district' => 'Blimbing',
        ]);
        $banktest->save();  

        $this->actingAs($user);

        $response = $this->get('/center/edit/1' . $banktest->id);
        $banktest->name = 'PMI Kota Surabaya';
        $banktest->phone = '08231232200';
        $banktest->landmark = 'Jalan Tomo No.1';
        $banktest->city = 'Surabaya';
        $banktest->state = 'Kaliasin';
        $banktest->district = '';

        $banktest->save();
        $response->assertResponseStatus(200);

    }

    public function testEditBankSemuaKosong()
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

        $banktest = new BloodCenter([
            'name' => 'PMI Kota Jakarta',
            'phone' => '08231232199',
            'landmark' => 'Jalan Selamat No.1',
            'city' => 'Jakarta',
            'state' => 'Polowijen',
            'district' => 'Blimbing',
        ]);
        $banktest->save();  

        $this->actingAs($user);

        $response = $this->get('/center/edit/1' . $banktest->id);
        $banktest->name = 'PMI Kota Surabaya';
        $banktest->phone = '08231232200';
        $banktest->landmark = 'Jalan Tomo No.1';
        $banktest->city = 'Surabaya';
        $banktest->state = 'Kaliasin';
        $banktest->district = '';

        $banktest->save();
        $response->assertResponseStatus(200);

    }
}
