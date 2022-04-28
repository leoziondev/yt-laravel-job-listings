<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" href="images/favicon.ico" />
<link rel="stylesheet" href="{{ asset("css/app.css") }}">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
/>
<script src="//unpkg.com/alpinejs" defer></script>
<title>LaraJobs | Find Laravel Jobs & Projects</title>
</head>
<body class="bg-gray-50">
    <header class="bg-white">
        <div class="max-w-7xl mx-auto flex justify-between items-center h-16 px-2">
            <a href="index.html" class="text-2xl text-gray-700 font-bold">
                Lara<span class="text-brand-500">Jobs</span>
            </a>
            <nav>
                <ul class="flex space-x-6 text-md">
                    <li>
                        <a href="register.html" class="hover:text-brand-500"
                            ><i class="fa-solid fa-user-plus"></i> Register</a
                        >
                    </li>
                    <li>
                        <a href="login.html" class="hover:text-brand-500"
                            ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                            Login</a
                        >
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
