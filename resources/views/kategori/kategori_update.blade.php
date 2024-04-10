@extends('layouts.app')
{{-- Customize layout sections --}}
@section('subtitle', 'kategori')
@section('content_header_title', 'kategori')
@section('content_header_subtitle', 'Update')
{{-- Content body:main page content --}}
@section('content')
    <div class="container">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Update Kategori</h3>
            </div>
            <form method="post" action="{{ route('/kategori/update_simpan', $data->kategori) }}">
                @csrf
                @method('PUT')


                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kodeKategori">Kode Kategori</label>
                            <input type="text" class="form-control" id="kodeKategori" value="{{ $data->kategori_kode }}">
                        </div>
                        <div class="form-group">
                            <label for="namaKategori">Nama Kategori</label>
                            <input type="text" class="form-control" id="namaKategori" value="{{ $data->kategori_nama }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('/kategori') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>

            <!-- formulir untuk menghapus kategori -->
            <form mrthod="POST" action="{{ route('kategori.delete', $data->kategori_id) }}"
                onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini ?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus Kategori</button>
            </form>
        </div>
    </div>
@endsection
