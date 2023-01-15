<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Berita Terbaru') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("halaman news") }}
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Container for demo purpose -->

    <!-- Section: Design Block -->
    <section class="mb-32 text-gray-800 text-center md:text-left">

        {{-- <h2 class="text-3xl font-bold mb-12 text-center">Latest articles</h2> --}}

        @foreach ($news as $data)
            <div class="flex flex-wrap mb-6 mt-6 p-6 rounded-lg shadow-lg bg-white ">
                <div class="grow-0 shrink-0 basis-auto w-full md:w-3/12 px-3 mb-6 md:mb-0 ml-auto">
                    <div class="relative overflow-hidden bg-no-repeat bg-cover ripple shadow-lg rounded-lg mb-6"
                        data-mdb-ripple="true" data-mdb-ripple-color="light">
                        <img src={{ url('storage/' . $data->news_image) }} class="w-full" alt="Louvre" />
                        <a href="#!">
                            <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out"
                                style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </a>
                    </div>
                </div>

                <div class="grow-0 shrink-0 basis-auto w-full md:w-9/12 xl:w-7/12 px-3 mb-6 md:mb-0 mr-auto">
                    <h5 class="text-lg font-bold mb-3">{{ $data->news_title }}</h5>

                    <p class="text-gray-500 mb-6">
                        <small>Published <u>{{ $data->created_at }}</u>
                            {{-- <a href="" class="text-gray-900">Anna Maria Doe</a></small> --}}
                    </p>
                    <p class="text-gray-500">
                        {{ $data->news_description }}
                    </p>
                </div>
            </div>
        @endforeach

    </section>
    <!-- Section: Design Block -->


    <!-- Container for demo purpose -->
</x-app-layout>
