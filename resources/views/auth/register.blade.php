
@extends('layouts.main')

<div class="center-block py-[40px]">
    <div class="login-container">
        <h1>
            <div class="text-[22px]">Registracija</div>
        </h1>

        <form class="mt-[16px]" action="{{ route('users.register') }}" method="POST">
            @csrf

            <div class="input-holder">
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="El. paštas" required>
                @error("email")
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="input-holder">
                <input type="password" id="password" name="password" placeholder="Slaptažodis" required>
                @error("password")
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <div>
                    <button class="primary-button" type="submit">Registruotis</button>
                </div>

                <div>
                    <a href="{{ route('users.login') }}">Turite paskyra? prisijungti</a>
                </div>
            </div>
        </form>
    </div>
</div>
