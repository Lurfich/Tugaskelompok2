<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index ()
    {
        return 'hello, saya fungsi index di profil';
    }
    

    public function create ()
    {
        return 'hello, saya fungsi create di profil';
    }
}
