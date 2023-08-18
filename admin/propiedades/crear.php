<?php
		//Base de datos


		require '../../includes/config/database.php';
		$db = conectarDB();

		//Arreglo con mensajes de errores

	$errores = [];

		//Ejecuta el codigo despues de que el usuario envia el formulario
		if($_SERVER['REQUEST_METHOD'] === 'POST') {
				

			$titulo = $_POST['titulo'];
			$precio = $_POST['precio'];
			$descripcion = $_POST['descripcion'];
			$habitaciones = $_POST['habitaciones'];
			$wc = $_POST['wc'];
			$estacionamiento = $_POST['estacionamiento'];
			$vendedorId = $_POST['vendedor'];

			if(!$titulo) {
				$errores[] = "Debes añadir un título";
			}

			if(!$precio) {
				$errores[] = "El precio es obligatorio";
			}
			
			if( strlen($descripcion) < 50 ) {
				$errores[] = "La descripcion es obligatorio y debe tener al menos 50 caracteres";
			}

			if(!$habitaciones) {
				$errores[] = "El numero de habitaciones es obligatorio";
			}
				if(!$wc) {
				$errores[] = "El numero de baños es obligatorio";
			}
				if(!$estacionamiento) {
				$errores[] = "El numero de estacionamiento es obligatorio";
			}
			if(!$vendedorId) {
				$errores[] = "Elige un vendedor";
			}
			// echo '<pre>';
			// var_dump($errores);
			// echo '</pre>';

			// exit;
			
			//Revisar que el array de errores este vacio;
			

			if(empty($errores)) {
			//insertar en la base de datos
			$query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedorId ) VALUES ( '$titulo', '$precio','$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId' )";

			//echo $query;

		$resultado = mysqli_query($db, $query);	
			
		if($resultado) {
			echo "Insertado correctamente";
		}

		}
			}
		
	
		
	require '../../includes/funciones.php';
	incluirTemplate('header');
?>
		<main class="contenedor seccion">
			<h1>Crear</h1>
			<a href="/proyecto/bienesraices/admin/index.php" class="boton boton-verde">Volver</a>

			<?php foreach($errores as $error):?>
				<div class="alerta error">
					<?php echo $error; ?>
				</div>
				<?php endforeach;?>
			<form class="formulario" method="post" action="/proyecto/bienesraices/admin/propiedades/crear.php">
				<fieldset>
					<legend>Informacion General</legend>

					<label for="titulo">Titulo:</label>
					<input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" />
				
					<label for="precio">Precio:</label>
					<input type="number" id="precio" name="precio" placeholder="Precio Propiedad" />
				
					<label for="imagen">Imagen:</label>
					<input type="file" id="imagen"accept="image/jpg, image/png" />

					<label for="descripcion">Descripcion:</label>
					<textarea id="descripcion" name="descripcion"></textarea>
				</fieldset>


				<fieldset>
					<legend for="habitaciones">Habitaciones</legend>
					<input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 2" min="1" max="9">

					<legend for="wc">Baños</legend>
					<input type="number" id="wc" name="wc" placeholder="Ej: 1" min="1" max="9">

					<legend for="estacionamiento">Estacionamiento</legend>
					<input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9">

					</fieldset>
					<fieldset>
							<legend>Vendedor</legend>

							<select name="vendedor">
								<option value="">--Seleccione--</option>
								<option value="1">Lautaro</option>
								<option value="2">Karen</option>
							</select>

					</fieldset>	


					<input type="submit"  value="Crear Propiedad" class=" boton boton-verde"  />
			</form>
		</main>
<?php
	incluirTemplate('footer');
?>