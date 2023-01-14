<x-app-layout>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Praktek Kerja Lapangan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
        

       {{--  --}}
        <div class="container mx-auto">

                <div class="flex flex-col">
                    <div class="w-full">
                        <div class="p-8 border-b border-gray-200 shadow">
                            <table class="divide-y divide-gray-300 w-full" id="dataTable" >
                                <thead class="bg-blue-500">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-white">
                                            No
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Nama
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Lokasi
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Posisi
                                        </th>
                                        <th class="px-6 py-2 text-xs text-white">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-300">
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            1
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                                Tyo
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-500">ICON+ KP YOGYAKARTA</div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            Canvasing
                                        </td>
                                        <td>
                                            <span class="bg-indigo-100 text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-500 dark:text-white">Approve</span>
                                        </td>
                                    </tr>
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            2
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                                Faisol
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-500">ICON+ KP YOGYAKARTA</div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            Ritel
                                        </td>
                                        <td>
                                            <span class="bg-indigo-100 text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-500 dark:text-white">Approve</span>
                                        </td>
                                    </tr>
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            3
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                                Erick
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-500">ICON+ KP YOGYAKARTA</div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            Aktivasi
                                        </td>
                                        <td>
                                            <span class="bg-indigo-100 text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-500 dark:text-white">Failed</span>
                                        </td>
                                    </tr>
                                    <tr class="text-center whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            4
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                                Faisal
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-500">ICON+ KP YOGYAKARTA</div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500">
                                            Gudang
                                        </td>
                                        <td>
                                            <span class="bg-indigo-100 text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-500 dark:text-white">Approve</span>
                                        </td>
                                    </tr>
                                    <tr  class="text-center font-bold bg-blue-500 text-white">
                                        <td colspan="4">Jumlah</td>
                                        <td>4</td>
                                    </tr>
    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {{--  --}}
        </div>

   
</x-app-layout>
