<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'kodeKategori' => 'required',
            'namaKategori' => 'required',
        ]);

        // Simpan data kategori baru
        $kategori = new KategoriModel();
        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;
        $kategori->save();

        return redirect('/kategori');
    }

    public function update($id, Request $request)
    {
        $kategori = KategoriModel::find($id);
        return view('kategori.kategori_update', ['data' => $kategori]);
    }

    public function update_simpan($id, Request $request)
    {
        $kategori = KategoriModel::find($id);
        $kategori->kategori_kode = $request->kodeKategori; // ubah dari 'kodekategori' menjadi kodeKategori
        $kategori->kategori_nama = $request->namaKategori;

        $kategori->save();
        return redirect('/kategori');
    }

    public function delete($id)
    {
        KategoriModel::destroy($id);
        return redirect('/kategori');
    }
}
