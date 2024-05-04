@extends('layouts.main')

@section('contents')
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/superadmin">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                </ul>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="card shadow mb-4">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h3 class="m-0 font-weight-bold text-primary">Data Produk</h3>
            <a href="/produk/create" class="btn btn-primary d-block">Tambah Produk Baru</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Harga Produk</th>
                            <th>Deksripsi</th>
                            <th>No Telepon</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                <td style="vertical-align: middle;">{{ $product->nama }}</td>
                                <td style="vertical-align: middle;">{{ $product->harga }}</td>
                                <td style="vertical-align: middle;">{{ $product->deskripsi }}</td>
                                <td style="vertical-align: middle;">{{ $product->no_telp }}</td>
                                <td style="vertical-align: middle;">
                                    <img src="{{ asset('storage/' . $product->image) }}"
                                        style="width: 70px; height: 70px; object-fit: cover;">
                                </td>
                                <td style="vertical-align: middle;">
                                    <a href="/produk/{{ $product->id }}/edit"
                                        class="badge bg-warning text-dark"><i class="fas fa-edit"></i></a>
                                    <form action="/produk/{{ $product->id }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="badge bg-danger border-0"
                                            onclick="return confirm('Yakin ingin hapus produk?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
