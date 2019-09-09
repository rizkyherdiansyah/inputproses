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
for ($i=1; $i < $bintang ; $i++) { 
    for ($s=1; $s < $i; $s++){
        echo    "<b>*</b>";    
    }
    echo    "<br>";
}
echo "<br>";
echo"Total Bintang : $bintang";
   }

?>