<x-layouts.app>
    <x-ui.container class="max-w-xl">
        <x-ui.card>
            <header class="text-center">
                <h2 class="text-2xl text-gray-700 font-bold uppercase mb-1">
                    Edit: {{ $listing->title }}
                </h2>
            </header>

            <form action="{{ route('listings.update', $listing->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

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
                        value="{{ $listing->company }}"
                    />
                    @error('company')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
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
                        value="{{ $listing->title }}"
                    />
                    @error('title')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
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
                        value="{{ $listing->location }}"
                        placeholder="Example: Remote, Boston MA, etc"
                    />
                    @error('location')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
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
                        value="{{ $listing->email }}"
                    />
                    @error('email')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
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
                        value="{{ $listing->website }}"
                    />
                    @error('website')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
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
                        value="{{ $listing->tags }}"
                        placeholder="Example: Laravel, Backend, Postgres, etc"
                    />
                    @error('tags')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
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

                    <img src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}" alt="" class="w-48 mr-6 mb-6" />
                    @error('logo')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

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
                    >{{ $listing->description }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button
                        class="bg-brand-500 text-white font-semibold rounded py-2 px-4 hover:bg-brand-600"
                    >
                        Update job
                    </button>

                    <a href="/" class="text-black ml-4"> Back </a>
                </div>
            </form>
        </x-ui.card>
    </x-ui.container>
</x-layouts.app>
