@extends('layout.main')

@section('title','Manajemen Pertanyaan | SISUSANA')
@section('namepage','MANAJEMEN PERTANYAAN')
@section('content')
    <div class="page-inner">
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
          <a href="/manajemen-pertanyaan/tambah" class="btn btn-primary">
            <i class="fa fa-calendar-plus"></i> Tambah Pertanyaan
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Pertanyaan</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table
                  id="basic-datatables"
                  class="display table table-striped table-hover">
                  <thead class="text-center"> 
                    <tr>
                      <td>No</td>
                      <td>Grup</td>
                      <td>Pertanyaan</td>
                      <td>Aksi</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Unsur Pelayanan</td>
                      <td>Bagaimana penilaian anda tentang kemudahan persyaratan administrasi untuk mendapatkan pelayanan</td>
                      <div>
                        <td class="">
                          <a href="/manajemen-pertanyaan/edit" class="btn btn-warning btn-sm">
                            <i class="fas fa-pen"></i> Edit
                          </a>
                          <a href="hapus.php" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
                            <i class="fas fa-trash"></i> Hapus
                          </a>
                        </td>
                      </div>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection


        

        

