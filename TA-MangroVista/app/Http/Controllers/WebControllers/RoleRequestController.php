<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Controllers\Controller;
use App\Models\RoleRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RoleRequestController extends Controller
{
    function create(){
        return view('web.Ambil-Peran.create');
    }
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama_lengkap' => 'required|string',
            'email' => 'required|email',
            'no_telpon' => 'required|string',
            'alamat' => 'required|string',
            'pengalaman' => 'required|string',
            'alasan' => 'required|string',
            'rencana_acara' => 'required|string',
        ]);

        // Mendapatkan informasi pengguna yang saat ini masuk
        $user = auth()->user();

        // Membuat instance model RoleRequest
        $roleRequest = new RoleRequest();

        // Mengisi nilai kolom dengan data dari formulir
        $roleRequest->user_id = $user->id;
        $roleRequest->full_name = $request->input('nama_lengkap');
        $roleRequest->email = $request->input('email');
        $roleRequest->bo_telpon = $request->input('no_telpon');
        $roleRequest->alamat = $request->input('alamat');
        $roleRequest->pengalaman_terkait = $request->input('pengalaman');
        $roleRequest->alasan = $request->input('alasan');
        $roleRequest->rencana_acara = $request->input('rencana_acara');
        $roleRequest->request_role = 'penyelenggara'; // Atau sesuaikan dengan nilai default yang Anda inginkan
        $roleRequest->request_status = 'Menunggu Konfirmasi';

        // Simpan data ke dalam tabel RoleRequest
        $roleRequest->save();

        // Redirect atau tampilkan pesan sukses setelah data berhasil disimpan
        return redirect()->back()->with('success', 'Permintaan peran berhasil dikirim.');
    }
}
