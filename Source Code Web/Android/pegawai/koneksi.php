<?php
 /*
 penulis: Muhammad yusuf
 website: http://www.kodingindonesia.com/

 Nama Database yang telah dibuat bernama "db_android"
 Jika database yang kalian buat tidak sama dengan yang dibuat oleh penulis maka ganti nama database
 sesuai dengan nama database yang kalian buat
 */

 //Mendefinisikan Konstanta
 define('HOST','localhost');
 define('USER','root');
 define('PASS','root');
 define('DB','db_android');

 //membuat koneksi dengan database
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
 ?>
