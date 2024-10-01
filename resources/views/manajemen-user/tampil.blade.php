@extends('layout.main')

@section('title','Manajemen User | SISUSANA')
@section('namepage','MANAJEMEN USER')
@section('content')
<div class="page-inner">
    <div
      class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
      <div>
        <a href="/manajemen-user/tambah" class="btn btn-primary">
          <i class="icon-user-follow"></i> Tambah User
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">User</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                id="basic-datatables"
                class="display table table-striped table-hover">
                <thead class="text-center">
                  <tr>
                    <td>No</td>
                    <td>Nama Lengkap</td>
                    <td>Email</td>
                    <td>Level</td>
                    <td>Aksi</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Omen</td>
                    <td>Omen@gmail.com</td>
                    <td>Smoker</td>
                    <div>
                      <td class="">
                        <a href="/manajemen-user/edit" class="btn btn-warning btn-sm">
                          <i class="fas fa-pen"></i> Edit
                        </a>
                        <a href="user_delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
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


        

        

