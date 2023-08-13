<?php

namespace App\Domain\Auth;

use App\Domain\Auth\Requests\RegisterRequest;
use App\Domain\User\Enums\RoleEnum;
use App\Domain\User\Models\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request) {
                $user = User::create([
                    'name' => $request->validated('name'),
                    'last_name' => $request->validated('last_name'),
                    'email' => $request->validated('email'),
                    'password' => Hash::make($request->validated('password')),
                ]);

                $user->assignRole(RoleEnum::tryFrom($request->validated('role'))->value);

                Auth::login($user);
            });
        } catch (\Throwable $a) {
            return redirect()->route('register');
        }

        return redirect(RouteServiceProvider::HOME);
    }
}
