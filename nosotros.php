<?php
	require 'includes/funciones.php';
	incluirTemplate('header');
?>
		<main class="contenedor seccion">
			<h1>Conoce sobre Nosotros</h1>
			<div class="contenido-nosotros">
				<div class="imagen">
					<picture>
						<source srcset="build/img/nosotros.webp" type="image/webp" />
						<source srcset="build/img/nosotros.jpg" type="image/jpeg" />
						<img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros" />
					</picture>
				</div>
				<div class="texto-nosotros">
					<blockquote>25 Años de experiencia</blockquote>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum sed quisquam vero, accusamus sequi illo nemo, ut nulla magnam similique quis
						officia tempora possimus commodi, quas nisi tenetur quam eos!Lorem Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto eius
						optio sequi asperiores beatae, nesciunt modi commodi enim provident impedit at reprehenderit dolore sed illum quidem aut accusantium
						labore minus!
					</p>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium sint iusto sapiente magnam laboriosam dolorum unde minus impedit cum!
						Itaque est odio quasi a eveniet ipsa, nihil aut possimus obcaecati.
					</p>
				</div>
			</div>
		</main>

		<section class="contenedor seccion">
			<h1>Mas sobre Nosotros</h1>
			<div class="iconos-nosotros">
				<div class="icono">
					<img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy" />
					<h3>Seguridad</h3>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores dolore aperiam nihil ex necessitatibus! Molestiae soluta ducimus
						tempore magnam quidem iste vel odit fuga accusamus tempora nemo, nam dolore corrupti.
					</p>
				</div>
				<div class="icono">
					<img src="build/img/icono2.svg" alt="Icono precio" loading="lazy" />
					<h3>Precio</h3>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores dolore aperiam nihil ex necessitatibus! Molestiae soluta ducimus
						tempore magnam quidem iste vel odit fuga accusamus tempora nemo, nam dolore corrupti.
					</p>
				</div>
				<div class="icono">
					<img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy" />
					<h3>A tiempo</h3>
					<p>
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores dolore aperiam nihil ex necessitatibus! Molestiae soluta ducimus
						tempore magnam quidem iste vel odit fuga accusamus tempora nemo, nam dolore corrupti.
					</p>
				</div>
			</div>
		</section>
	<?php
	incluirTemplate('footer');
?>
