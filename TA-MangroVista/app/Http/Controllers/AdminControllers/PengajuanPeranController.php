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
}
