<?php
	if (isset($_POST['submit2'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$hobi = $_POST['hobi'];
		$gambar = $_POST['gambar'];
	}
	
?>
<form action="" method="POST">
	Nama : <input type="text" name="nama[]"><br>
	NIM : <input type="text" name="nim[]"><br>
	Gambar : <input type="file" name="gambar[]"><br>
	Hobi : 
		<input type="checkbox" name="hobi[]" value="Futsal">Futsal
		<input type="checkbox" name="hobi[]" value="Basket">Basket
		<input type="checkbox" name="hobi[]" value="Tidur">Tidur
		<input type="checkbox" name="hobi[]" value="Salto">Salto<br>
	<input type="submit" name="submit2" value="Submit">
	<img src="">
</form>
<?php
	if (isset($_POST['submit2'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$hobi = $_POST['hobi'];
		$gambar = $_POST['gambar'];

		for ($i=0; $i < count($nama); $i++) { 
			echo $nama[$i].'<br>';
			echo $nim[$i].'<br>';
			for ($j=0; $j < count($hobi); $j++) { 
				echo $hobi[$j];
				if ($j < count($hobi)-1) {
						echo ", ";
					}
			}
			
			echo '<br><img src="'.$gambar[$i].'" width ="300px"><br>';
		}
	}
	
?>
