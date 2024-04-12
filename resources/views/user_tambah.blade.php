@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Tambah User</h1>
@stop
@section('content')
<div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Form Tambah User</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form>
        <div class="row">
          <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" placeholder="Masukan Username">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" placeholder="Masukan Nama" >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <!-- textarea -->
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" placeholder="Password" >
              </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
                <label>ID Level</label>
                <select name="level_id">
                  <option>Level 1</option>
                  <option>Level 2</option>
                  <option>Level 3</option>
                  <option>Level 4</option>
                  <option>Level 5</option>
                </select>
              </div>
          </div>
        </div>
        <button type = "submit" class ="btn btn-success" value="simpan">Submit </button>
    </div>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
