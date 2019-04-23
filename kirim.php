<?php
//terima data input dari user
$nama=$_POST['nama'];
$email=$_POST['email'];
$pesan=$_POST['pesan'];
 
//konfigurasi kiriman
$to="nandarsunandar27@gmail.com";
$subjek="Kontak dari Form";
$from="From: $nama &lt;$email&gt;";
 
//kirimkan ke email admin
@ mail($to, $subjek, $pesan, $from);
echo "Pesan berhasil terikirim.";
 
?>