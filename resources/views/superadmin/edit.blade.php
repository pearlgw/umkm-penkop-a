@extends('layouts.main')

@section('contents')
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Edit Produk</h1>
        </div>
        <form action="/produk/{{ $product->id }}" method="POST" style="width: 50%" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <input type="hidden" name="oldImage" value="{{ $product->image }}">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama"
                    value="{{ old('nama', $product->nama) }}" required>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror"
                    id="harga" value="{{ old('harga', $product->harga) }}" required>
                @error('harga')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                    id="deskripsi" value="{{ old('deskripsi', $product->deskripsi) }}" required>
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No Telepon</label>
                <input type="number" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror"
                    id="no_telp" value="{{ old('no_telp', $product->no_telp) }}" required>
                @error('no_telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Unggah Gambar</label>
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" width="200px"
                        class="img-preview img-fluid mb-3 d-block" style="border-radius: 20px;">
                @else
                    <img class="img-preview img-fluid mb-3" width="200px" style="border-radius: 20px;">
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit Produk</button>
        </form>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
