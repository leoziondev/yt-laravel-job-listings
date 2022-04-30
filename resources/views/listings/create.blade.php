<x-layouts.app>
    <x-ui.container class="max-w-xl">
        <x-ui.card>
            <header class="text-center">
                <h2 class="text-2xl text-gray-700 font-bold uppercase mb-1">
                    Create a Job
                </h2>
                <p class="mb-4 text-gray-600">Post a job to find a developer</p>
            </header>

            <form action="{{ route('listings.store') }}" method="POST">
                @csrf

                <div class="mb-6">
                    <label
                        for="company"
                        class="inline-block text-sm text-gray-700 font-semibold mb-2"
                    >
                        Company Name
                    </label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="company"
                    />
                </div>

                <div class="mb-6">
                    <label
                        for="title"
                        class="inline-block text-sm text-gray-700 font-semibold mb-2"
                    >
                        Job Title
                    </label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="title"
                        placeholder="Example: Senior Laravel Developer"
                    />
                </div>

                <div class="mb-6">
                    <label
                        for="location"
                        class="inline-block text-sm text-gray-700 font-semibold mb-2"
                    >
                        Job Location
                    </label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="location"
                        placeholder="Example: Remote, Boston MA, etc"
                    />
                </div>

                <div class="mb-6">
                    <label
                        for="email"
                        class="inline-block text-sm text-gray-700 font-semibold mb-2"
                    >
                        Contact Email
                    </label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="email"
                    />
                </div>

                <div class="mb-6">
                    <label
                        for="website"
                        class="inline-block text-sm text-gray-700 font-semibold mb-2"
                    >
                        Website/Application URL
                    </label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="website"
                    />
                </div>

                <div class="mb-6">
                    <label
                        for="tags"
                        class="inline-block text-sm text-gray-700 font-semibold mb-2"
                    >
                        Tags (Comma Separated)
                    </label>
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="tags"
                        placeholder="Example: Laravel, Backend, Postgres, etc"
                    />
                </div>

                {{-- <div class="mb-6">
                    <label
                        for="logo"
                        class="inline-block text-sm text-gray-700 font-semibold mb-2"
                    >
                        Company Logo
                    </label>
                    <input
                        type="file"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="logo"
                    />
                </div> --}}

                <div class="mb-6">
                    <label
                        for="description"
                        class="inline-block text-sm text-gray-700 font-semibold mb-2"
                    >
                        Job Description
                    </label>
                    <textarea
                        class="border border-gray-200 rounded p-2 w-full"
                        name="description"
                        rows="10"
                        placeholder="Include tasks, requirements, salary, etc"
                    ></textarea>
                </div>

                <div class="mb-6">
                    <button
                        class="bg-brand-500 text-white font-semibold rounded py-2 px-4 hover:bg-brand-600"
                    >
                        Create job
                    </button>

                    <a href="/" class="text-black ml-4"> Back </a>
                </div>
            </form>
        </x-ui.card>
    </x-ui.container>
</x-layouts.app>
