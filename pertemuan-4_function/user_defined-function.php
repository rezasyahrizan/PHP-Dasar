<?php 

// User_defined Function (fungsi yang dibuat sendiri)

function sapa($waktu ="Siang", $nama ="Admin") {

	return "Selamat $waktu, $nama!";
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Function</title>
</head>
<body>

	<h1><?= sapa("Siang"); ?></h1>

</body>
</html>