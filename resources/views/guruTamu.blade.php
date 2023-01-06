@extends('layouts.index')
@section('lowongan')
Lowongan
@endsection
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Guru Tamu</h1>
                    </div>

    <div class="col-lg-6">

            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapse1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapse1">
                    <h6 class="m-0 font-weight-bold text-primary">Pertemuan 1</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapse1" style="">
                    <div class="card-body ms-auto w-50">
                        1.Pembahasan Implementasi Fiber Optik di ranah industri
                        2.Praktik Penyambungan Fiber Optik menggunakan Splicer
                        3.Praktik evalusasi Fiber Optic dengan alat ukur yang tersedia (OPM, OLS, OTDR)
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapse2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapse2">
                    <h6 class="m-0 font-weight-bold text-primary">Pertemuan 2</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapse2" style="">
                    <div class="card-body ms-auto w-50">
                        1.Mengupas kabel 6 core
                        2.Setting odp 6 core
                        3.Setting joint closour
                        4.Pematangan materi urutan warna core pada kabel
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapse3" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapse3">
                    <h6 class="m-0 font-weight-bold text-primary">Pertemuan 3</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapse3" style="">
                    <div class="card-body ms-auto">
                        1.Pemaparan Materi HSE
                        2.Praktik HSE untuk ketinggian
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapse4" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapse4">
                    <h6 class="m-0 font-weight-bold text-primary">Pertemuan 4</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapse4" style="">
                    <div class="card-body ms-auto">
                        1.Penjelasan implementasi instalasi dropcore di dalam rumah
                        2.Praktik tarikan drop core dari odp ke modem
                        3.Praktik evaluasi instalasi dropcore
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection