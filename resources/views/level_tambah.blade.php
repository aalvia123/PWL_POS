@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Tambah level</h1>
@stop
@section('content')
<div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Form Tambah Level</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form>
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Kode Level</label>
              <input type="text" class="form-control" placeholder="Masukan Kode Level">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nama Level</label>
              <input type="text" class="form-control" placeholder="Masukan Nama Level" >
            </div>
          </div>
        </div>
        <button type = "submit" class ="btn btn-success">Submit </button>
    </div>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
