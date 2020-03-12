<?php
/*
Template Name: SingleNews
*/
?>

<?php get_header();?>

<section class="single-post">
	<div class="container">
		<div class="section-title">
			<h2 class="h2"><?php the_post(); the_title(); ?></h2>
			<div class="arrow"></div>
		</div>
		<div class="single-post__content">
            <?php the_content(); ?>
		</div>


	</div>
</section>

<?php get_footer();?>
