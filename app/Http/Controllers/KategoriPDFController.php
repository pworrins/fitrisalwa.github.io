<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use PDF;
class KategoriPDFController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori', ['kategori' => $kategori]);
    }

    public function cetak_pdf()
    {
        $kategori = Kategori::all();

        $pdf = PDF::loadview('kategori_pdf', ['kategori' => $kategori]);
        return $pdf->stream('laporan-kategori-pdf');
    }

}