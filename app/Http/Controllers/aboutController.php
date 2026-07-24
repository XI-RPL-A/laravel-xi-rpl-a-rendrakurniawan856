<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
public function about()
{
    return "nama: rendra kurniawan.
    kelas: XI RPL 2.
    nim: 2618/2219.063.
    ";
}
 public function index()
    {
        return "About Us";
    }
}
