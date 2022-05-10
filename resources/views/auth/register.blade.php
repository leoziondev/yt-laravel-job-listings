<x-layouts.auth>
    <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">SignUp account</h2>
        </div>
        <form class="mt-8 space-y-6" action="{{ route('users.store') }}" method="POST">
            @csrf

            @if ($errors->all())
                <ul class="bg-red-100 rounded-md p-4">
                    @foreach ($errors->all() as $message)
                        <li class="text-red-500 text-xs italic">{{ $message }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="rounded-md shadow-sm -space-y-px">
                <div>
                    <label for="name" class="sr-only">Name</label>
                    <input id="name" name="name" type="text" value="{{ old('name') }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Your name">
                </div>
                <div>
                    <label for="email" class="sr-only">Email address</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email address">
                </div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
                </div>
                <div>
                    <label for="password_confirmation" class="sr-only">Password Confitmation</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password confirmation">
                </div>
            </div>

            <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Sign up
            </button>
        </form>

        <div class="flex items-center justify-center">
            <div class="text-sm">
              <a href="{{ route('users.login') }}" class="font-medium text-indigo-600 hover:text-indigo-500"> Already have account? </a>
            </div>
        <div>
    </div>
</x-layouts.auth>
