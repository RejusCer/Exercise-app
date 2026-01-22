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
<body class="main-layout">
    <header class="flex justify-between items-center p-4 pb-10">
        <div>
            <h1>Dashboard</h1>
        </div>
        <div class="flex flex-row align-center items-center gap-4 ">
            <div>
                Sveikas, {{ Auth::user()->name }}
            </div>
            @if (session('success'))
                <p>{{ session('success') }}</p>
            @endif

            <form action="{{ route('users.logout') }}" method="POST">
                @csrf
                <button type="submit" class="link-button">Atsijungti</button>
            </form>
        </div>
    </header>

    <div>
        @yield('content')
    </div>
</body>
</html>
