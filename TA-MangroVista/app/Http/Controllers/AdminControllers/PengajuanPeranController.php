<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Notifikasi;
use App\Models\RoleRequest;
use Illuminate\Http\Request;

class PengajuanPeranController extends Controller
{
    function index(Request $request)
    {
        $data['list_role_request'] = RoleRequest::all();
        return view('Admin.Pengajuan-Peran.index', $data);
    }
    function show(RoleRequest $role_request)
    {
        $data['role_request'] = $role_request;
        return view('Admin.Pengajuan-Peran.show', $data);
    }
    public function reject(Request $request, RoleRequest $role_request)
    {
        
        $request->validate([
            'alasan_penolakan' => 'required|string',
        ]);
         
        $role_request->status_request = 'Ditolak';
        if (request('alasan_penolakan')) $role_request->alasan_penolakan = (request('alasan_penolakan'));
        $role_request->save();

        return redirect('Admin/Pengajuan-Peran')->with('success', 'Pengajuan ditolak.');
    }
}
