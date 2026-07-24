<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selaamat Datang di Website Laravel';
    }

    public function about()
    {
       return "Nama: [Rendra kurniawan]<br>NIM: [2618/2219.063]<br>Kelas: [XI RPLA]";
    }

    public function articles($id)
    {
      return "Ini adalah halaman Artikel dengan Id: " . $id;
    }
}