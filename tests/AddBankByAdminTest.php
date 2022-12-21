<?php

use App\User;
use App\BloodCenter;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AddBankByAdminTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAddBankSempurna()
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

        $this->actingAs($user);

        $this->get('/center/new');
        $bloodcenter = new BloodCenter();
        $bloodcenter->name = 'PMI Kota Jakarta';
        $bloodcenter->phone = '08231232199';
        $bloodcenter->landmark = 'Jalan Selamat No.1';
        $bloodcenter->city = 'Jakarta';
        $bloodcenter->state = 'Polowijen';
        $bloodcenter->district = 'Blimbing';

        $bloodcenter->save();
        $response = $this->get('/center/new');
        $response->assertResponseStatus(200);
    }

    public function testAddBankNamaKosong()
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

        $this->actingAs($user);

        $this->get('/center/new');
        $bloodcenter = new BloodCenter();
        $bloodcenter->name = '';
        $bloodcenter->phone = '08231232199';
        $bloodcenter->landmark = 'Jalan Selamat No.1';
        $bloodcenter->city = 'Jakarta';
        $bloodcenter->state = 'Polowijen';
        $bloodcenter->district = 'Blimbing';

        $bloodcenter->save();
        $response = $this->get('/center/new');
        $response->assertResponseStatus(200);
    }

    public function testAddBankPhoneKosong()
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

        $this->actingAs($user);

        $this->get('/center/new');
        $bloodcenter = new BloodCenter();
        $bloodcenter->name = 'PMI Kota Jakarta';
        $bloodcenter->phone = '';
        $bloodcenter->landmark = 'Jalan Selamat No.1';
        $bloodcenter->city = 'Jakarta';
        $bloodcenter->state = 'Polowijen';
        $bloodcenter->district = 'Blimbing';

        $bloodcenter->save();
        $response = $this->get('/center/new');
        $response->assertResponseStatus(200);
    }

    public function testAddBankAlamatKosong()
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

        $this->actingAs($user);

        $this->get('/center/new');
        $bloodcenter = new BloodCenter();
        $bloodcenter->name = 'PMI Kota Jakarta';
        $bloodcenter->phone = '08231232199';
        $bloodcenter->landmark = '';
        $bloodcenter->city = 'Jakarta';
        $bloodcenter->state = 'Polowijen';
        $bloodcenter->district = 'Blimbing';

        $bloodcenter->save();
        $response = $this->get('/center/new');
        $response->assertResponseStatus(200);
    }

    public function testAddBankKotaKosong()
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

        $this->actingAs($user);

        $this->get('/center/new');
        $bloodcenter = new BloodCenter();
        $bloodcenter->name = 'PMI Kota Jakarta';
        $bloodcenter->phone = '08231232199';
        $bloodcenter->landmark = 'Jalan Selamat No.1';
        $bloodcenter->city = '';
        $bloodcenter->state = 'Polowijen';
        $bloodcenter->district = 'Blimbing';

        $bloodcenter->save();
        $response = $this->get('/center/new');
        $response->assertResponseStatus(200);
    }

    public function testAddBankKecamatanKosong()
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

        $this->actingAs($user);

        $this->get('/center/new');
        $bloodcenter = new BloodCenter();
        $bloodcenter->name = 'PMI Kota Jakarta';
        $bloodcenter->phone = '08231232199';
        $bloodcenter->landmark = 'Jalan Selamat No.1';
        $bloodcenter->city = 'Jakarta';
        $bloodcenter->state = '';
        $bloodcenter->district = 'Blimbing';

        $bloodcenter->save();
        $response = $this->get('/center/new');
        $response->assertResponseStatus(200);
    }

    public function testAddBankKelurahanKosong()
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

        $this->actingAs($user);

        $this->get('/center/new');
        $bloodcenter = new BloodCenter();
        $bloodcenter->name = 'PMI Kota Jakarta';
        $bloodcenter->phone = '08231232199';
        $bloodcenter->landmark = 'Jalan Selamat No.1';
        $bloodcenter->city = 'Jakarta';
        $bloodcenter->state = 'Polowijen';
        $bloodcenter->district = '';

        $bloodcenter->save();
        $response = $this->get('/center/new');
        $response->assertResponseStatus(200);
    }

    public function testAddBankSemuaKosong()
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

        $this->actingAs($user);

        $this->get('/center/new');
        $bloodcenter = new BloodCenter();
        $bloodcenter->name = '';
        $bloodcenter->phone = '';
        $bloodcenter->landmark = '';
        $bloodcenter->city = '';
        $bloodcenter->state = '';
        $bloodcenter->district = '';

        $bloodcenter->save();
        $response = $this->get('/center/new');
        $response->assertResponseStatus(200);
    }
}
