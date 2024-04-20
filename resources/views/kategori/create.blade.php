@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tambah Kategori') }}</div>

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
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <form action="{{ route('kategori.store') }}" method="post">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="" class="form-label">Nama Kategori</label>
                                    <input type="text" class="form-control border-success" name="nama_kategori">
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
    </div>
@endsection
