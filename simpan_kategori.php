</?php
     include "koneksi.php";
     $nama_kategori=$_POST ["nama_kategori"];
     $query=mysql_query($koneksi,"insert into kategori valeus (null, "$nama_kategori")");
     header("location:data_kategori.php");