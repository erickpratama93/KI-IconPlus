@extends('layouts.index')
@section('title')
    Daftar PKL
@endsection
@section('content')
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Masukan Data Pengajuan PKL</h6>
        </div>
        <div class="card-body">
            <form>
                <div id="show_item">
                    <div class="row" >
                        <div class="mb-3 col-md-3">
                            <label class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Laki Laki</option>
                              <option>Perempuan</option>
                            </select>
                        </div>
    
                        <div class="mb-3 col-md-1">
                            <label class="form-label">kelas</label>
                            <input class="form-control" placeholder="11">
                        </div>
                        <div class="mb-3 col-md-2">
                            <label class="form-label">Jurusan</label>
                            <input class="form-control" placeholder="Teknik Komputer Jaringan">
                        </div>
                        <div class="mb-3 col-md-2">
                            <label class="form-label">Sekolah</label>
                            <input class="form-control" placeholder="SMK Negeri 1 Bondowoso">
                        </div>
                        <div class="col-md-2 d-flex align-items-center">
                            <button type="#" class="btn btn-success add_item_btn"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                

                <button type="submit" class="btn btn-primary ">Submit</button>

              </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".add_item_btn").click(function(e){
                e.preventDefault();
                $("#show_item").prepend(`<div class="row" >
                        <div class="mb-3 col-md-3">
                            <label class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control" id="name" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Laki Laki</option>
                              <option>Perempuan</option>
                            </select>
                        </div>
    
                        <div class="mb-3 col-md-1">
                            <label class="form-label">kelas</label>
                            <input class="form-control" placeholder="11">
                        </div>
                        <div class="mb-3 col-md-2">
                            <label class="form-label">Jurusan</label>
                            <input class="form-control" placeholder="Teknik Komputer Jaringan">
                        </div>
                        <div class="mb-3 col-md-2">
                            <label class="form-label">Sekolah</label>
                            <input class="form-control" placeholder="SMK Negeri 1 Bondowoso">
                        </div>
                        <div class="col-md-2 d-flex align-items-center">
                            <button type="#" class="btn btn-danger remove_item_btn"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>`);
            });
            $(document).on('click','.remove_item_btn',function(e){
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
               //ajax request to insert data
            // $("#add_btn").val('Adding....');
            // $.ajax({
            //     url:'action.php',
            //     method:'post',
            //     data:$(this).serialize(),
            //     success:function(response){
            //         console.log(response);
            //     }
            // });

        });
    </script>
@endsection