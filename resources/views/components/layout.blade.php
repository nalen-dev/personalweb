<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"></script>
    <title>NALENDEV</title>
</head>
<body class="h-full mt-5">
    <div class="min-h-full">
        <x-nav-bar></x-nav-bar>
        <main>
            <div class="py-6">
                {{ $slot }}
            </div>
        </main>
        <x-footer></x-footer>
    </div>
</body>
</html>