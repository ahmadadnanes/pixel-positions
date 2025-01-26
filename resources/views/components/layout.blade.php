@php
    use Illuminate\Support\Facades\Vite;
@endphp
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
        <title>Pixel Positions</title>
        @vite(['resources/js/app.js' , 'resources/css/app.css'])
    </head>
    <body class="antialiased bg-black text-white font-hanken-grotesk"">
    <div class="px-10">
        <nav class="flex justify-between py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Career</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            @auth
                    <div>
                        <a href="/jobs/create">Post a Job</a>
                    </div>
            @endauth
            @guest
                    <div class="space-x-6 font-bold">
                        <a href="/login">Login</a>
                        <a href="/register">Register</a>
                    </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{$slot}}
        </main>
    </div>
    </body>
</html>
