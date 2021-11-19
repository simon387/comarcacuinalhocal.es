<?php include "components/header.html"; ?>
<?php $page = 5;
include "components/navigation.php"; ?>

<section class="page-section">
	<div class="container">
		<div class="accordion" id="accordionExample">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h2 class="mb-0">
						<button class="btn btn-block text-center collapsed btn-carta" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Carta</button>
					</h2>
				</div>
				<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						<img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/cartas/carta_1.jpg" alt="carta 1">
						<img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/cartas/carta_2.jpg" alt="carta 2">
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingTwo">
					<h2 class="mb-0">
						<button class="btn btn-block text-center collapsed btn-carta" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Desayunos</button>
					</h2>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					<div class="card-body">
						<img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/cartas/desa.jpg" alt="carta desauno">
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingThree">
					<h2 class="mb-0">
						<button class="btn btn-block text-center collapsed btn-carta" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Platillos de temporada</button>
					</h2>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
					<div class="card-body">
						<img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/cartas/platillos.jpg" alt="cartas platillos">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include "components/footer.php"; ?>
