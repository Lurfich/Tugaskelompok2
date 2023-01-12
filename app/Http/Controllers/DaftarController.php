<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\Pasien;
use App\Models\Poli;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->filled('q')) {
            $models = Daftar::search(request('q'))
                ->paginate(10);
        } else {
            $models = Daftar::latest()->paginate(10);
        }
        $data['models'] = $models;
        return view('daftar_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pasien'] = Pasien::pluck('nama', 'id');
        $data['poli'] = Poli::pluck('nama', 'id');
        $data['model'] = new Daftar();
        $data['method'] = 'POST';
        $data['route'] = 'daftar.store';
        $data['namaTombol'] = 'SIMPAN';
        return view('daftar_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'tanggal_daftar' => 'required',
            'pasien_id' => 'required',
            'poli' => 'required',
            'keluhan' => 'required',
        ]);
        $model = new Daftar();
        $model->fill($requestData);
        $model->status_daftar = 'baru';
        $model->save();
        flash('Data berhasil disimpan')->success();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $daftar = Daftar::findOrFail($id);
        $data['rekamMedik'] = Daftar::where('pasien_id', $daftar->pasien_id)
            ->where('status_daftar', 'selesai')
            ->latest()->get();
        $data['daftar'] = $daftar;
        return view('daftar_show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->validate([
            'diagnosis' => 'required',
            'tindakan' => 'required'
        ]);
        $daftar = Daftar::findOrFail($id);
        $daftar->fill($requestData);
        $daftar->status_daftar = 'selesai';
        $daftar->save();
        flash('Data sudah diubah');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftar = Daftar::findOrFail($id);
        if ($daftar->diagnosis != null) {
            flash('Data gagal dihapus')->error();
            return back();
        }
        $daftar->delete();
        flash('Data berhasil dihapus');
        return back();
    }
}
