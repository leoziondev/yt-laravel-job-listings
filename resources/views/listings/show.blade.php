<x-layouts.app>
    <x-ui.container>
        <div class="flex space-x-6">
            <div class="w-4/12">
                <x-ui.card>
                    Aside
                </x-ui.card>
            </div>
            <div class="w-8/12">
                <x-ui.card>
                    <h1>{{ $listing->id }} - {{ $listing->title }}</h1>
                </x-ui.card>
            </div>
        </div>
    </x-ui.container>
</x-layouts.app>
