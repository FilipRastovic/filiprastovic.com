<?php
/**
 * Template Name: Generative Gallery Template
 *
 * @package clarity-enhanced
 */

get_header();
?>

<header class="header">
	<div class="container h-100">
		<div class="row h-100 justify-content-center text-center">
			<canvas id="displayCanvas"></canvas>

			<div class="col-lg-10 align-self-end">
				<h1 class="text-uppercase font-weight-bold">Generative Design Gallery</h1>
				<hr class="divider text-white my-4">
				<p class="mb-5">Images made with code</p>
			</div>

			<div class="col-lg-10 align-self-baseline">
				<a href="#generative" class="btn btn-secondary btn-xl shadow js-scroll-trigger wow animated fadeInUp" data-wow-duration="2s" data-wow-delay=".2s"><i class="fas fa-info-circle"></i>See Gallery</a>
			</div>

		</div>
	</div>
</header>

<section id="generative">
	<div class="container">
		<div class="row">
			<div class="col-md-6"><img src="<?php bloginfo('template_url'); ?>/assets/img/generative/light/screen-0000.png" alt="Generative Piece 1" class="img-fluid"></div>
			<div class="col-md-6"><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et voluptates cum quo repudiandae sed, ex quos eveniet eum ullam, tempore soluta. Blanditiis corrupti at magni placeat hic, numquam accusantium cumque.</p></div>
			<div class="col-md-4"><img src="<?php bloginfo('template_url'); ?>/assets/img/generative/light/Screenshot at Jul 31 19-56-30.png" alt="Generative Piece 2" class="img-fluid"></div>
			<div class="col-md-4"><img src="<?php bloginfo('template_url'); ?>/assets/img/generative/light/bezier_1236.png" alt="Generative Piece 3" class="img-fluid"></div>
			<div class="col-md-4"><img src="<?php bloginfo('template_url'); ?>/assets/img/generative/light/bezier_1096.png" alt="Generative Piece 3" class="img-fluid"></div>

			<!-- dark -->
			<div class="col-md-4"><img src="<?php bloginfo('template_url'); ?>/assets/img/generative/dark/bezier_0478.png" alt="Generative Piece 2" class="img-fluid"></div>
			<div class="col-md-4"><img src="<?php bloginfo('template_url'); ?>/assets/img/generative/dark/bezier_1062.png" alt="Generative Piece 3" class="img-fluid"></div>
			<div class="col-md-4"><img src="<?php bloginfo('template_url'); ?>/assets/img/generative/light/" alt="Generative Piece 3" class="img-fluid"></div>
		</div>
	</div>
</section>


<?php
get_footer();