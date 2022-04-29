@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-4 px-2">
        @if ($listings->count())
            <div class="flex justify-between items-center mt-4 mb-8">
                <h1 class="text-2xl font-bold text-gray-700">Latest jobs posted</h1>
                <a href="#" class="text-xs text-gray-500 hover:text-brand-500 font-semibold uppercase">
                    List all jobs
                    <i class="fa-solid fa-arrow-right-long ml-1"></i>
                </a>
            </div>
        @endif
        @if ($listings->count() > 0)
            <div class="grid lg:grid-cols-2 gap-4">

                @foreach ($listings as $listing)
                    <div class="bg-white rounded-md border-l-[6px] border-indigo-500 shadow-lg p-6">
                        <div class="flex">
                            <img
                                class="hidden w-48 mr-6 md:block"
                                src="images/wayne.png"
                                alt=""
                            />
                            <div>
                                <h2 class="text-xl text-gray-800 font-bold">
                                    <a href="show.html">{{ $listing->title }}</a>
                                </h2>
                                <div class="text-md text-gray-600 font-bold mb-4">
                                    {{ $listing->company }}
                                </div>
                                <ul class="flex">
                                    <li
                                        class="flex items-center justify-center bg-gray-800 text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                    >
                                        <a href="#">Laravel</a>
                                    </li>
                                    <li
                                        class="flex items-center justify-center bg-gray-800 text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                    >
                                        <a href="#">API</a>
                                    </li>
                                    <li
                                        class="flex items-center justify-center bg-gray-800 text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                    >
                                        <a href="#">Backend</a>
                                    </li>
                                    <li
                                        class="flex items-center justify-center bg-gray-800 text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                    >
                                        <a href="#">Vue</a>
                                    </li>
                                </ul>
                                <div class="text-base text-gray-600 mt-4">
                                    <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        @else

            <div class="min-h-[550px] flex flex-col justify-center items-center">
                <img src="{{ asset('images/no_jobs.svg') }}" width="250" alt="">
                <p class="mt-8 text-gray-700 font-semibold">No Jobs posted</p>
            </div>

        @endif
    </div>
@endsection
