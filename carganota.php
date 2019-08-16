<div class="container">
			<header>
				<h1>Nueva nota</h1>
			</header>
			 
			<div>	
				<form action="enviarnota.php" method="POST">

	
					<div>
					<label for="">Titulo<input type="text" name="titulo" class="form-control">
					</label>
					</div>


					<div class="form-group">
					<label for="">
						Bajada
						<input type="text" name="bajada" class="form-control">
					</label>
					</div>



					<div class="form-group">
    <label for="exampleFormControlTextarea1">Contenido nota</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="contenido"></textarea>
  </div>


					<div class="form-group">
    <label for="exampleFormControlSelect1">Seccion</label>
    <select class="form-control" id="exampleFormControlSelect1" name="seccion">
      <option>Matinal</option>
      <option>Ahora</option>
      <option>Zona Dura</option>
      <option>Medios</option>
      <option>Publicaciones</option>
    </select>
  </div>


					<div class="form-group">
					<label for="">
						Cintillo
						<input type="text" name="cintillo">
					</label>
					</div>



					<div class="form-group">
    <label for="exampleFormControlSelect1">Orden</label>
    <select class="form-control" id="exampleFormControlSelect1" name="orden">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
    </select>

<div class="form-group">
	<label for="">
						Foto
		<input type="text" name="foto">
</label>
</div>



  </div>
					<input type="submit" value="Cargar Nota">
				</form>	
<div id="mensaje"></div>
			</div>

<script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>


			<script>

$(document).ready(function(){
  //armar funcion para el envio - enviarDatos()
  function enviarDatos(){
    $("form").on("submit",function(event){
      //desactivamos el evento por default (submit)
      event.preventDefault();
//guardamos en una variable los datos a enviar
      var datos=$("form").serialize();
//Una vez analizado el formulario, serialize() procede a crear una cadena de texto en la notación URL-encoded; es decir, codifica la cadena de texto para que pueda ser procesada fácilmente desde un lenguaje del lado del servidor como si se tratase de un GET pero sin la necesidad de cargar la página para obtener estos valores.

      $.ajax({
        //metodo de envio
        "method":"POST",
        //valores a enviar
        "data":datos,
        //url del archivo que recibe
        "url":"enviarnota.php",
      //devolucion de los datos
      }).done(function(respuesta){
        $("#mensaje").html(respuesta);
        //$(".divSuccess").show();
        
      });
    });
  }
  //ejecutar enviarDatos()
  enviarDatos();
});

</script>