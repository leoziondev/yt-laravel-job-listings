<x-layouts.app>
    <x-ui.container>
        <x-ui.card class="p-0">
            <header class="p-4">
                <h1 class="text-xl font-bold text-gray-700">My Job Listing</h1>
            </header>

            <table class="w-full table-auto rounded-sm">
                <tbody>
                    @forelse ($listings as $listing)
                        <tr class="border-t border-gray-100">
                            <td class="px-4 py-2">
                                <h2 class="text-md text-gray-500 font-semibold">
                                    {{ $listing->title }}
                                </h2>
                            </td>
                            <td class="flex justify-end px-4 py-2 text-sm">
                                <div class="flex items-center space-x-2">
                                    <a href="{{ route('listings.show', $listing->id) }}" class="bg-gray-50 text-gray-400 transition-all hover:bg-brand-100 hover:text-brand-500 py-1 px-2 rounded-md shadow">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="{{ route('listings.edit', $listing->id) }}" class="bg-gray-50 text-gray-400 transition-all hover:bg-brand-100 hover:text-brand-500 py-1 px-2 rounded-md shadow">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <form action="{{ route('listings.destroy', $listing->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="bg-gray-50 text-gray-400 transition-all hover:bg-red-100 hover:text-red-500 py-1 px-2 rounded-md shadow">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr colspan="2">
                            <p class="py-8 text-gray-700 font-semibold text-sm text-center">No jobs listings!</p>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </x-ui.card>
    </x-ui.container>
</x-layouts.app>
