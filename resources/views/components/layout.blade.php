<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <title>Pixel Positions</title>
</head>
<body class="bg-pixel-black text-white px-10">
    <nav class="flex items-center justify-between py-4 border-b border-white/10">
        <div>
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
            </a>
        </div>
        <div class="space-x-6 font-medium text-lg">
            <a href="">Jobs</a>
            <a href="">Career</a>
            <a href="">Salaries</a>
            <a href="">Companies</a>
        </div>
        <div>
            <x-section-heading>Post a Job</x-section-heading>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto my-10 space-y-5">
        {{ $slot }}
    </main>
</body>
</html>
