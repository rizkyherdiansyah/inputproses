<?php
if (isset($_POST['Input'])){
    $nama =$_POST['nama'];
    $nis =$_POST['nis'];
    $alamat =$_POST['alamat'];
    $jk =$_POST['jk'];
    $agama =$_POST['agama'];
    $asal=$_POST['asal'];
    $ortu =$_POST['ortu'];
    $no =$_POST['no'];
    $email =$_POST['em'];
    $total =$_POST['total'];

    echo "Nama : <b>$nama</b><br>";
    echo "NIS : <b>$nis</b><br>";
    echo "Alamat : <b>$alamat</b><br>";
    echo "Jenis Kelamin : <b>$jk</b><br>";
    echo "Agama : <b>$agama</b><br>";
    echo "Asal Sekolah : <b>$asal</b><br>";
    echo "Orangtua/Wali : <b>$ortu</b><br>";
    echo "Mata Pelajaran Yang Disukai : </b><br>";
    if (isset($_POST['a'])) {
        echo "+ " . $_POST['a'] . "<br>";
        }
        if (isset($_POST['b'])) {
        echo "+ " . $_POST['b'] . "<br>";
        }
        if (isset($_POST['c'])) {
        echo "+ " . $_POST['c'] . "<br>";
        }
        if (isset($_POST['d'])) {
        echo "+ " . $_POST['d'] . "<br>";
        }
        if (isset($_POST['e'])) {
        echo "+ " . $_POST['e'] . "<br>";
            }
         }

         echo "Email : <b>$email</b><br>";
         if($total > 23){
             echo "<h1>Selamat Anda Diterima Karena Nilai Anda : $total</h1>";
         }else{
             echo "<h1>Maaf Anda Tidak Diterima Karena Nilai Anda : $total</h1>";
         }
        
         
        


