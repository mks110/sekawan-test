# sekawan-test
 
PHP Version 8.1.6<br>
Framework : Laravel 10<br>
Database : MySQL<br>
<br>
<br>
PANDUAN PENGGUNAAN<br>
<br>
<br>
0. ENGGUNA HARUS LOGIN TERLEBIH DAHULU<br>
1. ADMIN MENGINPUT DATA PESANAN YANG ADA MENCAKUP DRIVER, KENDARAAN, DAN PEMESAN<br>
2. ADMIN MEMBERIKAN PERSETUJUANNYA KEPADA STAFF AKOMODASI DAN PETUGAS<br>
3. PETUGAS DAN STAFF AKOMODASI HARUS MENYETUJUI PESANAN YANG DIBUAT OLEH ADMIN<br>
4. JIKA SALAH SATU DIANTARA PETUGAS DAN STAFF AKOMODASI BELUM MENYETUJUI MAKA PESANAN TIDAK BISA TER-APPROVED<br>
5. JIKA PESANAN TELAH DISETUJUI OLEH STAFF AKOMODASI DAN PETUGAS MAKA ADMIN AKAN MEMASUKAN KE REKAP KENDARAAN<br>
6. REKAP KENDARAAN MERUPAKAN ACUAN BAHWA KENDARAAN TERSEBUT AKAN DIHITUNG BERAPA KALI PENGGUNAANNYA DAN AKAN DIMASUKAN KEDALAM CHART<br>
<br>
<br>
USERNAME, PASSWORD, DAN HAK AKSES<br>
<br>
admin 		   | admin 			| Admin<br>
staffakomodasi |staffakomodasi	| Staff Akomodasi<br>
petugas		   |petugas			|Petugas<br>
<br>
<br>
PANDUAN PENGGUNAAN PENGGUNAAN<br>
<br>
CLONE PROJECT YANG ADA DI GITHUB<br>
BUKA DENGAN CODE EDITOR<br>
KETIKAN PERINTAH<br>
UNTUK MENGINSTALL DEPENDENCIES YANG TERDAPAT PADA LARAVEL VERSI SEBELUMNYA<br>
<br>
```````````````````````````````````<br>
composer install<br>
```````````````````````````````````<br>
<br>
TUNGGU HINGGA SELESAI<br>
LALU KETIKAN PERINTAH<br>
<br>
```````````````````````````````````<br>
cp .env.example .env<br>
```````````````````````````````````<br>
<br>
<br>
EDIT FILE PADA FILE (.env) BAGIAN DATABASE, DISINI SAYA MENGGUNAKAN DATABASE MYSQL DENGAN NAMA = 'rentalkendaraan'<br>
<br>
LALU KETIKAN PERINTAH<br>
<br>
```````````````````````````````````<br>
php artisan key:generate<br>
```````````````````````````````````<br>
<br>
UNTUK MENGGENERATE KEY YANG TEDAPAT PADA FILE .env<br>
BUATLAH DATABASE DENGAN NAMA 'rentalkendaraan' TANPA PERLU MEMBUAT TABEL<br>
LALU GUNAKAN PERINTAH<br>
<br>
```````````````````````````````````<br>
php artisan migrate:fresh --seed"<br>
```````````````````````````````````<br>
<br>
UNTUK MEMIGRASI STRUKTUR DAN DATA TABEL PADA DATABASE<br>
DAN TERAKHIR GUNAKAN PERINTAH:<br>
<br>
```````````````````````````````````<br>
php artisan serve<br>
```````````````````````````````````<br>
<br>
UNTUK MENJALANKAN PERINTAH<br>
