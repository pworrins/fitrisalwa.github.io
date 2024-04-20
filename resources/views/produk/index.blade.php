@extends('layouts.app')

@section('content')
    @include('sweetalert::alert')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-success p-2 text-dark bg-opacity-25">{{ __('Data Produk') }}</div>

                    <div class="card-body">
                        <a href="{{ route('produk.create') }}" class="btn btn-primary mb-2 ">Add Produk <i class="bi bi-plus-square"></i></a>
                        <a href="{{ route('produk_pdf') }}" class="btn btn-success mb-2 ">Export  <i class="bi bi-filetype-pdf"></i></a>
                        <table class="table table-bordered" id="example">
                            @php
                                $no = 1;
                            @endphp
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Deskripsi</th>
                                    <th>Kategori</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $row->nama_produk }}</td>
                                        <td>{{ $row->harga }}</td>
                                        <td>{{ $row->deskripsi }}</td>
                                        <td>{{ $row->kategori->nama_kategori }}</td>
                                        <td>
                                            <img src="{{ asset('gambar_produk/' . $row->gambar) }}" alt=""
                                                class="img-thumbnail" style="height: 90px;">
                                        </td>
                                        <td>
                                            <form action="{{ route('produk.destroy', $row->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-secondary"><i class="bi bi-trash3-fill"></i></button>
                                            </form>
                                            <a href="{{ route('produk.edit', $row->id) }}" class="btn btn-warning mt-2"><i class="bi bi-pencil-square"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
