<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css' , 'resources/js/app.js'])
    <title>Pixel-Positions</title>
</head>
<body class="bg-black text-white">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/20 font-bold">
            <div class="logo">
                <a href="/">
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="Main logo">
                </a>
            </div>
            <div class="links space-x-3">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            @auth
                <div class="space-x-3 flex">
                    <a href="/jobs/create">
                        Post a Job
                    </a>
                    <form action="/logout" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Log Out</button>

                    </form>

                </div>
            @endauth
            @guest
                <div>
                    <div class="links space-x-3">
                        <a href="/register">Sign Up</a>
                        <a href="/login">Log In</a>
                    </div>
                </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-[968px] mx-auto pb-10">
            {{$slot}}
        </main>
    </div>
</body>
</html>
