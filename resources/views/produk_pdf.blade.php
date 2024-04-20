<!DOCTYPE html>
<html>

<head>
    <title>Laporan PDF Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
        </style>
        <center>
            <h5>Laporan PDF produk</h4>
        </center>

    <table class='table table-bordered bg-success p-2 text-dark bg-opacity-10'>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Produk</td>
                <td>Harga</td>
                <td>Deskripsi</td>
                <td>Kategori</td>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($produk as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->nama_produk }}</td>
                    <td>{{ $row->harga }}</td>
                    <td>{{ $row->deskripsi }}</td>
                    <td>{{ $row->kategori->nama_kategori }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
