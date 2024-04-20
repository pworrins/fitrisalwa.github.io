<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use PDF;
class ProdukPDFController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('produk', ['produk' => $produk]);
    }

    public function cetak_pdf()
    {
        $produk = Produk::all();

        $pdf = PDF::loadview('produk_pdf', ['produk' => $produk]);
        return $pdf->stream('laporan-produk-pdf');
    }
}