<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Tanaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{

    function index(Request $request)
    {
        $tanaman = Tanaman::with('eventPenanaman')->get();

        $page_telah_selesai = $request->query('page_telah_selesai', 1);
        $list_event_telah_selesai = Event::where('tanggal_event', '<', now())->get();
        // $list_event_telah_selesai = Event::where('tanggal_event', '<', now())->paginate(6, ['*'], 'page_telah_selesai')->withQueryString();

        $page_belum_selesai = $request->query('page_belum_selesai', 1);
        $list_event_belum_selesai = Event::where('tanggal_event', '>', now())->get();

        $page_berlangsung = $request->query('page_berlangsung', 1);
        $list_event_berlangsung = Event::where('tanggal_event', '<=', now())
        ->where('tanggal_selesai', '>=', now())
        ->paginate(3, ['*'], 'page_berlangsung')->withQueryString();
        
        return view('Web.Event.index', compact('tanaman', 'list_event_telah_selesai', 'list_event_belum_selesai', 'list_event_berlangsung', 'page_telah_selesai','page_belum_selesai', 'page_berlangsung'));
    }
    
    function show(Event $event)
    {
        $data['event'] = $event;

        // Menghitung jumlah penanaman dengan event_id yang sama
        $jumlahPenanaman = DB::table('tanaman')->where('event_id', $event->id)->count();
        $data['jumlah_penanaman'] = $jumlahPenanaman;

        // Menghitung jumlah status_penanaman "hidup" dengan event_id yang sama
        $jumlah_pohon_hidup = Tanaman::where('event_id', $event->id)
            ->where('status_penanaman', 'hidup')
            ->count();
        $data['jumlah_pohon_hidup'] = $jumlah_pohon_hidup;

        
        return view('Web.Event.show', $data);
    }
}
