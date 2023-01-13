@extends('layouts.index')
@section('title')
    Daftar PKL
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data PKL</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="dataTable_length">
                            <div class="row">
                                <label> Show
                                    <select name="dataTable_length" aria-controls="dataTable"
                                        class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>Lokasi PKL</th>
                            <th>Posisi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th colspan="3">Jumlah Siswa</th>
                            <th>4</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Erick Asrillah Pratama</td>
                            <td>ICON+ KP JOGJA</td>
                            <td>Manajer</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Amir Faisal Karimullah</td>
                            <td>ICON+ KP JOGJA</td>
                            <td>Gudang</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ardyas Setya Nugraha</td>
                            <td>ICON+ KP JOGJA</td>
                            <td>Harset</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Nur Achmad Faisol Qubro</td>
                            <td>ICON+ KP JOGJA</td>
                            <td>Aktivasi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    {{-- </div> --}}
    <!-- /.container-fluid -->

    {{-- </div> --}}
    
    <!-- End of Main Content -->
@endsection
