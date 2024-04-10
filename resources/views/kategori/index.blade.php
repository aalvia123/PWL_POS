@extends('layouts.app')

{{-- Customize layout sections --}}


@section('subtitle', 'kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Kategori</div>
            <div class="card-body">
                <a href="{{ route('kategori.create') }}" class="btn btn-success mb-3">+ Add Kategori</a>
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
