@extends('layouts.index')
@section('lowongan')
Lowongan
@endsection
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Info Lowongan</h1>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Lowongan admin</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Baca selengkapnya
        </button>
      </div>
    </div>
  </div>
</div>


{{-- modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <p>
          Kreator Market saat ini membuka lowongan kerja untuk posisi sebagai Admin & Illustrator.

          Deskripsi Pekerjaan:
          Jam Kerja
          • Senin-Jumat jam 08.30 – 11.30
          • Sabtu : jam 08.30 – 15.00

          Fasilitas
          • Uang lembur 120%
          • Uang lembur hari Minggu dan tanggal merah 150%
          • Makan siang FREE dan makan malam (ketika lembur)
          • Tempat tidur dalam kantor

          Syarat Pekerjaan :
          Admin (2 orang)
          • Pendidikan minimal D3 (lulusan advertisement is preffered)
          • Gaji 1.5 juta/ bulan (di dua bulan pertama) dan 2 juta di bulan ketiga dan akan naik sesuai kemampuan
          • AKTIF bahasa Inggris lisan dan tulis

          Illustrator (1 Orang)
          • Gaji 1.5 juta/ bulan (di dua bulan pertama) dan 2 juta di bulan ketiga akan naik sesuai kemampuan
          • AHLI software Adobe Illustrator & Photoshop, dll.

          Syarat
          • CV lengkap
          • Mempunyai karya pribadi dalam bentuk soft copy di drive / Youtube.

          Kirim CV dan karyamelalui EMAIL atau WHATSAPP.

          Lihat informasi lowongan kerja lebih lengkap di website LokerJogja.ID
        </p>

      </div>

    </div>
  </div>
</div>
@endsection