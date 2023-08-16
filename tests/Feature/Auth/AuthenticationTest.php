<?php

namespace Tests\Feature\Auth;

use App\Domain\User\Enums\RoleEnum;
use App\Domain\User\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        User::initRoles();

        $this->withoutVite();
    }

    public function testAuthenticatePage(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testAuthorAuthenticate(): void
    {
        $user = User::factory()->create();
        $user->assignRole(RoleEnum::AUTHOR->value);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();

        $response
            ->assertStatus(200)
            ->assertJson([
                'message' => 'Вы успешно вошли'
            ]);
    }

    public function testReaderAuthenticate(): void
    {
        $user = User::factory()->create();
        $user->assignRole(RoleEnum::READER->value);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();

        $response
            ->assertStatus(200)
            ->assertJson([
                'message' => 'Вы успешно вошли'
            ]);
    }

    public function testFailAuthenticate(): void
    {
        $user = User::factory()->create();

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
