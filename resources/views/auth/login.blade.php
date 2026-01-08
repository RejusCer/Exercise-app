
@extends('layouts.main')

<div class="center-block py-[40px]">
    <div class="login-container">
        <h1>
            <div class="text-[22px]">Login form</div>
        </h1>

        <form class="mt-[16px]" action="{{ route('users.login') }}" method="GET">
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
                    <button class="primary-button" type="submit">Prisijungti</button>
                </div>

                <div>
                    <a href="{{ route('users.register') }}">Neturite paskyros? Susikurkite</a>
                </div>
            </div>
        </form>
    </div>
</div>


