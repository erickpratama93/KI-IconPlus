<x-app-layout>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lowongan') }}
        </h2>
    </x-slot>

    <div class="m-5 ">
        <div class="grid grid-col-3 grid-flow-col self-center ">
            @foreach ($loker as $data)
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img class="w-full" src={{ url('storage/' . $data->job_image) }} alt="Image">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $data->job_title }}</div>
                        <p class="text-gray-700 text-base truncate">
                            {{ $data->job_desc }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <div class="grid justify-items-end">
                            <button type="button"
                                class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                                data-bs-toggle="modal" data-bs-target="#exampleModal{{ $data->id }}">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>

                <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                    id="exampleModal{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog relative w-auto pointer-events-none">
                        <div
                            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                            <div
                                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                                    {{ $data->job_title }}</h5>
                                <button type="button"
                                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body relative p-4 text-justify">
                                <div class="">{{ $data->job_desc }}</div>
                            </div>
                            <div
                                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                <button type="button"
                                    class="px-6
                                    py-2.5
                                    bg-purple-600
                                    text-white
                                    font-medium
                                    text-xs
                                    leading-tight
                                    uppercase
                                    rounded
                                    shadow-md
                                    hover:bg-purple-700 hover:shadow-lg
                                    focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
                                    active:bg-purple-800 active:shadow-lg
                                    transition
                                    duration-150
                                    ease-in-out"
                                    data-bs-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->

</x-app-layout>
