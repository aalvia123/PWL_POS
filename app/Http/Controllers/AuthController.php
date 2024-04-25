<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function index()
    {
        // Kita ambil data user dan simpan pada variable $user
        $user = Auth::user();

        // Kondisi jika user ada
        if ($user) {
            // Jika user memiliki level admin
            if ($user->level_id == '1') {
                return redirect()->intended("admin");
            }
            // Jika user memiliki level manager
            elseif ($user->level_id == '2') {
                return redirect()->intended("manager");
            }
        }

        return view('login');
    }

    public function proses_login(Request $request)
    {
        // Validasi saat tombol login diklik
        $request->validate([
            "username" => "required",
            "password" => "required"
        ]);

        // Ambil data request username & password saja
        $credential = $request->only('username', 'password');

        // Cek apakah data username dan password valid
        if (Auth::attempt($credential)) {
            // Jika berhasil, simpan data user pada variabel $user
            $user = Auth::user();

            // Cek level user
            if ($user->level_id == '1') {
                return redirect()->intended("admin");
            } elseif ($user->level_id == '2') {
                return redirect()->intended("manager");
            }
        }

        // Jika tidak berhasil, kembali ke halaman login dengan pesan error
        return redirect('login')
            ->withInput()
            ->withErrors(["login_gagal" => "Pastikan username dan password yang dimasukkan sudah benar"]);
    }

    public function register()
    {
        // Tampilkan view register
        return view("register");
    }

    public function proses_register(Request $request)
    {
        // Validasi untuk proses register
        $validator = Validator::make($request->all(), [
            "nama" => "required",
            "username" => "required|unique:user",
            "password" => "required"
        ]);

        // Jika validasi gagal, kembali ke halaman register dengan pesan error
        if ($validator->fails()) {
            return redirect("/register")
                ->withErrors($validator)
                ->withInput();
        }

        // Jika berhasil, set level dan hash password untuk keamanan
        $request['level_id'] = '2';
        $request['password'] = Hash::make($request->password);

        // Masukkan data ke dalam tabel user
        UserModel::create($request->all());

        // Redirect ke halaman login
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        // Logout dengan menghapus session dan fungsi logout pada Auth
        $request->session()->flush();
        Auth::logout();

        // Kembali ke halaman login
        return redirect('login');
    }
}
