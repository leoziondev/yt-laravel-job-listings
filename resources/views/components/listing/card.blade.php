@props(['listing'])

<x-ui.card class="border-l-[6px] border-indigo-500 md:border-none shadow-lg">
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block object-contain"
            src="{{ asset('images/no-image.png') }}"
            alt="{{ $listing->company }}"
        />
        <div>
            <h2 class="text-xl text-gray-800 font-bold line-clamp-2">
                <a href="{{ route('listings.show', $listing->id) }}">{{ $listing->title }}</a>
            </h2>
            <div class="text-md text-gray-600 font-bold mb-4">
                {{ $listing->company }}
            </div>
            <x-listing.tags :tagsCsv="$listing->tags" />
            <div class="text-base text-gray-600 mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-ui.card>
