# Quiz 3 

## 0. Setup (5 poin)
Repositori ini dibangun dengan Laravel versi 6.02 ke atas. Setelah melakukan fork dan clone dari repositori ini, lakukanlah langkah-langkah di bawah ini untuk menjalankan project. 

* masuk ke direktori quiz-3-im-laravel-juli-2020
```bash
$ cd quiz-3-im-laravel-juli-2020
```
* jalankan perintah composer install untuk mendownload direktori vendor
```bash
$ composer install
```
* buat file .env lalu isi file tersebut dengan seluruh isi dari file .env.example (copy isi dari .env.example lalu paste di file .env)

* jalankan perintah php artisan key generate
```bash
$ php artisan key:generate
```
* Tambahan: Untuk pengerjaan di laptop/PC masing-masing, sesuaikan nama database, username dan password nya di file .env dengan database kalian. 

Setelah itu kalian sudah bisa lanjut mengerjakan soal berikutnya. jangan lupa untuk menjalankan server laravel
```bash
$ php artisan serve
```
## 1. Membuat ERD (20 poin)
Sebuah perusahaan ingin dibuatkan sebuah web dasbor untuk manajemen proyek. Pengguna dari aplikasi web ini adalah karyawan-karyawan di perusahaan tersebut. Aplikasi ini digunakan untuk dokumentasi proyek-proyek yang sedang dikerjakan oleh perusahaan tersebut. Misalnya, dalam satu proyek terdapat satu manager dan banyak staf. di dalam proyek tersebut terdapat data di antaranya : nama proyek, deskripsi proyek, dan tanggal deadline proyek tersebut.  

berikut deskripsi singkat mengenai requirement web tersebut: 
* tabel karyawan terdapat data : nama (varchar), jabatan (varchar).
* 1 karyawan hanya memiliki 1 jabatan yaitu staff atau manager. 1 karyawan dengan jabatan staff dapat memiliki 1 manager sebagai atasan, 1 manager dapat membawahi banyak staff. (5 poin)
* tabel proyek terdapat data : nama proyek(varchar), deskripsi proyek(varchar), tanggal_mulai(date), tanggal_deadline(date), status(boolean default false) (5 poin)
* 1 proyek memiliki 1 manager. 1 manager hanya bisa ditempatkan di satu proyek saja. (5 poin)
* 1 proyek memiliki banyak staff. 1 staff dapat ditempatkan di banyak proyek (5 poin)

Buatlah ERD untuk keperluan web dasbor tersebut lalu export ke dalam format gambar (PNG). Kamu bisa gunakan mysql workbench atau aplikasi online https://app.diagrams.net/. 

Simpan file PNG tersebut di dalam folder images dan simpan folder images tersebut di folder public di project  ini.

## 2. Membuat Migrations (15 poin)
Buatlah Migration yang diimplementasi dari ERD yang dibuat di soal sebelumnya. 


## 3. Membuat Controller (10 poin)
Buatlah controller untuk mengatur fitur CRUD proyek. 

Catatan: untuk pengisian data karyawan dapat dilakukan input manual saja ke database (tidak usah membuat CRUD karyawan).


## 4. Memasangkan Template & Routing(25 poin)
* Pada project ini kamu diminta untuk memasangkan template dari SB-Admin-2 https://startbootstrap.com/themes/sb-admin-2/. Kami sudah memasangkan asset-asset yang sudah didownload dari halaman SB-Admin-2 di folder public. Tugas kamu adalah memperbaiki template master blade yang terdapat di folder resources/views/layouts/master.blade.php dan hubungkan dengan asset-asset yang diperlukan.  (5 poin)
* Web memiliki route sebagai berikut: (15 poin)

| url                         | method | keterangan      |
|----------                   | -------- | -------------- |
| ```'/'```                   |```GET```| menampilkan gambar PNG/JPG/JPEG desain ERD yang sudah dibuat di soal no. 1  |
| ```'/proyek' ```        | ```GET``` | menampilkan tabel berisi data proyek-proyek |
| ```'/proyek/create'```  | ```GET``` | menampilkan form untuk membuat data proyek baru, di dalam form tersebut terdapat input pengisian data-data proyek dan penunjukkan manager  |
| ```'/proyek'``` | ```POST``` | menyimpan proyek baru 
| ```'/proyek/{id}/daftarkan-staff'``` | ```GET``` | menampilkan halaman form untuk mendaftarkan staff baru dari data karyawan
| ```'/proyek/{id}/daftarkan-staff'``` | ```POST``` | menyimpan data proyek yang sudah ditambahkan dengan staff-staff baru di halaman form daftarkan-staff
| ```'/proyek/{id}/edit'``` | ```GET``` | menampilkan form untuk edit data-data proyek
| ```'/proyek/{id}'``` | ```PUT``` | menyimpan data proyek yang sudah diedit melalui form edit proyek
| ```'/proyek/{id}'``` | ```DELETE``` | menghapus data dengan id tertentu

- pasangkanlah script berikut ini ke HANYA ke halaman blade untuk menampilkan data pada tabel proyek (pada url ```'/proyek'```). (5 poin)
Keterangan : ```Swal``` merupakan function dari file swal.min.js yang terdapat di folder public/sbadmin2/swal.min.js 
```html
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
```
- Jika pemasangan script pada poin sebelumnya berhasil maka akan menampilkan alert seperti ini di halaman courses tersebut:

![swal-example.gif](swal-example.gif?raw=true)

## 5. Alur CRUD (15 poin)
Pastikan alur CRUD proyek berjalan seperti alur CRUD biasanya. Gambarannya adalah seperti berikut:
* halaman index proyek (```'/proyek'```) menampilkan tabel kumpulan proyek lengkap beserta tombol-tombol actionnya. terdapat pula tombol menuju form pembuatan proyek.
* halaman create proyek menampilkan form untuk membuat proyek baru, sesudah submit lalu halaman kembali ke index proyek.
* halaman show untuk menampilkan detail proyek
* halaman edit untuk menampilkan form edit proyek, sesudah submit update lalu kembali ke index proyek 
* dan seterusnya. 

## 6. Mencari Proyek dari Karyawan tertentu (10 poin)
Buatlah sebuah route dengan alamat url ```'/karyawan'```. Di dalam route tersebut, tampilkanlah data seluruh karyawan dalam sebuah tabel. data yang disajikan di tabel yaitu nama karyawan, jabatan, dan button link yang mengarahkan ke route ```'/karyawan/{id_karyawan}/daftar-proyek'``` yang menampilkan data list proyek dimana saja karyawan tersebut terdaftar sebagai staff atau manager. (Cukup tampilkan list nama proyek dengan elemen ```<ul><li>```) .




