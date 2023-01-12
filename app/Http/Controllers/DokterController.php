<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        return 'Halo, Saya berada di halaman dokter index';
    }
    public function create()
    {
        return 'Halo, Saya berada dihalaman tambah data dokter';
    }
    //url yang akan dinamis
    public function edit($id)
    {
        return 'Halo, saya berada dihalaman edit dengan nilai '.$id;
    }
    public function show($id)
    {
        return 'Halo, saya berada dihalaman show dengan nilai '.$id;
    }
}
