<x-app-layout>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
    </script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Praktek Kerja Lapangan') }}
        </h2>
    </x-slot>

    <div class="py-12 px-12">



        {{--  --}}
        {{-- <div class="container mx-auto">

                <div class="flex flex-col">
                    <div class="w-full">
                        <div class="p-8 border-b border-gray-200 shadow">
                            <table class="divide-y divide-gray-300 w-full" id="#dataTable" >
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> --}}
        {{--  --}}


        <div
            class="p-5 relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">

            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <table id="dataTable" class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead class="align-bottom">
                            <tr>
                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Nama Lengkap</th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Jurusan</th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Lokasi Pkl</th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Posisi</th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Asal Sekolah</th>
                                {{-- <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Status</th> --}}

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2 py-1">
                                            <div>
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 leading-normal text-sm">{{ $data->name }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-tight text-xs">{{ $data->major }}</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-tight text-xs">{{ $data->location }}</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-tight text-xs">{{ $data->position }}</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-tight text-xs">
                                            {{ Str::upper(trans($data->asal_sekolah)) }}
                                        </p>
                                    </td>


                                    {{-- <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                        @if ($data->status === 'pending')
                                            <span
                                                class="bg-yellow-500 px-3 text-xs rounded py-3 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $data->status }}</span>
                                        @elseif ($data->status === 'approved')
                                            <span
                                                class="bg-green-500 px-3 text-xs rounded py-3 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $data->status }}</span>
                                        @else
                                            <span
                                                class="bg-red-500 px-3 text-xs rounded py-3 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">{{ $data->status }}</span>
                                        @endif
                                    </td> --}}


                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>






    </div>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();

        });
    </script>

</x-app-layout>
