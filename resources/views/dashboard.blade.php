<x-app-layout class="bg-gray-100 dark:bg-slate-800">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-200  leading-tight m">
                {{ __('Dashboard') }}
            </h2>
            <div class="bg-gray-200 overflow-hidden shadow-xl sm:rounded-lg mt-4">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
