<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl  mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("BENTORNATO ") }} {{ Str::upper(Auth::user()->name )}}
                </div>
                
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a class="font-bold text-white rounded my-5 p-2 bg-gray-500" href="{{ route('admin.biograpies.index') }}">Biografia</a>
                    <a class="font-bold text-white rounded my-5 p-2 bg-gray-500" href="{{ route('admin.projects.index') }}">Progetti</a>
                    <a class="font-bold text-white rounded my-5 p-2 bg-gray-500" href="{{ route('admin.draws.index') }}">Disegni</a>
                    <a class="font-bold text-white rounded my-5 p-2 bg-gray-500" href="{{ route('admin.files.index') }}">Files</a>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
