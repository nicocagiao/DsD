<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Medios</title>
</head>
<body>
	<?php 
INCLUDE ("encabezado.php");
 ?>

<?php 
          //conexion
          include('conexion.php');
          //consulta - select * from notas where id = (select max(id) from notas);
          $query_string="select * from notas WHERE seccion = 'Matinal'";
          $query1=mysqli_query($conexion,$query_string);
          echo mysqli_num_rows($query1); //1
          $notaportada=mysqli_fetch_array($query1);
          ?>


<div class="row">
	<div class="col-lg-8 col-md-10 col-sm-12">
		           
            <img src="<?php echo $notaportada['foto']; ?>" alt="">
            <h2><?php echo $notaportada["titulo"]; ?></h2>
            <div class="cintillo"><?php echo $notaportada["cintillo"] ?></div>
        </a>      
          <p><?php echo $notaportada["bajada"];?></p>
                    <hr>
          <p><?php echo $notaportada["contenido"]?></p>

	</div>
 <!--TERCERA COLUMNA CON BANNERS -->

<?php INCLUDE ("banners.php") ?>
</section>
</div>



 <!--FOOTER -->

 <?php 
INCLUDE ("footer.php");
  ?>
</body>
</html>