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
for ($i=0; $i < $bintang ; $i++) { 
    echo    "<b>*</b>";
}
echo "<br>";
echo"Total Bintang : $bintang";
   }

?>
