
<?php
if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
$mapel1 = $_POST['mapel1'];
$mapel2 = $_POST['mapel2'];
$rata = ($mapel1+$mapel2)/2;
echo "Nama      : <b>$nama</b><br>";
echo "Mapel 1   : <b>$mapel1</b><br>";
echo "Mapel 2   : <b>$mapel2</b><br>";
echo "Rata-Rata : <b>$rata</b><br>";
echo"<pre";
echo "<hr>";
if ($rata > 75) {
echo "<h1> Status :   Lulus</h1>";
} else {
echo "<h1> Status :  Tidak Lulus</h1>";

        }
    }
    echo "</pre>";
?>