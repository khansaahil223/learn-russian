<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Read') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl ">
            <div class="bg-white shadow-xl">
                @livewire('read.form')
            </div>
        </div>
    </div>
</x-app-layout>
