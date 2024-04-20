@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Data Produk') }}</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" name="nama_produk" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" id="" cols="20" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Harga</label>
                                <input type="number" class="form-control" name="harga">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Kategori</label>
                                <select name="kategori_id" id="" class="form-control">
                                    @foreach ($kategori as $row)
                                        <option value="{{ $row->id }}">{{ $row->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
