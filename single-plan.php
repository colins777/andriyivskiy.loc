<?php
/*
Template Name: SingleBlog
*/
?>

<?php get_header();?>

<section class="page-planning">
	<div class="container">

		<div class="page-planning__content">
			<div class="page-planning__text">
				<h1 class="page-planning__title">
                    <?php the_title();?>
				</h1>
				<div class="page-planning____features">
					<div class="page-planning__features--item">
						<span class="page-planning__features--item-option">Поверх</span>
						<span class="page-planning__features--item-value"><?php the_field('flor');?></span>
					</div>

					<div class="page-planning__features--item">
						<span class="page-planning__features--item-option">Кількість кімнат</span>
						<span class="page-planning__features--item-value"><?php the_field('qty_room');?></span>
					</div>

					<div class="page-planning__features--item">
						<span class="page-planning__features--item-option">Загальна площа</span>
						<span class="page-planning__features--item-value"><?php the_field('general_square');?></span>
					</div>
				</div>

			</div>

			<div class="page-planning__gallery">
				<?php the_post(); the_content();?>
			</div>
		</div> <!--page-planning__content-->

	</div> <!--container-->
</section>

<?php get_footer();?>
