<?php
	require 'includes/funciones.php';
	incluirTemplate('header');
?>
		<main class="contenedor seccion contenido-centrado">
			<h1>Casa en Venta frente al bosque</h1>
			<picture>
				<source srcset="build/img/destacada.webp" type="image/webp" />
				<source srcset="build/img/destacada.jpg" type="image/jpeg" />
				<img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad" />
			</picture>
			<div class="resumen-propiedad">
				<p class="precio">$3,000,000</p>
				<ul class="iconos-caracteristicas">
					<li>
						<img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy" />
						<p>3</p>
					</li>
					<li>
						<img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" loading="lazy" />
						<p>3</p>
					</li>
					<li>
						<img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones" loading="lazy" />
						<p>4</p>
					</li>
				</ul>
				<p>
					Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora maxime libero veritatis quod porro quaerat est dolorem, odit quisquam
					aliquam vitae, rerum sapiente esse nisi quos at animi! Perspiciatis, qui? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quia
					vel numquam distinctio exercitationem eaque? Quia vitae, iure molestias unde tempore hic quibusdam debitis nesciunt, praesentium sunt
					voluptatem recusandae reiciendis.
				</p>
				<p>
					Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam accusantium quas, placeat nisi ipsa odio nam voluptatem asperiores
					pariatur, vero voluptate at possimus enim quisquam fuga veritatis tempore sapiente itaque.
				</p>
			</div>
		</main>
<?php
	incluirTemplate('footer');
?>
