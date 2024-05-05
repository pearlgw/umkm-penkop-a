![image](https://github.com/pearlgw/umkm-penkop-a/assets/145454245/915ea3be-d956-4a8b-9f50-82b6ee2bf786)teknologi yang di gunakan:
1. framework laravel(php)
2. xampp
3. composer
<br>
deskripsi dari website ini adalah belum publish dan berbentuk local membuka websitenya.
<br>
fitur yang ada:
1. search product
2. ada halaman admin yang berhak dan bertujuan untuk menginput data produk (jadi produknya dinamis). data produk masuk ke database

cara mengimplementasikan web ini:

buka xampp, klik start pada apache dan mysql <br>
![image](https://github.com/pearlgw/umkm-penkop-a/assets/145454245/d7264c8a-5495-47f9-ae5b-0180eb571bf6)

download codingan ini melalui button code, lalu pilih donwnload zim
![image](https://github.com/pearlgw/umkm-penkop-a/assets/145454245/a6ca1a30-2b6c-4a78-a195-c76d170f8061)

langkah berikutnya:
1. buka folder zip tadi di visual studio code
2. buka terminal (ctrl + `)
3. tuliskan perintah "cp .env.example .env"
4. kemudian tulsikan perintah "composer install"
5. berikutnya "php artisan key:generate"
6. "php artisan migrate" lalu ada pilih yes or no, pilih yes
7. "php artisan db:seed"
8. "php artisan storage:link"
9. kemudian cari folder dengan cara (ctrl + p) ketikan folder "filesystem" kemudian di buka, dan cari tulisan "FILESYSTEM_DISK" di copy, lalu di paste kan di file .env yang tadi. paste di bawah sendiri kemudian di tambahkan "=public". jadinya seperti ini
![image](https://github.com/pearlgw/umkm-penkop-a/assets/145454245/db5778fa-0a43-44b3-ac08-6a6fe717de3e)
10. jika sudah, terakhir jalankan perintah "php artisan serve"
