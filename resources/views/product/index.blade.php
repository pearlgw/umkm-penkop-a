@extends('layouts.main')

@section('contents')
    <nav class="navbar navbar-expand-lg bg-warning-subtle fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">UMKMPenKopA’22</a>
            <button class="navbar-toggler bg-warning" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="display: flex; justify-content: center; align-items: center;"><i
                        class="fas fa-bars" style="font-size: 1.5rem;"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
                    </li>
                </ul>
                <form class="d-flex ms-3" role="search">
                    <input class="form-control me-2" type="search" id="searchInput" placeholder="Search"
                        aria-label="Search" onkeyup="searchProducts()">
                </form>
            </div>
        </div>
    </nav>

    <div class="hero" id="home" style="height: 100vh;">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="overlay"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                    </div>
                    <img src="{{ asset('image/1.jpeg') }}" class="d-block w-100" style="height: 100vh; object-fit: cover;">
                    <div class="carousel-caption d-none d-block">
                        <h1 class="font-weight-bold">Selamat Datang</h1>
                        <p class="font-weight-bold">Website Resmi UMKM Kelas Pendidikan Ekonomi A</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                    </div>
                    <img src="{{ asset('image/2.jpeg') }}" class="d-block w-100" style="height: 100vh; object-fit: cover;">
                    <div class="carousel-caption d-none d-block">
                        <h1 class="font-weight-bold">Selamat Datang</h1>
                        <p class="font-weight-bold">Website Resmi UMKM Kelas Pendidikan Ekonomi A</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                    </div>
                    <img src="{{ asset('image/3.jpeg') }}" class="d-block w-100" style="height: 100vh; object-fit: cover;">
                    <div class="carousel-caption d-none d-block">
                        <h1 class="font-weight-bold">Selamat Datang</h1>
                        <p class="font-weight-bold">Website Resmi UMKM Kelas Pendidikan Ekonomi A</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                    </div>
                    <img src="{{ asset('image/4.jpeg') }}" class="d-block w-100" style="height: 100vh; object-fit: cover;">
                    <div class="carousel-caption d-none d-block">
                        <h1 class="font-weight-bold">Selamat Datang</h1>
                        <p class="font-weight-bold">Website Resmi UMKM Kelas Pendidikan Ekonomi A</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="overlay"
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);">
                    </div>
                    <img src="{{ asset('image/5.jpeg') }}" class="d-block w-100" style="height: 100vh; object-fit: cover;">
                    <div class="carousel-caption d-none d-block">
                        <h1 class="font-weight-bold">Selamat Datang</h1>
                        <p class="font-weight-bold">Website Resmi UMKM Kelas Pendidikan Ekonomi A</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <h1 class="text-center" id="product" style="padding-top: 70px; color:black">Product</h1>
    <div class="container-fluid">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 my-3">
                    <div class="card border-0 bg-body-secondary">
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top"
                            alt="{{ $product->nama }}" style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->nama }}</h5>
                            <p class="card-text">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                            <p class="card-text">
                                @php
                                    $deskripsi = $product->deskripsi;
                                    $words = str_word_count($deskripsi, 1);
                                    $shortDescription = implode(' ', array_slice($words, 0, 10));
                                    echo $shortDescription;
                                    if (count($words) > 10) {
                                        echo '...';
                                    }
                                @endphp
                            </p>
                            <a href="https://wa.me/{{ $product->no_telp }}" class="btn btn-info"><i
                                    class="fas fa-envelope"></i> Pesan</a>
                            <a href="" class="btn btn-info show-product-popup"
                                data-product-id="{{ $product->id }}"><i class="fas fa-eye"></i> Show</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div id="product-popup" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Produk</h5>
                    <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
                    <img id="product-image" src="" alt="Product Image" style="max-width: 40%; height: auto;">
                    <h4 id="product-name" class="font-weight-bold text-dark"></h4>
                    <p id="product-price"></p>
                    <p id="product-description"></p>
                </div>
                <div class="modal-footer">
                    <a id="whatsapp-link" href="" class="btn btn-info"><i class="fab fa-whatsapp"></i> Pesan</a>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-center" id="about" style="padding-top: 70px; color:black">About</h1>
    <div class="container">
        <p class="text-justify">Pada tahun 2024, kami berinisiatif membangun website ini dengan tujuan utama untuk membantu
            meningkatkan penjualan produk-produk yang dihasilkan oleh para anggota UMKM kami. Kami menyadari bahwa di era
            digital saat ini, kehadiran platform online sangat penting untuk memperluas jangkauan pemasaran dan daya saing
            usaha.
            Melalui website ini, kami menyediakan sarana bagi para UMKM untuk mempromosikan dan menjual berbagai produk
            pendidikan ekonomi mereka secara online. Mulai dari buku-buku pelajaran ekonomi, alat peraga, perangkat lunak
            edukasi, hingga jasa konsultasi dan pelatihan di bidang ekonomi.
            Seluruh produk yang tersedia di website kami dihasilkan oleh UMKM-UMKM yang tergabung dalam komunitas kami. Kami
            berkomitmen untuk senantiasa mendukung dan membina mereka agar dapat terus berinovasi serta menghasilkan
            produk-produk berkualitas yang bermanfaat bagi dunia pendidikan ekonomi.</p>
    </div>

    <h1 class="text-center" id="contact" style="padding-top: 70px; color:black">Contact</h1>
    <div class="container text-center">
        <a href="https://wa.me/6285723783739" style="font-size: 2rem; color:black;"><i
                class="fab fa-whatsapp me-2"></i></a>
        <a href="https://www.instagram.com/natagw.cpp" style="font-size: 2rem; color:black;"><i
                class="fab fa-instagram ms-2"></i></a>
    </div>

    <footer style="padding-top: 70px;">
        <div class="text-center bg-body-secondary py-3" style="color:black">Copyright &copy; 2024 - UMKMPenKopA’22. All
            rights reserved.</div>
    </footer>

    <script>
        function searchProducts() {
            // Ambil nilai dari input pencarian
            var input = document.getElementById('searchInput');
            var filter = input.value.toUpperCase();

            // Ambil semua produk yang tersedia
            var products = document.getElementsByClassName('col-md-4');

            // Lakukan loop pada setiap produk
            for (var i = 0; i < products.length; i++) {
                var productName = products[i].getElementsByClassName('card-title')[0];
                if (productName.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    products[i].style.display = "";
                } else {
                    products[i].style.display = "none";
                }
            }
        }
    </script>

    <script>
        // Mengambil elemen tombol dan popup
        const showButtons = document.querySelectorAll('.show-product-popup');
        const productPopup = document.getElementById('product-popup');
        const productName = document.getElementById('product-name');
        const productPrice = document.getElementById('product-price');
        const productDescription = document.getElementById('product-description');
        const productImage = document.getElementById('product-image');
        const whatsappLink = document.getElementById('whatsapp-link');

        // Menambahkan event listener ke setiap tombol
        showButtons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah perilaku default dari link

                // Mengambil ID produk dari atribut data
                const productId = this.getAttribute('data-product-id');

                // Memuat konten dari URL controller show
                fetch(`/product/${productId}`)
                    .then(response => response.json())
                    .then(data => {
                        // Menampilkan data produk di popup
                        productName.textContent = data.nama;
                        productPrice.textContent = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(data.harga);
                        productDescription.textContent = data.deskripsi;
                        productImage.src = '{{ asset("storage/") }}/' + data.image; // Menampilkan gambar produk

                        // Mengatur link WhatsApp
                        const whatsappUrl = `https://wa.me/${data.no_telp}`;
                        whatsappLink.href = whatsappUrl;

                        // Menampilkan popup
                        productPopup.style.display = 'block';
                    })
                    .catch(error => console.error('Error:', error));
            });
        });

        // Menutup popup ketika tombol close diklik
        productPopup.querySelector('.close').addEventListener('click', function() {
            productPopup.style.display = 'none';
        });
    </script>
@endsection
