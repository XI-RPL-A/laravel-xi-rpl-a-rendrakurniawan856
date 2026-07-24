<?php

namespace App\Http\Controllers;

class CompanyController extends Controller
{
    // HOME
    public function home()
    {
        return view('home');
    }


    // PRODUCTS (PREFIX)
    public function product($category)
    {
        return "Product : " . $category;
    }


    // NEWS (PARAMETER)
    public function new($judul)
    {
        return "Judul Berita : " . $judul;
    }


    // PROGRAM (PREFIX)
    public function program($nama)
    {
        return "Program : " . $nama;
    }


    // ABOUT US
    public function about()
    {
        return "Halaman About Us";
    }
}