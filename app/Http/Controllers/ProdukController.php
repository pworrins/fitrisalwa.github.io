<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = Produk::all();
        return view('produk.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['kategori'] = Kategori::all();
        return view('produk.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|max:50',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required',
            'kategori_id' => 'required|integer'
        ]);
        $fileName = rand(1, 10000000) . $request->gambar->extension();
        $request->gambar->move(public_path('/gambar_produk'), $fileName);
        $data = [
            'nama_produk' => $request->nama_produk,
            'kategori_id' => $request->kategori_id,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $fileName
        ];
        Produk::insert($data);
        alert()->success('Berhasil', 'Data Produk Berhasil di tambah !');
        return redirect(route('produk.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data'] = Produk::where('id', $id)->first();
        $data['kategori'] = Kategori::all();
        return view('produk.edit', $data);
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
        $validated = $request->validate([
            'nama_produk' => 'required|max:50',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required',
            'kategori_id' => 'required|integer'
        ]);
        $fileName = rand(1, 10000000) . $request->gambar->extension();
        $request->gambar->move(public_path('/gambar_produk'), $fileName);
        $data = [
            'nama_produk' => $request->nama_produk,
            'kategori_id' => $request->kategori_id,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $fileName
        ];
        Produk::where('id', $id)->update($data);
        alert()->success('Berhasil', 'Data Produk Berhasil di update !');
        return redirect(route('produk.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produk::where('id', $id)->delete();
        alert()->success('Berhasil', 'Data Produk Berhasil di hapus !');
        return redirect(route('produk.index'));
    }
}
