<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\DataTables\KategoriDataTable;

use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
    
        return $dataTable->render('kategori.index');
    }

    public function create(): View
    {
        return view('kategori.create');
    }
    /**
     * Store a new post.
     */

    public function store(Request $request): RedirectResponse
    {

        $validated = $request->validate([
            'kategori_kode' => 'bail|required|unique:m_kategori,kategori_kode',
            'kategori_nama' => 'required',
        ]);

        if (!$validated){
            return redirect('/kategori/create')->withInput()->withErrors($validated);
        }

        // The post is valid...

        return redirect('/kategori');
    }
}
