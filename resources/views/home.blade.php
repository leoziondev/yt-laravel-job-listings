<x-layouts.app>
    @include('partials._hero')
    @include('partials._search')

    <x-ui.container>
        @if ($listings->count())
            <div class="flex justify-between items-center mt-4 mb-8">
                <h1 class="text-2xl font-bold text-gray-700">Latest jobs posted</h1>
                <a href="{{ route('listings.index') }}" class="text-xs text-gray-500 hover:text-brand-500 font-semibold uppercase">
                    List all jobs
                    <i class="fa-solid fa-arrow-right-long ml-1"></i>
                </a>
            </div>
        @endif
        @if ($listings->count() > 0)
            <div class="grid lg:grid-cols-2 gap-6">

                @foreach ($listings as $listing)
                    <x-listing.card :listing="$listing" />
                @endforeach

            </div>
        @else

            <div class="min-h-[550px] flex flex-col justify-center items-center">
                <img src="{{ asset('images/no_jobs.svg') }}" width="250" alt="">
                <p class="mt-8 text-gray-700 font-semibold">No Jobs posted</p>
            </div>

        @endif
    </x-ui.container>
</x-layouts.app>
