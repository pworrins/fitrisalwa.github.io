@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-success p-2 text-dark bg-opacity-25">{{ __('Data Kategori') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-2">Add Category <i class="bi bi-plus-square"></i></a>
                            <a href="{{ route('kategori_pdf') }}" class="btn btn-success mb-2 ">Export  <i class="bi bi-filetype-pdf"></i></a>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($kategori as $row)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $row->nama_kategori }}</td>
                                            <td>
                                                <form action="{{ route('kategori.destroy', $row->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-secondary"><i class="bi bi-trash3-fill"></i></button>
                                                </form>
                                                <a href="{{ route('kategori.edit', $row->id) }}"
                                                    class="btn btn-warning mt-2"><i class="bi bi-pencil-square"></i></a>
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
    </div>
@endsection
