<x-app-layout>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
    </script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Praktek Kerja Lapangan') }}
        </h2>
    </x-slot>

    <div class="flex flex-row">
        <div class="py-6 flex-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-5">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                    <div class="p-6 text-gray-900">
                        {{ __('Formulir Pendaftaran') }}
                    </div>

                    <form action="{{ route('intern') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="bg-white px-4 py-5 sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="nama" class="block text-sm font-medium text-gray-700">
                                            Nama Lengkap</label>
                                        <input name="name" type="text" id="nama" autocomplete="nama"
                                            class="mt-1 block uppercase w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="jk" class="block text-sm font-medium text-gray-700">Jenis
                                            Kelamin</label>
                                        <select id="jk" name="jenis_kelamin" autocomplete="jk"
                                            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                            <option value="Laki Laki">laki laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-span-6">
                                        <label for="jurusan"
                                            class="block text-sm font-medium text-gray-700">Jurusan</label>
                                        <input type="text" name="major" id="major" autocomplete="jurusan"
                                            class="mt-1 block uppercase w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6">
                                        <label for="sekolah" class="block text-sm font-medium text-gray-700">Asal
                                            Sekolah</label>
                                        <input type="text" name="asal_sekolah" id="asal_sekolah"
                                            autocomplete="sekolah"
                                            class="mt-1 block uppercase w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6">
                                        <label for="durasi" class="block text-sm font-medium text-gray-700">Durasi
                                            PKL</label>
                                        <input type="text" name="durasi_pkl" id="durasi_pkl" autocomplete="durasi"
                                            class="mt-1 block uppercase w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="tanggal_masuk" class="block text-sm font-medium text-gray-700">
                                            Tanggal Masuk</label>
                                        <input name="tanggal_masuk" type="date" id="date_field" autocomplete="nama"
                                            class="mt-1 block uppercase w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                    <div class="col-span-6
                                            sm:col-span-3">
                                        <label for="tanggal_keluar" class="block text-sm font-medium text-gray-700">
                                            Tanggal Keluar</label>
                                        <input name="tanggal_keluar" type="date" id="date_field" autocomplete="nama"
                                            class="mt-1 block uppercase w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>

                                    <div class="col-span-6">
                                        <label for="sekolah" class="block text-sm font-medium text-gray-700">surat
                                            pengajuan <span
                                                class="bg-yellow-500 px-1 text-xs rounded py-1 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">PDF
                                                FILE</span></label>
                                        <input type="file" name="file" id="file">

                                    </div>


                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        {{-- TABLE --}}
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-5">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __('Status Pendaftaran') }}
                    </div>
                    <div
                        class="p-5 relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">

                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                <table id="dataTable"
                                    class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
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
                                                Durasi PKL</th>
                                            <th
                                                class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Surat Pengajuan</th>
                                            <th
                                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                                Status</th>

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
                                                            <h6 class="mb-0 leading-normal text-sm">{{ $data->name }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p class="mb-0 font-semibold leading-tight text-xs">
                                                        {{ $data->major }}</p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p class="mb-0 font-semibold leading-tight text-xs">
                                                        {{ $data->durasi_pkl }}</p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <a href={{ route('print', ['id' => $data->id]) }}
                                                        class="bg-gray-200 px-3 text-xs rounded py-3 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">

                                                        <span>Download</span></a>
                                                </td>

                                                <td
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
                                                </td>


                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();

        });
    </script>
    <script>
        const dateField = document.getElementById('date_field');
        const dateValue = dateField.value;
        const dateObject = new Date(dateValue);

        const year = dateObject.getFullYear();
        const month = String(dateObject.getMonth() + 1).padStart(2, '0');
        const day = String(dateObject.getDate()).padStart(2, '0');

        const formattedDate = `${year}-${month}-${day}`;
        dateField.value = formattedDate;
    </script>
    {{-- <script>
        window.onload = function() {
            window.print();
        };
    </script> --}}




</x-app-layout>
