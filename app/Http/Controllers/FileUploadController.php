<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    public function fileUpload()
    {
        return view('file-upload');
    }

    public function fileuploadRename()
    {
        return view('file-upload-rename');
    }

    public function prosesFileUploadRename(Request $request)
    {
        $request->validate([
            'berkas'=>'required|file|image|max:500',
        ]);
        $extfile=$request->berkas->getClientOriginalName();
        $nama_file=$request->input('namaFile');
        $nameFile='web-'.time().".".$nama_file.".".$extfile;
        //$path = $request->berkas->storeAs('public', $nameFile);

        $path = $request->berkas->move('gambar', $nameFile);
        $path =str_replace("\\","//", $path);
        echo"Variabel path berisi:$path <br>";

        $pathBaru=asset('gambar/'.$nameFile);
        echo "proses upload berhasil, di link:<a href='$pathBaru'>$nama_file.$extfile</a>";
        echo "Proses upload berhasil, data disimpan pada: $path";
        echo "<br>";
        echo "<img src = '$pathBaru' alt = 'gambar' style = 'max-width: 300px; max-height: 300px;'> ";
    }
}
