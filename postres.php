<?php
	include('templates/base.php');
?>
	<link rel="stylesheet" type="text/css" href="css/diseñoproductos.css">
	<link rel="stylesheet" type="text/css" href="css/diseñoencabezado.css">
	<link rel="stylesheet" type="text/css" href="css/diseñopie.css">

</head>
<body>

	<div class="contenedor">
		
			<?php
			include('templates/encabezado.php');
			?>
		


		<div class="cuerpo">
			<div class="row">	
				<div class="carruselgalletas col">	
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="galletas"src="imagenes/postres.jpg" class="d-block w-100" >
							</div>
						</div>
						<div class="carousel-caption d-none d-md-block">
							<h1 class="letraproductos">Postres</h1>
							<h4>Crocantes y Deliciosas</h4>
						</div>
					</div>
				</div>
			</div>

			
			<div class="productos row">
				<div class="col-sm-3">
					<div class="card border-white">
						<div class="card-body">
							<center><h5 class="card-title">Nombre del producto</h5>
								<img class="card-img-top" src="imagenes/producto.jpg" >
								<p class="card-text">Precio: $0000</p>
								<a href="#" class="btn text-white btn-warning">Añadir al Carrito
									<img src="imagenes/carretilla.png" >
								</a>
							</center> 
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="card border-white">
						<div class="card-body">
							<center><h5 class="card-title">Nombre del producto</h5>
								<img class="card-img-top" src="imagenes/producto.jpg" >
								<p class="card-text">Precio: $0000</p>
								<a href="#" class="btn text-white btn-warning">Añadir al Carrito
									<img src="imagenes/carretilla.png" >
								</a>
							</center> 
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="card border-white">
						<div class="card-body">
							<center><h5 class="card-title">Nombre del producto</h5>
								<img class="card-img-top" src="imagenes/producto.jpg" >
								<p class="card-text">Precio: $0000</p>
								<a href="#" class="btn text-white btn-warning">Añadir al Carrito
									<img src="imagenes/carretilla.png" >
								</a>
							</center> 
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="card border-white">
						<div class="card-body">
							<center><h5 class="card-title">Nombre del producto</h5>
								<img class="card-img-top" src="imagenes/producto.jpg" >
								<p class="card-text">Precio: $0000</p>
								<a href="#" class="btn text-white btn-warning">Añadir al Carrito
									<img src="imagenes/carretilla.png" >
								</a>
							</center> 
						</div>
					</div>
				</div>
			</div>
		</div>


		<footer class="pie navbar navbar-fixed-bottom">
			
			<?php
			include('templates/pie.php');
			?>
		</footer>
	</div>
</body>
</html>