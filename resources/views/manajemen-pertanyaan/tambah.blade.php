@extends('layout.main')

@section('title','Tambah Pertanyaan | SISUSANA')
@section('namepage','MANAJEMEN PERTANYAAN')
@section('content')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <div class="card-title">Form Tambah Pertanyaan</div>
            </div>
            <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="defaultSelect">Grup</label>
                        <div class="input-group p-0">
                            <span class="input-group-text">
                                <i class="icon-shuffle"></i>
                            </span>
                            <select
                                class="form-select form-control"
                                id="defaultSelect">
                                <option>Unsur Pelayanan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <textarea class="form-control" id="pertanyaan" rows="5">
                        </textarea>
                    </div>
                </div>
            </div>
            </div>
            <div class="card-action">
            <button class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            <button class="btn btn-danger"><i class="fas fa-times"></i> Batal</button>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection