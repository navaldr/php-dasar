<!DOCTYPE html>
<html>
<head>
	<title>Program PHP: Menentukan Bilangan Positif, Negatif atau Nol</title>
</head>
<body>
	<h1>Program PHP: Menentukan Bilangan Positif, Negatif atau Nol</h1>
	<form method="post" action="">
		Masukkan sebuah bilangan: <input type="number" name="bilangan" required><br><br>
		<input type="submit" name="submit" value="Check">
	</form>

	<?php
	if(isset($_POST['submit'])){
		$bilangan = $_POST['bilangan'];

		if($bilangan > 0){
			echo "Bilangan $bilangan adalah bilangan positif.";
		} elseif($bilangan < 0){
			echo "Bilangan $bilangan adalah bilangan negatif.";
		} else {
			echo "Bilangan yang dimasukkan adalah nol.";
		}
	}
	?>
</body>
</html>
