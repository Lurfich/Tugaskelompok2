<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class LaporanPasienController extends Controller
{
    public function create()
    {
        return view('laporan_pasien_form');
    }

    public function index(Request $request)
    {
        $models = Pasien::query();

        if ($request->filled('tanggal_mulai')) {
            $models->whereDate('created_at', '>=', $request->tanggal_mulai);
        }

        if ($request->filled('tanggal_selesai')) {
            $models->whereDate('created_at', '<=', $request->tanggal_selesai);
        }

        if ($request->filled('jenis_kelamin') && $request->jenis_kelamin != 'semua') {
            $models->where('jenis_kelamin', $request->tanggal_selesai);
        }
        $data['models'] = $models->paginate(50);
        return view('laporan_pasien_index', $data);
    }

}
