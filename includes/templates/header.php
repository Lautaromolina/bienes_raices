<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Bienes Raices</title>
		<link rel="stylesheet" href="/proyecto/bienesraices/build/css/app.css" />
	</head>
	<body>
		<header class="header <?php echo $inicio ? 'inicio' : '';?>">
			<div class="contenedor contenido-header">
				<div class="barra">
					<a href="/proyecto/bienesraices/index.php">
						<img src="/proyecto/bienesraices/build/img/logo.svg" alt="Logotipo de BienesRaices" />
					</a>
					<div class="mobile-menu">
						<img src="/proyecto/bienesraices/build/img/barras.svg" alt="icono menu responsive" />
					</div>
					<div class="derecha">
						<img src="/proyecto/bienesraices/build/img/dark-mode.svg" alt="luna dark mode" class="dark-mode-boton" />
						<nav class="navegacion">
							<a href="nosotros.php">Nosotros</a>
							<a href="anuncios.php">Anuncios</a>
							<a href="blog.php">Blog</a>
							<a href="contacto.php">Contacto</a>
						</nav>
					</div>
				</div>
				<!--Cierre barra.-->
    <?php if($inicio) { ?>
				<h1>Venta de Casas y departamentos Exclusivos de lujo</h1>
    <?php } ?>
			</div>
		</header>