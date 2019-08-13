<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Contacto</title>
   <?php INCLUDE ("formato.php"); ?>
</head>

<body>
  
                              <!--NAVBAR SUPERIOR CON SOCIAL -->


<?php INCLUDE ("encabezado.php"); ?>

  
                                <!--PRIMERA COLUMNA -->


<div class="container mt-3">
	
<section class="row">

			<div class="col-lg-9 col-sm-12">

				<div class="contacto">
                      <h1 class="font-weight-bold">Contactá al DsD</h1>
      <form class="needs-validation" id="formcontacto">
  <div class="form-row">
    <div class="col-md-4">
      <label for="validationTooltip01"></label>
      <input type="text" class="form-control" id="validationTooltip01" placeholder="Nombre" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="col-md-4">
      <label for="validationTooltip02"></label>
      <input type="text" class="form-control" id="validationTooltip02" placeholder="Apellido" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
    <div class="form-group col-md-4">
    <label for="exampleInputEmail1"></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
    
  </div>
  <div class="col-12">
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ingresá tu mensaje"></textarea>
  </div>
  </div>
  
  <button class="btn btn-primary mt-3" type="submit">Enviar</button>

  <div class="" style="">
    <a class="curioso"><i class="fas fa-question-circle fa-2x"></i></a>
    <p class="mostrarcodigo" style="display:none">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, accusamus aliquam voluptatem mollitia ipsam nam quaerat ad culpa. Nostrum, doloremque provident deleniti dicta numquam debitis, fuga distinctio? Corrupti, unde, a!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam fugiat illum accusamus earum veniam eum veritatis architecto quibusdam, voluptatum, necessitatibus dolorum. Fugiat quam eius beatae omnis magnam nemo ipsa totam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem itaque placeat in. Assumenda cupiditate eum, dicta necessitatibus ex inventore similique maiores impedit id sequi, a ut quibusdam, excepturi nostrum ratione.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut non, in eius molestias dolorum harum eveniet dignissimos mollitia, asperiores, aliquam voluptatum laboriosam ipsum consequuntur nihil cumque rem dolor dolore, autem.</p>
  </div>
</form>    


        </div>
			</div>


                            <!-- COLUMNA CON BANNERS -->

			<?php INCLUDE ("banners.php"); ?>
		</section>

            

                            <!--FOOTER -->

<?php INCLUDE ("footer.php"); ?>

                              <!--JavaScripts -->

  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

<!-- CODIGO DEL REVEAL EN HOVER -->
  <script>
    $(document).ready(function(){

      $(".curioso").hover(function(){
        $(".mostrarcodigo").slideToggle();
      });


    });
  </script>

<!-- SCRIPT PARA EL ENVIO DEL MAIL -->


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

      console.log(datos);

      $.ajax({
        //metodo de envio
        "method":"POST",
        //valores a enviar
        "data":datos,
        //url del archivo que recibe
        "url":"enviarDatos.php",
      //devolucion de los datos
      }).done(function(respuesta){
        $("#mensaje").html("<p>"+respuesta+"</p>");
        //$(".divSuccess").show();
      });
    });
  }
  //ejecutar enviarDatos()
  enviarDatos();
});

</script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->

  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>

 									

 									<!--BOOTSTRAP -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" integrity="sha256-DHF4zGyjT7GOMPBwpeehwoey18z8uiz98G4PRu2lV0A=" crossorigin="anonymous"></script>



<script>
    $('.tapasslider').slick({
  dots: true,
  arrows: true,
  infinite: false,
  speed: 300,
  slidesToShow: 6,
  slidesToScroll: 6,


  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 5,
        infinite: true,
        dots: true,
        adaptiveHeight: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        adaptiveHeight: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  </script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  

  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
  </script>



</body>

</html>

