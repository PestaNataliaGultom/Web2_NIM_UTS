<?php
    include "koneksi.php";
<!doctype html>
<html lang="en">
  <head>
    <!-- Requrired meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<!--navbar-->
<nav class="navbar navbar-expand-lg bg-bodylight">
    <div class =container>
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Perpustakaan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Data Master
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="data_buku.php">Judul Buku</a></li>
            <li><a class="dropdown-item" href="data_penulis.php">Penulis</a></li>
            <li><a class="dropdown-item" href="data_penerbit.php">Tahun Terbit</a></li>
            <li><a class="dropdown-item" href="data_ReferenceBook.php">ReferenceBook</a></li>
            <li><a class="dropdown-item" href="data_peminjaman.php">Status Peminjaman</a></li>
          </div>
        </li>
        <li class="nav-item dropdown"> 
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
          role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Transaksi
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="pencarian.php">Pencarian Buku</a></li>
            <li><a class="dropdown-item" href="menambahkan.php">Menambahkan Buku </a></li>
            <li><a class="dropdown-item" href="meminjam.php">Meminjam Buku</a></li>
            <li><a class="dropdown-item" href="urutan.php">Pengurutan Buku</a></li>
            <li><a class="dropdown-item" href="mengembalikan.php">Mengembalikan Buku</a></li>
            <li><a class="dropdown-item" href="mencetak.php">Mencetak Daftar Buku Yang Tersedia</a></li>
            <li><a class="dropdown-item" href="Batas.php">Batas Peminjaman Buku</a></li>
            <li><a class="dropdown-item" href="Batas.php">Denda Keterlambatan Pengembalian Buku</a></li>
            <li><a class="dropdown-item" href="menghapus.php">Penghapusan Buku</a></li>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data_admin.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
       </ul>
     </div>
 </div>
</nav>
<!--akhir navbar-->
