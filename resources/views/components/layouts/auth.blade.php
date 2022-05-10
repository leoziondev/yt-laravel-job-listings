<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" href="images/favicon.ico" />
<link rel="stylesheet" href="{{ mix("css/app.css") }}">
<script src="//unpkg.com/alpinejs" defer></script>
<title>Register | Find Laravel Jobs & Projects</title>
</head>
<body class="bg-gray-50">
    <div class="h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        {{ $slot }}
    </div>

    <x-ui.flash-message />

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
