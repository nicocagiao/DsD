<?php 

$titulo=$_POST['titulo'];
$bajada=$_POST['bajada'];
$contenido=$_POST['contenido'];
$seccion=$_POST['seccion'];
$cintillo=$_POST['cintillo'];
$orden=$_POST['orden'];
$foto=$_POST['foto'];

//Conexion MySQL
include("conexion.php");

//Consulta
$dataQuery1="INSERT INTO notas VALUES(0,'$titulo','$bajada','$contenido','$seccion','$cintillo','$orden','$foto')";
$query1=mysqli_query($conexion,$dataQuery1) or die("<div class='alert alert-danger'>Error de consulta :( </div>");

/*if (mysqli_query(false)){
	echo "error";
}else{
	echo "Carga exitosa";
}*/
 ?>
