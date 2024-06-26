@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('kategori') }}" class="form-horizontal">
            @csrf
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Kode Kategori</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="kodeKategori" name="kodeKategori" value="{{ old('kodeKategori') }}" required>
                    @error('kodeKategori')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Nama Kategori</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="Kategori_nama" name="Kategori_nama" value="{{ old('Kategori_nama') }}" required>
                    @error('Kategori_nama')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-10 offset-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ url('kategori') }}" class="btn btn-default ml-1">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
