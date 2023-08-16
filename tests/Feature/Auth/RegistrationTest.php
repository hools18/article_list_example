<?php

namespace Tests\Feature\Auth;

use App\Domain\User\Enums\RoleEnum;
use App\Domain\User\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        User::initRoles();

        $this->withoutVite();
    }

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function testAuthorRegister(): void
    {
        $response = $this->post('register', [
            'name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
            'role' => RoleEnum::AUTHOR->value,
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response
            ->assertStatus(200)
            ->assertJson([
                "message" => "Вы успешно зарегистрированы"
            ]);
    }

    public function testReaderRegister(): void
    {
        $response = $this->post('register', [
            'name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
            'role' => RoleEnum::READER->value,
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();

        $response
            ->assertStatus(200)
            ->assertJson([
                "message" => "Вы успешно зарегистрированы"
            ]);
    }
}
