<div class="container-fluid bg-white contenidoInicio py-2 py-md-4">

	<div class="container">

		<!-- BREADCRUMB -->

		<ul class="breadcrumb bg-white p-0 mb-2 mb-md-4">

			<li class="breadcrumb-item inicio"><a href="index.html">Inicio</a></li>

			<li class="breadcrumb-item active">Mi viaje por Suramérica</li>

		</ul>

		<div class="row">

			<!-- COLUMNA IZQUIERDA -->

			<div class="col-12 col-md-8 col-lg-9 p-0 pr-lg-5">


				<!-- ARTÍCULO 01 -->
                <?php foreach ($articulos as $key => $item): ?>
				<div class="row">

					<div class="col-12 col-lg-5">

						<a href="<?php echo $item['ruta'] ?>"><h5 class="d-block d-lg-none py-3"><?php echo $item['titulo']; ?></h5></a>

						<a href="<?php echo $item['ruta'] ?>"><img src="<?php echo $item['img']; ?>" alt="Lorem ipsum dolor sit amet" class="img-fluid" width="100%"></a>

					</div>

					<div class="col-12 col-lg-7 introArticulo">

						<a href="<?php echo $item['ruta'] ?>"><h4 class="d-none d-lg-block"><?php echo $item['titulo']; ?></h4></a>

						<p class="my-2 my-lg-5"><?php echo $item['descripcion']; ?></p>

						<a href="<?php echo $item['ruta'] ?>" class="float-right">Leer Más</a>

						<div class="fecha"><?php echo $item['fecha']; ?></div>

					</div>


				</div>
				<hr class="mb-4 mb-lg-5" style="border: 1px solid #79FF39">
				<?php endforeach?>

				<div class="container d-none d-md-block">

					<ul class="pagination justify-content-center"></ul>

				</div>

			</div>

			<!-- COLUMNA DERECHA -->

			<div class="d-none d-md-block pt-md-4 pt-lg-0 col-md-4 col-lg-3">

				<!-- ETIQUETAS -->

				<div>

					<h4>Etiquetas</h4>


						<a href="#suramerica" class="btn btn-secondary btn-sm m-1">suramerica</a>

						<a href="#colombia" class="btn btn-secondary btn-sm m-1">colombia</a>

						<a href="#peru" class="btn btn-secondary btn-sm m-1">peru</a>

						<a href="#argentina" class="btn btn-secondary btn-sm m-1">argentina</a>

						<a href="#chile" class="btn btn-secondary btn-sm m-1">chile</a>

						<a href="#brasil" class="btn btn-secondary btn-sm m-1">brasil</a>

						<a href="#ecuador" class="btn btn-secondary btn-sm m-1">ecuador</a>

						<a href="#venezuela" class="btn btn-secondary btn-sm m-1">venezuela</a>

						<a href="#paraguay" class="btn btn-secondary btn-sm m-1">paraguay</a>

						<a href="#uruguay" class="btn btn-secondary btn-sm m-1">uruguay</a>

						<a href="#bolivia" class="btn btn-secondary btn-sm m-1">bolivia</a>

				</div>

				<!-- Artículos Destacados -->

				<div class="my-4">

					<h4>Artículos Destacados</h4>

					<div class="d-flex my-3">

						<div class="w-100 w-xl-50 pr-3 pt-2">

							<a href="articulos.html">

								<img src="<?php echo $blog['dominio']; ?>vista/img/articulo01.png" alt="Lorem ipsum dolor sit amet" class="img-fluid">

							</a>

						</div>

						<div>

							<a href="articulos.html" class="text-secondary">

								<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

							</a>

						</div>

					</div>

					<div class="d-flex my-3">

						<div class="w-100 w-xl-50 pr-3 pt-2">

							<a href="articulos.html">

								<img src="<?php echo $blog['dominio']; ?>vista/img/articulo02.png" alt="Lorem ipsum dolor sit amet" class="img-fluid">

							</a>

						</div>

						<div>

							<a href="articulos.html" class="text-secondary">

								<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

							</a>

						</div>

					</div>

					<div class="d-flex my-3">

						<div class="w-100 w-xl-50 pr-3 pt-2">

							<a href="articulos.html">

								<img src="<?php echo $blog['dominio']; ?>vista/img/articulo03.png" alt="Lorem ipsum dolor sit amet" class="img-fluid">

							</a>

						</div>

						<div>

							<a href="articulos.html" class="text-secondary">

								<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

							</a>

						</div>

					</div>


				</div>

				<!-- PUBLICIDAD -->

				<div class="mb-4">

					<img src="<?php echo $blog['dominio']; ?>vista/img/ad03.png" class="img-fluid">

				</div>

				<div class="my-4">

					<img src="<?php echo $blog['dominio']; ?>vista/img/ad02.jpg" class="img-fluid">

				</div>

				<div class="my-4">

					<img src="<?php echo $blog['dominio']; ?>vista/img/ad05.png" class="img-fluid">

				</div>

			</div>

		</div>

	</div>

</div>