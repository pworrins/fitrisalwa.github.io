@extends('layouts.app')

@section('content')
    <div class="container">
   <div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="banner/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="banner/2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="banner/1.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

        <div class="row mt-4">
            @foreach ($produk as $row)
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('gambar_produk/' . $row->gambar) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->nama_produk }}</h5>
                            <div class="paragraph" style="max-height: 80px;overflow: hidden;">
                                <p class="card-text">{{ $row->deskripsi }}</p>
                            </div>
                            <a href="{{ route('detailproduk', $row->id) }}" class="btn btn-primary"><i class="bi bi-heart-fill"></i> Detail Produk</a>
                            <a href="https://wa.me/62881022428594?text=hallo, kak aku mau beli+{{ $row->nama_produk }},+apakah masih ada?" class="btn btn-success"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


