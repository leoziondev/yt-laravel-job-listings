<form action="" class="mx-4">
    <x-ui.container class="py-0 px-0">
        <div class="relative border-2 border-white bg-white rounded-md shadow">
            <div class="absolute top-4 left-3">
                <i
                    class="fa fa-search text-gray-400 z-20 hover:text-gray-500"
                ></i>
            </div>
            <input
                type="text"
                name="search"
                class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                placeholder="Search LaraJobs..."
            />
            <div class="absolute top-2 right-2">
                <button
                    type="submit"
                    class="h-10 w-20 text-white rounded-lg bg-brand-500 hover:bg-brand-600"
                >
                    Search
                </button>
            </div>
        </div>
    </x-ui.container>
</form>
