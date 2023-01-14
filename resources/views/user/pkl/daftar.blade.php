<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Praktek Kerja Lapangan') }}
        </h2>
    </x-slot>

    <div class="flex flex-row">
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Formulir Pendaftaran") }}
                </div>
            </div>
        </div>
    </div>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-5">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Status Pendaftaran") }}
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
