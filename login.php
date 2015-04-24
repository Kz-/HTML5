<?php
	$password = $_REQUEST['password'];
	
	if ($password == "3125"){
		echo "Bienvenido";
		header("refresh:2;url=index.php?menu=1");
	}
	else{
		echo "Vuelva a intentarlo";
		header("refresh:2;url=index.php");
	}

?>