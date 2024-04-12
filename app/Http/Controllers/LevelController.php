<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LevelModel;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StorePostRequest;
class LevelController extends Controller
{
    public function index()
    {
       // DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)', ['cus', 'pelanggan', now()]);
       // return 'insert data baru berhasil';

       //$row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'Cus']);
       //return 'Update data berhasil. jumlah data yang diupdate:' . $row . 'baris';

       //$row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        //return 'Delete data berhasil. jumlah data yang dihapus: ' . $row . 'baris';

        $data = DB::select('select * from m_level');
        return view('level', ['data' => $data]);

    }

    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        LevelModel::create([
            'level_kode' => $request->level_kode,
            'level_nama' => $request->level_nama,
        ]);

        return redirect('/level');
    }

    public function store(StorePostRequest $request): RedirectResponse
    {
        // The incoming request is valid ...

        // Retrive the validated input data..
        $validated = $request->safe()->only(['level_kode', 'level_nama']);
        $validated = $request->safe()->except(['level_kode', 'level_nama']);

        // Store the post

        return redirect('/level');

    }
}
