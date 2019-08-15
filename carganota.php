<div id="contenedor">
			<header>
				<h1>Nueva nota</h1>
			</header>
			 
			<div class="cajas">	
				<form action="enviarnota.php" method="POST">


					<div class="form-group">
					<label for="">
						Titulo
						<input type="text" name="titulo">
					</label>
					</div>


					<div class="form-group">
					<label for="">
						Bajada
						<input type="text" name="bajada">
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

			</div>