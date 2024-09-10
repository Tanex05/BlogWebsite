<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>DefinitelyNotTwitter</title>
        @vite('resources/css/app.css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    </head>
    <body class="flex min-h-screen bg-gray-200">

        <div class="flex-grow">
            {{ $slot }}
        </div>

        @stack('Scripts')
    </body>
</html>
