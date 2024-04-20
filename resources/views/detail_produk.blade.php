@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body bg-success p-2 text-dark bg-opacity-25">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="card-title">{{ $data->nama_produk }} </h3>
                    </div>
                
                    <div class="col-md-4">
                        <img src="{{ asset('gambar_produk/' . $data->gambar) }}" alt="" srcset=""
                            class="img-thumbnail">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <div class="mb-3">
                            <span class="badge bg-dark me-1">Category :{{ $data->kategori->nama_kategori }}</span>
                            <span class="badge bg-info me-1">Rp. {{ number_format($data->harga) }} ;</span>
                            <span class="badge bg-danger me-1">Bestseller</span>
                        </div>
                        <strong><p style="font-size: 30px;">Description</p></strong>
                        <p style="font-size:25px">
                            {{ $data->deskripsi }}
                        </p>
                        <a href="https://wa.me/62881022428594?text=hallo, kak aku mau beli,+apakah masih ada?" class="btn btn-success">Beli Sekarang  <i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
