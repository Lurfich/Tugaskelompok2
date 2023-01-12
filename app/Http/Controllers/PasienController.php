<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Pasien::latest()->paginate(10);
        // dd ($models);
        $data['models'] = $models;
        return view('pasien_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'model' => new Pasien(),
            'method' => 'POST',
            'route' => 'pasien.store',
            'namaTombol' => 'SIMPAN'
        ];
        return view('pasien_form', $data);
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
            'nama' => 'required|min:2',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required',
            'foto' => 'required|mimes:png,jpg,jpeg|max:5000',
        ]);
        $pasien = Pasien::orderBy('no_pasien', 'desc')->first();
        if ($pasien == null) {
            $noPasien = 10001;
        } else {
            $noPasien = $pasien->no_pasien + 1;
        }
        $requestData['foto'] = $request->file('foto')->store('public');
        $requestData['no_pasien'] = $noPasien;
        Pasien::create($requestData);
        flash('DATA SUDAH DI SIMPAN');
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
        return 'Halo, saya fungsi show ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'model' => \App\Models\Pasien::findOrFail($id),
            'method' => 'PUT',
            'route' => ['pasien.update', $id],
            'namaTombol' => 'UPDATE'
        ];
        return view('pasien_form', $data);
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
            'nama' => 'required|min:2',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required',
            'foto' => 'nullable|mimes:png,jpg,jpeg|max:5000',
        ]);

        $pasien = Pasien::findOrFail($id);
        if ($request->hasFile('foto')) { #kalau ada foto maka
            \Storage::delete($pasien->foto); #foto yang lama di hapus
            $requestData['foto'] = $request->file('foto')->store('public'); #foto baru di simpan ke db
        }

        $pasien->fill($requestData);
        $pasien->save();
        flash('DATA SUDAH DIUBAH');
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
        $pasien = Pasien::findOrFail($id);
        if ($pasien->daftar->count() >= 1) {
            flash('Data gagal dihapus')->error();
            return back();
        }

        $pasien->delete();
        flash('Data sudah di hapus');
        return back();
    }
}
