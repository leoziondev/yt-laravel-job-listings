@if(session()->has('message'))
    <div
        x-data="{show: true}"
        x-init="setTimeout(() => show = false, 3000)"
        x-show="show"
        x-transition:enter="transform-gpu ease-out duration-800"
        x-transition:enter-start="-translate-x-32 opacity-0"
        x-transition:leave="transform-gpu ease-out duration-100"
        x-transition:leave-end="translate-x-32 opacity-0"
        class="fixed top-5 right-5 bg-brand-500 text-white rounded-md py-3 px-8 shadow-md">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
