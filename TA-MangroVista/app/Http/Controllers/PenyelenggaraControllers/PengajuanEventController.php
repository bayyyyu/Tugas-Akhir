<?php

namespace App\Http\Controllers\PenyelenggaraControllers;

use App\Http\Controllers\Controller;
use App\Models\DataTambahanEvent;
use App\Models\Event;
use App\Models\Tanaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengajuanEventController extends Controller
{
    function index(Request $request)
    {
        $data['list_event'] = Event::all();
        $data['jumlah_penanaman'] = [];
        $data['jumlah_pohon_hidup'] = [];

        foreach ($data['list_event'] as $event) {
            // Menghitung jumlah penanaman dengan event_id yang sama
            $jumlahPenanaman = DB::table('tanaman')->where('event_id', $event->id)->count();
            $data['jumlah_penanaman'][$event->id] = $jumlahPenanaman;

            // Menghitung jumlah status_penanaman "hidup" dengan event_id yang sama
            $jumlah_pohon_hidup = Tanaman::where('event_id', $event->id)
                ->where('status_penanaman', 'hidup')
                ->count();
            $data['jumlah_pohon_hidup'][$event->id] = $jumlah_pohon_hidup;
        }

        $page_telah_selesai = $request->query('page_telah_selesai', 1);
        $list_event_telah_selesai = Event::where('tanggal_event', '<', now())->get();

        $page_belum_selesai = $request->query('page_belum_selesai', 1);
        $list_event_belum_selesai = Event::where('tanggal_event', '>', now())->get();

        $page_berlangsung = $request->query('page_berlangsung', 1);
        $list_event_berlangsung = Event::where('tanggal_event', '<=', now())
            ->where('tanggal_selesai', '>=', now())
            ->get();

        return view('Admin.Event.index', compact('list_event_telah_selesai', 'list_event_belum_selesai', 'list_event_berlangsung', 'page_telah_selesai', 'page_belum_selesai', 'page_berlangsung'), $data);
    }
    function create()
    {
        return view('Penyelenggara.Event.create');
    }
    public function store(Request $request)
    {

        $user = auth()->user();
        $event = new Event;
        $event->user_id = $user->id;
        $event->nama_event = $request->input('nama_event');
        $event->tanggal_event = $request->input('tanggal_event');
        $event->tanggal_selesai = $request->input('tanggal_selesai');
        $event->deskripsi = $request->input('deskripsi');
        $event->lat = $request->input('lat');
        $event->lng = $request->input('lng');
        $event->jam = $request->input('jam');
        $event->status = 'Menunggu Konfirmasi';

        $event->handleUploadFoto();
        $event->save();

        // Simpan data tambahan jika ada yang diunggah
        if ($request->has('car')) {
            foreach ($request->car as $data) {
                $dataTambahan = new DataTambahanEvent;
                $dataTambahan->event_id = $event->id;
                $file = $data['dokumen_tambahan']->store('folder_name'); // Folder untuk menyimpan file
                $dataTambahan->dokumen_tambahan = $file;
                $dataTambahan->nama_berkas = $data['nama_berkas'];
                $dataTambahan->save();
            }
        }


        return redirect('Profil')->with('success', 'Berhasil mengajukan Event');
    }
    public function show(Event $event)
    {
        $data['event'] = $event;

        // Menghitung jumlah status_penanaman "hidup" dengan event_id yang sama
        $jumlah_pohon_hidup = Tanaman::where('event_id', $event->id)
            ->where('status_penanaman', 'hidup')
            ->count();
        $data['jumlah_pohon_hidup'][$event->id] = $jumlah_pohon_hidup;

        $jumlahPenanaman = DB::table('tanaman')
            ->where('event_id', $event->id)
            ->count();
        $data['jumlah_penanaman'] = $jumlahPenanaman;

        return view('Admin.Event.show', $data);
    }

    function edit(Event $event)
    {
        $data['event'] = $event;
        return view('Admin.Event.edit', $data);
    }

    function dokumentasi(Event $event)
    {
        $data['event'] = $event;
        return view('Admin.Event.dokumentasi', $data);
    }
    function update(Event $event)
    {
        if (request('nama_event')) $event->nama_event = (request('nama_event'));
        if (request('tanggal_event')) $event->tanggal_event = (request('tanggal_event'));
        if (request('deskripsi')) $event->deskripsi = (request('deskripsi'));
        if (request('lat')) $event->lat = (request('lat'));
        if (request('lng')) $event->lng = (request('lng'));
        if (request('jam')) $event->jam = (request('jam'));
        if (request('deskripsi_foto_dokumentasi')) $event->deskripsi_foto_dokumentasi = (request('deskripsi_foto_dokumentasi'));
        if (request('foto')) $event->handleUploadFoto();
        if (request('foto_dokumentasi')) $event->handleUploadFotoDokumentasi();
        $event->save();
        return redirect('Admin/Event')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Event $event)
    {
        $event->delete();
        return redirect('Admin/Event')->with('danger', 'Data Berhasil Dihapus');
    }
}