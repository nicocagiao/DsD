<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Matinal</title>
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


<div class="container mt-3">


	
<section class="row">
			<div class="col-lg-6 col-md-8 col-sm-12">
				<div class="row">


<article class="col-12 notas sombra">
                    
                    <a href="noticia.php?id=<?php echo $notaportada['titulo'] ?>">
            
            <img src="<?php echo $notaportada['foto']; ?>" alt="">
            <h2><?php echo $notaportada["titulo"]; ?></h2>
            <div class="cintillo"><?php echo $notaportada["cintillo"] ?></div>
        </a>      
          <p><?php echo $notaportada["bajada"];?></p>
                    <hr>
 </article> 



				<article class="col-6 notas sombra">

          <a href="noticia.php?id=<?php echo $notaportada['titulo'] ?>">
            
            <img src="<?php echo $notaportada['foto']; ?>" alt="">
            <h2><?php echo $notaportada["titulo"]; ?></h2>
            <div class="cintillo"><?php echo $notaportada["cintillo"] ?></div>
        </a>      
          <p><?php echo $notaportada["bajada"];?></p>
                    <hr>
				</article>

				<article class="col-6 notas sombra">
					
					<a href=""><img src="http://www.diariosobrediarios.com.ar/dsd/uploads/articulos/grandes/47294_dujovne.jpg" alt=""><h4>Diarios atentos a un “Peso Real”</h4>
          <div class="cintillo">Política</div></a>
					<p></p>
					<hr>
				</article>

				<article class="col-6 notas sombra">
					
					<a href=""><img src="http://www.diariosobrediarios.com.ar/dsd/uploads/articulos/grandes/47296_fernandez.jpg" alt=""><h4>Sergio Massa y Alberto Fernández, en la mira</h4>
            <div class="cintillo">#Elecciones2019</div></a>
					<p></p>
					<hr>
				</article>

				<article class="col-6 notas sombra">
					
					<a href=""><img src="http://www.diariosobrediarios.com.ar/dsd/uploads/articulos/grandes/47295_cristina.jpg" alt=""><h4>Alta visibilidad para otro procesamiento contra CFK</h4>
            <div class="cintillo">#Elecciones2019</div></a>
					<p></p>
					<hr>
				</article>
				</div>
			</div>


                              <!--SEGUNDA COLUMNA -->

			<div class="col-lg-3 col-md-4">
				<section class="row">
					<article class="col-12 notas sombra">
						
						<a href=""><img src="http://www.diariosobrediarios.com.ar/dsd/uploads/articulos/grandes/47292_messi.jpg" alt=""><h2>Copas y “estafas”</h2><div class="cintillo">Portadas</div></a>
					<p></p>
					<hr>
					</article>
					
					<aside class="row">
          <h2 class="col-12 text-center">Hemeroteca</h2>
          <span class="col-12 text-center">Consultá agendas pasadas<hr></span>
          
        <section class="hemeroteca col-12">
                           <div class="d-flex justify-content-center" id="datepicker"></div>

          <hr>
          <div class="d-none d-md-block"><img src="http://www.diariosobrediarios.com.ar/dsd/banners/238_app-dsd1.gif" alt=""></div>
          <hr>
        </section>

        
        </aside>
				</section>
			</div>



 <!--TERCERA COLUMNA CON BANNERS -->

<?php INCLUDE ("banners.php") ?>
</section>

 <!--FOOTER -->

 <?php 
INCLUDE ("footer.php");
  ?>


</body>
</html>
