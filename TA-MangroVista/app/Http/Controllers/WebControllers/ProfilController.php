<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Tanaman;
use App\Models\Event;
use App\Models\RoleRequest;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    // function indexAmbilPeran(){
    //     $userId = Auth::id();
    //     $data['list_role_request'] = RoleRequest::where('user_id', $userId)->get();
    //     return view('Web.Profil.index', $data);
    // }
    function index()
    {
        $user = request()->user();
        $data['list_role_request'] = $user->role_request;
        $tanaman = Tanaman::with('eventPenanaman')->get();
        $data['list_tanaman'] = Tanaman::all();
        $data['list_event'] = Event::all();
        $data['user'] = Auth::user();
        return view('Web.Profil.index', $data);
    }
    function updatePengaturanAkun(User $user)
    {
        if (request('nama_lengkap')) $user->nama_lengkap = (request('nama_lengkap'));
        if (request('username')) $user->username = (request('username'));
        if (request('email')) $user->email = (request('email'));
        if (request('role')) $user->role = (request('role'));
        if (request('password')) $user->password = (request('password'));
        if (request('foto_profil')) $user->handleUploadFoto();
        $user->save();
        return redirect('Profil')->with('success', 'Data Berhasil Diedit');
    }
    

}
