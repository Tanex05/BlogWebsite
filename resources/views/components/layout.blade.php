<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>DefinitelyNotTwitter</title>
    @vite('resources/css/app.css')


</head>
<body class="flex flex-col min-h-screen">
    <x-header/>

    <div class="flex-grow container mx-auto p-4 text-center">
        {{ $slot }}
    </div>

    <x-footer />

</body>
</html>