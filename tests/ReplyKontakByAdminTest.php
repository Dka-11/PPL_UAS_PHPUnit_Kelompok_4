<?php

use App\Support;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ReplyKontakByAdminTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testReplyKontakSempurna()
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

        $this->get('/admin/view/support/1');
        $bloodcenter = new Support();
        $bloodcenter->name = 'Dibalas Kevin Natanael';
        $bloodcenter->message = 'Akan segera dikirimkan';

        $bloodcenter->save();
        $response = $this->get('/admin/view/support/1');
        $response->assertResponseStatus(200);
    }

    public function testReplyKontakJudulKosong()
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

        $this->get('/admin/view/support/1');
        $bloodcenter = new Support();
        $bloodcenter->name = '';
        $bloodcenter->message = 'Akan segera dikirimkan';

        $bloodcenter->save();
        $response = $this->get('/admin/view/support/1');
        $response->assertResponseStatus(200);
    }

    public function testReplyKontakMessageKosong()
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

        $this->get('/admin/view/support/1');
        $bloodcenter = new Support();
        $bloodcenter->name = 'Dibalas Kevin Natanael';
        $bloodcenter->message = '';

        $bloodcenter->save();
        $response = $this->get('/admin/view/support/1');
        $response->assertResponseStatus(200);
    }

    public function testReplyKontakSemuaKosong()
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

        $this->get('/admin/view/support/1');
        $bloodcenter = new Support();
        $bloodcenter->name = '';
        $bloodcenter->message = '';

        $bloodcenter->save();
        $response = $this->get('/admin/view/support/1');
        $response->assertResponseStatus(200);
    }
}
