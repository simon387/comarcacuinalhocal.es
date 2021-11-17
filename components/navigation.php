<?php
$active1 = "";
$active2 = "";
$active3 = "";
$active4 = "";
$active5 = "";
$active = "active";
switch ($page) {
	case 1:
		$active1 = $active;
		break;
	case 2:
		$active2 = $active;
		break;
	case 3:
		$active3 = $active;
		break;
	case 4:
		$active4 = $active;
		break;
	case 5:
		$active5 = $active;
		break;
	default:
		$active1 = $active;
}
?>

<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
	<div class="container">
		<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Comarca</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
		        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item <?php echo $active1 ?> px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="index.php">Home</a>
				</li>
				<li class="nav-item <?php echo $active2 ?> px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="about.php">About</a>
				</li>
				<li class="nav-item <?php echo $active3 ?> px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="products.php">Products</a>
				</li>
				<li class="nav-item <?php echo $active4 ?> px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="store.php">Store</a>
				</li>
				<li class="nav-item <?php echo $active5 ?> px-lg-4">
					<a class="nav-link text-uppercase text-expanded" href="carta.php">Carta</a>
				</li>
			</ul>
		</div>
	</div>
</nav>