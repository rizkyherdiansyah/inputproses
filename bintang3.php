<html>
<head><title>BINTANG</title></head>
<body>
<FORM ACTION="" METHOD="POST" NAME="Input">
Masukan Bilangan : <input type="number" name="bintang"><br>
<br>

<input type="submit" name="Input" value="Simpan">
</FORM>
</body>
</html>

<?php
if (isset($_POST['Input'])) {
$bintang = $_POST['bintang'];
for ($i=0; $i <= $bintang ; $i++) { 
    for ($s=1; $s <= $bintang-$c; $s++){
        echo  "&nbsp;&nbsp";    
    }
    for ($c=1; $c <=$i ; $c++) { 
        echo "*&nbsp;&nbsp  ";
    }
    echo    "<br/>";
}
echo "<br>";
echo"Total Bintang : $bintang";
   }

?>
