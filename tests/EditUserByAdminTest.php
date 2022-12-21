<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use TestCase;

class EditUserByAdminTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testEditUserSempurna()
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

        $usertest = new User([
            'name' => 'Kevin Natanael',
            'email' => 'k.rerere@gmail.com',
            'password' => '123456',
            'social' => '',
            'whatsapp' => '1',
            'age' => '20',
            'weight' => '52',
            'address' => 'Jalan Simpang Sulfat Selatan',
            'state' => 'Pandanwangi',
            'city' => 'Malang',
            'district' => 'Blimbing',
            'phone' => '0852676324',
            'is_donor' => '0',
            'is_admin' => '1',
            'last_donated' => '2022-11-29T06:10',
        ]);
        $usertest->save();

        $this->actingAs($usertest);

        $response = $this->get('/admin/user/edit/' . $usertest->id);
        $usertest->name = 'Kevin Natanael Wijaya';
        $usertest->email = 'k.natanael99@gmail.com';
        $usertest->password = '123456';
        $usertest->social = '';
        $usertest->whatsapp = '1';
        $usertest->age = '20';
        $usertest->weight = '52';
        $usertest->address = 'Jalan Simpang Sulfat Selatan';
        $usertest->state = 'Pandanwangi';
        $usertest->city = 'Malang';
        $usertest->district = 'Blimbing';
        $usertest->phone = '0852676324';
        $usertest->is_donor = '0';
        $usertest->is_admin = '1';
        $usertest->last_donated = '2022-11-29T06:10';


        $usertest->save();

        $response->assertResponseStatus(200);
    }

    public function testEditUserFieldNamaKosong()
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

        $usertest = new User([
            'name' => 'Kevin Natanael',
            'email' => 'k.rerere@gmail.com',
            'password' => '123456',
            'social' => '',
            'whatsapp' => '1',
            'age' => '20',
            'weight' => '52',
            'address' => 'Jalan Simpang Sulfat Selatan',
            'state' => 'Pandanwangi',
            'city' => 'Malang',
            'district' => 'Blimbing',
            'phone' => '0852676324',
            'is_donor' => '0',
            'is_admin' => '1',
            'last_donated' => '2022-11-29T06:10',
        ]);
        $usertest->save();

        $this->actingAs($usertest);

        $response = $this->get('/admin/user/edit/' . $usertest->id);
        $usertest->name = '';
        $usertest->email = 'k.natanael99@gmail.com';
        $usertest->password = '123456';
        $usertest->social = '';
        $usertest->whatsapp = '1';
        $usertest->age = '20';
        $usertest->weight = '52';
        $usertest->address = 'Jalan Simpang Sulfat Selatan';
        $usertest->state = 'Pandanwangi';
        $usertest->city = 'Malang';
        $usertest->district = 'Blimbing';
        $usertest->phone = '0852676324';
        $usertest->is_donor = '0';
        $usertest->is_admin = '1';
        $usertest->last_donated = '2022-11-29T06:10';


        $usertest->save();

        $response->assertResponseStatus(200);
    }

    public function testEditUserFieldUmurKosong()
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

        $usertest = new User([
            'name' => 'Kevin Natanael',
            'email' => 'k.rerere@gmail.com',
            'password' => '123456',
            'social' => '',
            'whatsapp' => '1',
            'age' => '20',
            'weight' => '52',
            'address' => 'Jalan Simpang Sulfat Selatan',
            'state' => 'Pandanwangi',
            'city' => 'Malang',
            'district' => 'Blimbing',
            'phone' => '0852676324',
            'is_donor' => '0',
            'is_admin' => '1',
            'last_donated' => '2022-11-29T06:10',
        ]);
        $usertest->save();

        $this->actingAs($usertest);

        $response = $this->get('/admin/user/edit/' . $usertest->id);
        $usertest->name = 'Kevin Natanael Wijaya';
        $usertest->email = 'k.natanael99@gmail.com';
        $usertest->password = '123456';
        $usertest->social = '';
        $usertest->whatsapp = '1';
        $usertest->age = '';
        $usertest->weight = '52';
        $usertest->address = 'Jalan Simpang Sulfat Selatan';
        $usertest->state = 'Pandanwangi';
        $usertest->city = 'Malang';
        $usertest->district = 'Blimbing';
        $usertest->phone = '0852676324';
        $usertest->is_donor = '0';
        $usertest->is_admin = '1';
        $usertest->last_donated = '2022-11-29T06:10';


        $usertest->save();

        $response->assertResponseStatus(200);
    }

    public function testEditUserBeratKosong()
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

        $usertest = new User([
            'name' => 'Kevin Natanael',
            'email' => 'k.rerere@gmail.com',
            'password' => '123456',
            'social' => '',
            'whatsapp' => '1',
            'age' => '20',
            'weight' => '52',
            'address' => 'Jalan Simpang Sulfat Selatan',
            'state' => 'Pandanwangi',
            'city' => 'Malang',
            'district' => 'Blimbing',
            'phone' => '0852676324',
            'is_donor' => '0',
            'is_admin' => '1',
            'last_donated' => '2022-11-29T06:10',
        ]);
        $usertest->save();

        $this->actingAs($usertest);

        $response = $this->get('/admin/user/edit/' . $usertest->id);
        $usertest->name = 'Kevin Natanael Wijaya';
        $usertest->email = 'k.natanael99@gmail.com';
        $usertest->password = '123456';
        $usertest->social = '';
        $usertest->whatsapp = '1';
        $usertest->age = '20';
        $usertest->weight = '';
        $usertest->address = 'Jalan Simpang Sulfat Selatan';
        $usertest->state = 'Pandanwangi';
        $usertest->city = 'Malang';
        $usertest->district = 'Blimbing';
        $usertest->phone = '0852676324';
        $usertest->is_donor = '0';
        $usertest->is_admin = '1';
        $usertest->last_donated = '2022-11-29T06:10';


        $usertest->save();

        $response->assertResponseStatus(200);
    }

    public function testEditUserAlamatKosong()
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

        $usertest = new User([
            'name' => 'Kevin Natanael',
            'email' => 'k.rerere@gmail.com',
            'password' => '123456',
            'social' => '',
            'whatsapp' => '1',
            'age' => '20',
            'weight' => '52',
            'address' => 'Jalan Simpang Sulfat Selatan',
            'state' => 'Pandanwangi',
            'city' => 'Malang',
            'district' => 'Blimbing',
            'phone' => '0852676324',
            'is_donor' => '0',
            'is_admin' => '1',
            'last_donated' => '2022-11-29T06:10',
        ]);
        $usertest->save();

        $this->actingAs($usertest);

        $response = $this->get('/admin/user/edit/' . $usertest->id);
        $usertest->name = 'Kevin Natanael Wijaya';
        $usertest->email = 'k.natanael99@gmail.com';
        $usertest->password = '123456';
        $usertest->social = '';
        $usertest->whatsapp = '1';
        $usertest->age = '20';
        $usertest->weight = '52';
        $usertest->address = '';
        $usertest->state = 'Pandanwangi';
        $usertest->city = 'Malang';
        $usertest->district = 'Blimbing';
        $usertest->phone = '0852676324';
        $usertest->is_donor = '0';
        $usertest->is_admin = '1';
        $usertest->last_donated = '2022-11-29T06:10';


        $usertest->save();

        $response->assertResponseStatus(200);
    }

    public function testEditUserKelurahanKosong()
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

        $usertest = new User([
            'name' => 'Kevin Natanael',
            'email' => 'k.rerere@gmail.com',
            'password' => '123456',
            'social' => '',
            'whatsapp' => '1',
            'age' => '20',
            'weight' => '52',
            'address' => 'Jalan Simpang Sulfat Selatan',
            'state' => 'Pandanwangi',
            'city' => 'Malang',
            'district' => 'Blimbing',
            'phone' => '0852676324',
            'is_donor' => '0',
            'is_admin' => '1',
            'last_donated' => '2022-11-29T06:10',
        ]);
        $usertest->save();

        $this->actingAs($usertest);

        $response = $this->get('/admin/user/edit/' . $usertest->id);
        $usertest->name = 'Kevin Natanael Wijaya';
        $usertest->email = 'k.natanael99@gmail.com';
        $usertest->password = '123456';
        $usertest->social = '';
        $usertest->whatsapp = '1';
        $usertest->age = '20';
        $usertest->weight = '52';
        $usertest->address = 'Jalan Simpang Sulfat Selatan';
        $usertest->state = '';
        $usertest->city = 'Malang';
        $usertest->district = 'Blimbing';
        $usertest->phone = '0852676324';
        $usertest->is_donor = '0';
        $usertest->is_admin = '1';
        $usertest->last_donated = '2022-11-29T06:10';


        $usertest->save();

        $response->assertResponseStatus(200);
    }

    public function testEditUserKecamatanKosong()
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

        $usertest = new User([
            'name' => 'Kevin Natanael',
            'email' => 'k.rerere@gmail.com',
            'password' => '123456',
            'social' => '',
            'whatsapp' => '1',
            'age' => '20',
            'weight' => '52',
            'address' => 'Jalan Simpang Sulfat Selatan',
            'state' => 'Pandanwangi',
            'city' => 'Malang',
            'district' => 'Blimbing',
            'phone' => '0852676324',
            'is_donor' => '0',
            'is_admin' => '1',
            'last_donated' => '2022-11-29T06:10',
        ]);
        $usertest->save();

        $this->actingAs($usertest);

        $response = $this->get('/admin/user/edit/' . $usertest->id);
        $usertest->name = 'Kevin Natanael Wijaya';
        $usertest->email = 'k.natanael99@gmail.com';
        $usertest->password = '123456';
        $usertest->social = '';
        $usertest->whatsapp = '1';
        $usertest->age = '20';
        $usertest->weight = '52';
        $usertest->address = 'Jalan Simpang Sulfat Selatan';
        $usertest->state = 'Pandanwangi';
        $usertest->city = 'Malang';
        $usertest->district = '';
        $usertest->phone = '0852676324';
        $usertest->is_donor = '0';
        $usertest->is_admin = '1';
        $usertest->last_donated = '2022-11-29T06:10';


        $usertest->save();

        $response->assertResponseStatus(200);
    }

    public function testEditUserKotaKosong()
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

        $usertest = new User([
            'name' => 'Kevin Natanael',
            'email' => 'k.rerere@gmail.com',
            'password' => '123456',
            'social' => '',
            'whatsapp' => '1',
            'age' => '20',
            'weight' => '52',
            'address' => 'Jalan Simpang Sulfat Selatan',
            'state' => 'Pandanwangi',
            'city' => 'Malang',
            'district' => 'Blimbing',
            'phone' => '0852676324',
            'is_donor' => '0',
            'is_admin' => '1',
            'last_donated' => '2022-11-29T06:10',
        ]);
        $usertest->save();

        $this->actingAs($usertest);

        $response = $this->get('/admin/user/edit/' . $usertest->id);
        $usertest->name = 'Kevin Natanael Wijaya';
        $usertest->email = 'k.natanael99@gmail.com';
        $usertest->password = '123456';
        $usertest->social = '';
        $usertest->whatsapp = '1';
        $usertest->age = '20';
        $usertest->weight = '52';
        $usertest->address = 'Jalan Simpang Sulfat Selatan';
        $usertest->state = 'Pandanwangi';
        $usertest->city = '';
        $usertest->district = 'Blimbing';
        $usertest->phone = '0852676324';
        $usertest->is_donor = '0';
        $usertest->is_admin = '1';
        $usertest->last_donated = '2022-11-29T06:10';


        $usertest->save();

        $response->assertResponseStatus(200);
    }

    public function testEditUserNomorTeleponKosong()
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

        $usertest = new User([
            'name' => 'Kevin Natanael',
            'email' => 'k.rerere@gmail.com',
            'password' => '123456',
            'social' => '',
            'whatsapp' => '1',
            'age' => '20',
            'weight' => '52',
            'address' => 'Jalan Simpang Sulfat Selatan',
            'state' => 'Pandanwangi',
            'city' => 'Malang',
            'district' => 'Blimbing',
            'phone' => '0852676324',
            'is_donor' => '0',
            'is_admin' => '1',
            'last_donated' => '2022-11-29T06:10',
        ]);
        $usertest->save();

        $this->actingAs($usertest);

        $response = $this->get('/admin/user/edit/' . $usertest->id);
        $usertest->name = 'Kevin Natanael Wijaya';
        $usertest->email = 'k.natanael99@gmail.com';
        $usertest->password = '123456';
        $usertest->social = '';
        $usertest->whatsapp = '1';
        $usertest->age = '20';
        $usertest->weight = '52';
        $usertest->address = 'Jalan Simpang Sulfat Selatan';
        $usertest->state = 'Pandanwangi';
        $usertest->city = 'Malang';
        $usertest->district = 'Blimbing';
        $usertest->phone = '';
        $usertest->is_donor = '0';
        $usertest->is_admin = '1';
        $usertest->last_donated = '2022-11-29T06:10';


        $usertest->save();

        $response->assertResponseStatus(200);
    }

    public function testEditUserNomorSemuaKosong()
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

        $usertest = new User([
            'name' => 'Kevin Natanael',
            'email' => 'k.rerere@gmail.com',
            'password' => '123456',
            'social' => '',
            'whatsapp' => '1',
            'age' => '20',
            'weight' => '52',
            'address' => 'Jalan Simpang Sulfat Selatan',
            'state' => 'Pandanwangi',
            'city' => 'Malang',
            'district' => 'Blimbing',
            'phone' => '0852676324',
            'is_donor' => '0',
            'is_admin' => '1',
            'last_donated' => '2022-11-29T06:10',
        ]);
        $usertest->save();

        $this->actingAs($usertest);

        $response = $this->get('/admin/user/edit/' . $usertest->id);
        $usertest->name = 'Kevin Natanael Wijaya';
        $usertest->email = 'k.natanael99@gmail.com';
        $usertest->password = '123456';
        $usertest->social = '';
        $usertest->whatsapp = '1';
        $usertest->age = '20';
        $usertest->weight = '52';
        $usertest->address = 'Jalan Simpang Sulfat Selatan';
        $usertest->state = 'Pandanwangi';
        $usertest->city = 'Malang';
        $usertest->district = 'Blimbing';
        $usertest->phone = '';
        $usertest->is_donor = '0';
        $usertest->is_admin = '1';
        $usertest->last_donated = '2022-11-29T06:10';


        $usertest->save();

        $response->assertResponseStatus(200);
    }
}
