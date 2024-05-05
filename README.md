teknologi yang di gunakan:
1. framework laravel(php)
2. xampp
3. composer

<br>deskripsi dari website ini adalah belum publish dan berbentuk local membuka websitenya. <br>
fitur yang ada:
1. search product
2. ada halaman admin yang berhak dan bertujuan untuk menginput data produk (jadi produknya dinamis). data produk masuk ke database. fitur dari admin ini adalah bisa membuat, mengedit, menghapus produk
3. show detail product
4. ketika memesan mengarah ke whatsapp yang telah di daftarkan oleh admin.

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
<br>
result halaman lokal pada halaman utama
![image](https://github.com/pearlgw/umkm-penkop-a/assets/145454245/99151d02-8abb-46c1-b2c0-d685e5cad5ee)

result halaman lokal pada halaman produk
![image](https://github.com/pearlgw/umkm-penkop-a/assets/145454245/2dbb465c-e1ae-411b-913b-0a618c63931b)

![image](https://github.com/pearlgw/umkm-penkop-a/assets/145454245/aaa0e961-7c71-4789-9e07-c6fa6ee19518)

result halaman lokal pada about dan contact
![image](https://github.com/pearlgw/umkm-penkop-a/assets/145454245/92c07f2b-e742-40e4-8331-22d32591c849)

result halaman lokal pada our teams
![image](https://github.com/pearlgw/umkm-penkop-a/assets/145454245/3a0b7000-d952-45d5-bcd8-5867e7b7f709)

halaman admin ketika ingin mendaftarkan produk <br>
halaman login admin
![image](https://github.com/pearlgw/umkm-penkop-a/assets/145454245/c2dfcff0-3f3d-4bd6-9bef-0dc371d5de0d)

halaman dashboard admin
![image](https://github.com/pearlgw/umkm-penkop-a/assets/145454245/52c18670-0516-4023-9eee-22bfd8e86c45)

halaman insert barang
![image](https://github.com/pearlgw/umkm-penkop-a/assets/145454245/aab686c8-acc4-4bc8-adcb-68c44b20834d)

halaman update barang
![image](https://github.com/pearlgw/umkm-penkop-a/assets/145454245/af5d0eea-af8d-4428-beec-6dabbac4110c)

aksi ketika menghapus produk, jika klik pada icon sampah maka akan muncul pop up yang menanyakan apakah yakin untuk di hapus?
![image](https://github.com/pearlgw/umkm-penkop-a/assets/145454245/fbc0bc2a-04ed-4eb0-b074-5ea5bfda8660)



