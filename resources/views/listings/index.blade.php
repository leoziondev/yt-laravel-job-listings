<x-layouts.app>
    <div class="w-full flex justify-center items-center bg-indigo-500 h-52">
        @include('partials._search')
    </div>
    <x-ui.container>
        <div class="flex flex-col md:flex-row md:space-x-6">
            <div class="w-full md:w-4/12">
                <x-ui.card>
                    Aside
                </x-ui.card>
            </div>
            <div class="w-full md:w-8/12 mt-6 md:mt-0">
                @if (request(['tag']) || request(['search']))
                    @if (request(['tag']))
                        <div class="mb-6 mt-2">
                            <a href="{{ route('listings.index') }}" class="bg-indigo-500 text-white text-sm font-semibold rounded-md py-2 px-4">
                                {{ request()->has('tag') ? request()->get('tag') : '' }}
                                <i class="fa-solid fa-xmark ml-2"></i>
                            </a>
                        </div>
                    @endif
                    @if (request(['search']))
                        <div class="mb-6 mt-2">
                            <a href="{{ route('listings.index') }}" class="bg-indigo-500 text-white text-sm font-semibold rounded-md py-2 px-4">
                                {{ request()->has('search') ? request()->get('search') : '' }}
                                <i class="fa-solid fa-xmark ml-2"></i>
                            </a>
                        </div>
                    @endif
                @endif
                @if ($listings->count() > 0)
                    <div class="grid gap-6">

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

                <div class="mt-8">
                    {{ $listings->links() }}
                </div>
            </div>
        </div>
    </x-ui.container>
</x-layouts.app>
