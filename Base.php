<?php

	$link = mysql_connect("localhost:8080","root","chocolatemau11") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("base",$link) or die("<h2>Error de Conexion</h2>");


	$Usuario = $_POST['Usuario'];
	$Nombre = $_POST['Nombre'];
	$Edad = $_POST['Edad'];
	$Nacicion = $_POST['Nacicion'];
	$Celular = $_POST['Celular'];
	$Contraseña = $_POST['Contraseña'];


	$req = (strlen($Usuario)*strlen($Nombre)*strlen($Edad)*strlen($Nacicion)*strlen($Celular)*strlen($Contraseña)) or die("No se han llenado todos los campos");

	mysql_query("INSERT INTO datos VALUES('','$Usuario','$Nombre','$Edad','$Nacicion','$Celular','$Contraseña')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="resgistracion.html";
		</script>
	'


?>