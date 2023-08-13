<?php

namespace Auth;

use App\Domain\User\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    public function testLogout(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/logout');

        $this->assertGuest();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
