<html>
<head><title>TugasFORM</title></head>
<body>
<FORM ACTION="tugasproses.php" METHOD="POST" NAME="Input">
<h1><center>TUGAS</center></h1>
<table>
<tr>
<td>Nama</td>     <td><input type="text" name="nama"><br></td>
</tr>
<tr><td>NIS </td> <td><input type="number" name="nis"></tr></td><br>
<tr><td>Alamat </td> <td>  <textarea name ="alamat" cols="40" rows="5" checked></textarea></tr></td><br>
<tr><td>Jenis Kelamin </td>  <td> <input type ="radio" name="jk" value="laki-laki" checked>Laki-Laki
<input type ="radio" name="jk" value"perempuan">Perempuan<br></td></tr>
<tr><td>Agama </td>
<td><select name="agama">
<option value="Islam">Islam</option>
<option value="Konghucu">Konghucu</option>
<option value="Budha">Budha</option>
<option value="Kristen">Kristen</option>
</select><br></tr></td>
<br>
<tr><td>Asal Sekolah </td>  <td> <input type="text" name="asal"><br></tr></td>
<tr><td>Orangtua/Wali </td> <td> <input type="text" name="ortu"><br></tr></td>
<tr><td>Mata Pelajaran Yang Disukai </td>
<td><input type="checkbox" name="a" value="mtk"
checked> Matematika
<input type="checkbox" name="b" value="ipa"> Ilmu Pengetahuan Alam
<input type="checkbox" name="c" value="ips"> Ilmu Pengetahuan Sosial
<input type="checkbox" name="d" value="pai"> Pendidikan Agama Islam
<input type="checkbox" name="e" value="bi"> Bahasa Indonesia<br>
<tr><td>Total Nilai Ijazah SMK </td> <td> <input type="number" name="no"><br></tr></td> 
<tr><td>Email </td> <td> <input type="email" name="em"><br></tr></td>
<tr><td> <input type="submit" name="Input" value="Simpan"></tr></td>

</table>
</FORM>
</body>
</html>