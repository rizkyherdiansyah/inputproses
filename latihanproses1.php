
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
echo "<hr>";
if ($rata > 75) {
echo "<h1>Lulus</h1>";
} else {
echo "<h1>Tidak Lulus</h1>";

        }
    }
?>