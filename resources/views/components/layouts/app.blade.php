<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" href="images/favicon.ico" />
<link rel="stylesheet" href="{{ mix("css/app.css") }}">
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
        <x-ui.container class="flex justify-between items-center h-16">
            <a href="{{ route('home') }}" class="text-2xl text-gray-700 font-bold">
                Lara<span class="text-brand-500">Jobs</span>
            </a>
            <nav>
                <ul class="flex space-x-4 text-sm">
                    @auth
                        <li>
                            <span class="font-bold uppercase text-xs">
                                Welcome {{ auth()->user()->name }}
                            </span>
                        </li>
                        <li>
                            <a href="login.html" class="text-gray-700 hover:text-brand-500 font-semibold"
                                ><i class="fa-solid fa-gear fa-sm"></i>
                                Manage Listings</a
                            >
                        </li>
                        <li>
                            <form action="{{ route('users.logout') }}" method="POST" class="inline">
                                @csrf

                                <button type="submit" class="text-gray-700 hover:text-brand-500 font-semibold">
                                    <i class="fa-solid fa-arrow-right-to-bracket fa-sm"></i>
                                    Logout
                                </button>
                            </form>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('users.register') }}" class="text-gray-700 hover:text-brand-500 font-semibold"
                                ><i class="fa-solid fa-user-plus fa-sm"></i> Register</a
                            >
                        </li>
                        <li>
                            <a href="{{ route('users.login') }}" class="text-gray-700 hover:text-brand-500 font-semibold"
                                ><i class="fa-solid fa-arrow-right-to-bracket  fa-sm"></i>
                                Login</a
                            >
                        </li>
                    @endauth
                </ul>
            </nav>
        </x-ui.container>
    </header>

    <main class="mb-32 mt-2">
        {{ $slot }}
    </main>

    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-gray-900 text-white h-24 mt-24 opacity-90 md:justify-center"
    >
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

        <a
            href="{{ route('listings.create') }}"
            class="absolute top-1/3 right-10 bg-indigo-500 text-white rounded-md py-2 px-5"
            >Post Job</a
        >
    </footer>

    <x-ui.flash-message />

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
