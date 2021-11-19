<?php include "components/header.html"; ?>
<?php $page=4; include "components/navigation.php"; ?>

<section class="page-section cta">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 mx-auto">
				<div class="cta-inner text-center rounded">
					<h2 class="section-heading mb-5">
						<span class="section-heading-upper">ENTRA</span>
						<span class="section-heading-lower">Estem oberts</span>
					</h2>
					<ul class="list-unstyled list-hours mb-5 text-left mx-auto">
						<li class="list-unstyled-item list-hours-item d-flex">
							Diumenge
							<span class="ml-auto">de 8:00 AM a 11:00 PM</span>
						</li>
						<li class="list-unstyled-item list-hours-item d-flex">
							Dilluns
							<span class="ml-auto">de 8:00 AM a 11:00 PM</span>
						</li>
						<li class="list-unstyled-item list-hours-item d-flex">
							Dimarts
							<span class="ml-auto">de 8:00 AM a 11:00 PM</span>
						</li>
						<li class="list-unstyled-item list-hours-item d-flex">
							Dimecres
							<span class="ml-auto">de 8:00 AM a 11:00 PM</span>
						</li>
						<li class="list-unstyled-item list-hours-item d-flex">
							Dijous
							<span class="ml-auto">de 8:00 AM a 11:00 PM</span>
						</li>
						<li class="list-unstyled-item list-hours-item d-flex">
							Divendres
							<span class="ml-auto">de 8:00 AM a 11:00 PM</span>
						</li>
						<li class="list-unstyled-item list-hours-item d-flex">
							Dissabte
							<span class="ml-auto">de 8:00 AM a 11:00 PM</span>
						</li>
					</ul>
					<p class="address mb-5">
						<i>
							<strong>Av. Granvia #LHospitalet 22</strong>
							<br>
							Hospitalet, Barcelona
						</i>
					</p>
					<p class="mb-0">
						<small>
							<em>Truca en qualsevol moment</em>
						</small>
						<br>
						+34 681 04 82 68
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-section about-heading">
	<div class="container">
		<img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="about">
		<div class="about-heading-content">
			<div class="row">
				<div class="col-xl-9 col-lg-10 mx-auto">
					<div class="bg-faded rounded p-5">
						<?php include "components/info.html"; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include "components/footer.php"; ?>

<!-- Script to highlight the active date in the hours list -->
<script>
	$('.list-hours li').eq(new Date().getDay()).addClass('today');
</script>

<?php include "components/close.html"; ?>

