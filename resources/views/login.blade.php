<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/css/app.scss'])
    @endif

</head>
<body>
    <div class="center-block py-[40px]">
        <div class="login-container">
            <h1>
                <div class="text-[22px]">Login form</div>
            </h1>

            <form class="mt-[16px]" action="{{ route('users.login') }}" method="GET">
                @csrf

                <div class="input-holder">
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="El. paštas" required>
                </div>

                <div class="input-holder">
                    <input type="password" id="password" name="password" placeholder="Slaptažodis" required>
                </div>

                <button class="primary-button" type="submit">Prisijungti</button>
            </form>
        </div>
    </div>
</body>
</html>
