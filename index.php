<?php
/*
Template Name: HomePage
*/
?>

<?php get_header(); ?>

<section class="advantages-s" >
    <div class="container">
        <div class="section-title">
            <h2 class="h2" id="anchor2">Переваги</h2>
            <div class="arrow"></div>
        </div>

        <div class="advantages-wrap">

			<?php $advantagesItems = new WP_Query(array('category_name' => 'advantages'));


while ($advantagesItems->have_posts()) :
    $advantagesItems->the_post();?>

            <div class="advantages-item">
                <span class="advantages-item__top"><?php the_title();?></span>
                <span class="advantages-item__bottom"><?php the_content();?></span>
            </div>

<?php endwhile; wp_reset_postdata();?>
        </div> <!--advantages-wrap-->
    </div>
</section>

<section class="planning">
    <div class="container">
        <div class="section-title">
            <h2 class="h2">Планування</h2>
            <div class="arrow"></div>
        </div>
    </div>

    <div class="s-slider">

        <?php $planningItems = new WP_Query(array('category_name' => 'planning'));


        while ($planningItems->have_posts()) :
            $planningItems->the_post();?>

			<div class="slider-item">
				<div class="container">
					<div class="slide-content">

						<div class="slide-descr">

							<div class="slide-descr__features">
								<h3 class="slide-descr__title"><?php the_title();?></h3>
								<div class="slide-descr__features--item">
									<span class="slide-descr__features--item-option">Поверх:</span>
									<span class="slide-descr__features--item-value"><?php the_field('flor');?></span>
								</div>

								<div class="slide-descr__features--item">
									<span class="slide-descr__features--item-option">Кількість кімнат:</span>
									<span class="slide-descr__features--item-value"><?php the_field('qty_room');?></span>
								</div>

								<div class="slide-descr__features--item">
									<span class="slide-descr__features--item-option">Загальна площа:</span>
									<span class="slide-descr__features--item-value"><?php the_field('general_square');?></span>
								</div>
							</div>

							<a href="<?php the_permalink();?>" class="button">Детальніше</a>
						</div> <!--slide-descr-->

						<div class="slide-img">
							<?php echo get_the_post_thumbnail();?>
						</div>
					</div> <!--slide-content-->
				</div> <!--container-->

			</div> <!--slider-item-->

        <?php endwhile; wp_reset_postdata();?>

    </div> <!--s-slider-->
</section>


<section class="floors">
	<div class="container">
		<div class="section-title">
			<h2 class="h2" id="anchor3">Типовий поверх</h2>
			<div class="arrow"></div>
		</div>

		<div class="floors-popup">
			<div class="floors-popup__close">
				<img src="<?php echo get_template_directory_uri() . '/img/icons/times-solid.svg'?>" alt="">
			</div>
			<div class="floors-popup__content"></div>
		</div>

		<div class="floors-content">
			<svg viewBox = "0 0 800 1389.3333">

					<path class="flat" d="M 95.672649,47.836325 V 366.05187 l 384.770441,-4.15968 -2.07984,-158.06785 235.02194,-4.15968 V 33.277443 H 89.433128 Z" fill="#000"
					data-flat-id="flat-10"
					>
					</path>

				<path class="flat" d="m 93.592809,366.05187 2.07984,164.30738 H 14.558881 l 2.079841,160.1477 349.413148,2.07984 v -118.5509 h 22.87825 l -2.07984,-210.06386 z"
			  	data-flat-id="flat-9"
				>
				</path>

				<path class="flat" d="m 14.558881,702.98599 v 322.37521 l 374.371239,-2.0798 V 694.66663 L 12.479041,688.42711 Z"
			  	data-flat-id="flat-8"
				>
				</path>


				<path class="flat" d="m 18.718562,1023.2814 2.07984,160.1477 72.794407,-2.0799 V 1353.976 H 715.46503 V 1187.5888 H 476.28341 l -2.07984,-143.509 -83.19361,2.0798 -2.07984,-24.9581 z"
			  	data-flat-id="flat-7"
				>
				</path>

				<path class="flat" d="m 476.28341,836.09576 2.07984,349.41314 h 309.89618 l -6.23952,-353.57282 z"
				  data-flat-id="flat-6"
				>
				</path>

				</path>
				<path class="flat" d="m 478.36325,197.58482 2.07984,393.0898 137.26945,2.07984 v 99.83233 h 172.62674 l 6.23952,-334.85428 h -14.55889 l 4.15968,-160.14769 z"
				  data-flat-id="flat-11"
				>
			</svg>

			<img src="<?php echo get_template_directory_uri() . '/img/floors/600_1042.jpg'?>" alt="">
		</div>
	</div>

<!--Popup for flats-->
	<div class="hidden">
		<div class="popup-floors-content">

            <?php $planningItemsPopup = new WP_Query(array('category_name' => 'planning'));

            while ($planningItemsPopup->have_posts()) :
                $planningItemsPopup->the_post();?>

				<div class="popup-flat" id="<?php the_field('flat_id');?>">
							<div class="popup-flat-descr">
								<div class="popup-flat__features">
									<h3 class="popup-flat__title"><?php the_title();?></h3>
									<div class="popup-flat__features--item">
										<span class="popup-flat__features--item-option">Поверх:</span>
										<span class="popup-flat__features--item-value"><?php the_field('flor');?></span>
									</div>

									<div class="popup-flat__features--item">
										<span class="popup-flat__features--item-option">Кількість кімнат:</span>
										<span class="popup-flat__features--item-value"><?php the_field('qty_room');?></span>
									</div>

									<div class="popup-flat__features--item">
										<span class="popup-flat__features--item-option">Загальна площа:</span>
										<span class="popup-flat__features--item-value"><?php the_field('general_square');?></span>
									</div>
								</div>

							</div> <!--slide-descr-->

							<div class="popup-flat-img">
                                <?php echo get_the_post_thumbnail();?>
							</div>

				</div>  <!--popup-floors-item-->

            <?php endwhile; wp_reset_postdata();?>
		</div> <!--popup-floors-content-->
	</div> <!--hidden-->
</section>


<section class="gallery">
    <div class="container">
        <div class="section-title">
            <h2 class="h2" id="anchor4">Галерея</h2>
            <div class="arrow"></div>
        </div>

        <div class="gallery-content">
            <?php $galleryItem = new WP_Query(array('category_name' => 'gallery-main' ));

            while ($galleryItem->have_posts()) :
                $galleryItem->the_post(); the_content();?>
            <?php endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>


<section class="permissions" >
    <div class="container">
        <div class="section-title">
            <h2 class="h2" id="anchor5">Дозволи</h2>
            <div class="arrow"></div>
        </div>

        <div class="permissions-content">
            <?php $galleryItem = new WP_Query(array('category_name' => 'permissions' ));

            while ($galleryItem->have_posts()) :
                $galleryItem->the_post(); the_content();?>
            <?php endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>



<section class="about" id="anchor6">
    <div class="container">
        <div class="section-title">
            <h2 class="h2">Забудовник</h2>
            <div class="arrow"></div>
        </div>

        <div class="about-content">

            <?php
            $companyPosts = get_posts('numberposts=1&category=8');
            foreach ($companyPosts as $post) :
                setup_postdata($post);
                ?>
				<h2><?php the_title()?></h2>
			<?php the_content(); ?>
            <?php endforeach; ?>


        </div>
    </div>
</section>

<section class="news" >
    <div class="container">
        <div class="section-title">
            <h2 class="h2" id="anchor7">Новини</h2>
            <div class="arrow"></div>
        </div>

<!--        <div class="news-items">-->
<!---->
<!---->
<!--            --><?php
//
//            $filterNewsPosts = [
//                'category_name' => 'news',
//                'posts_per_page' => 3
//            ];
//
//            $newsPosts = new WP_Query($filterNewsPosts);
//
//
//            while ($newsPosts->have_posts()) :
//                $newsPosts->the_post();?>
<!---->
<!--                <div class="news-item">-->
<!--                    <div class="news-item__img">-->
<!--                        <img src="--><?php //echo get_the_post_thumbnail_url();?><!--" alt="">-->
<!--                    </div>-->
<!---->
<!--                    <div class="news-item-descr">-->
<!--                        <h2 class="news-item__title">-->
<!--                            --><?php //the_title();?>
<!--                        </h2>-->
<!---->
<!--                        <div class="news-item__text">-->
<!--					--><?php //the_excerpt();?>
<!--				</div>-->
<!--                    </div>
<!---->
<!--                    <a href="--><?php //the_permalink();?><!--" class="button">Читати далі...</a>-->
<!--                </div>
<!---->
<!---->
<!--            --><?php //endwhile;
//            wp_reset_postdata();
//            ?>
<!--        </div> -->

        <?php echo wp_video_shortcode([
            'src' => 'http://andriyivskiy.loc/wp-content/uploads/2020/05/news_video.mp4',
            'poster' => 'http://andriyivskiy.loc/wp-content/uploads/2020/05/video_screen.jpg',
            'height' => 500,
            'width' => 1020,
        ]); ?>

<!--        <a href="--><?php //home_url();?><!--/all-news" class="button">Всі новини</a>-->
    </div>
</section>


<section class="contacts">
    <div class="container">
        <div class="section-title">
            <h2 class="h2" id="anchor8">Контакти</h2>
            <div class="arrow"></div>
        </div>

        <div class="contacts-wrap">
            <div class="contacts-address">
                <span class="contacts-address__street"><?php the_field('address', 133); ?></span>
                <a href="tel:<?php the_field('phone', 133); ?>" class="contacts-address__phone"><?php the_field('phone', 133); ?></a>
                <a href="tel:<?php the_field('phone_2', 133); ?>" class="contacts-address__phone"><?php the_field('phone_2', 133); ?></a>
                <a href="#callback" class="button">Залишити заявку</a>
            </div>

            <div class="contacts-map">
                <iframe src="https://www.google.com/maps/d/embed?mid=133B6EWTVH3B8QVFu5-MwYKjZr8YOgEKh" width="100%" height="480"></iframe>
            </div>


        </div>
    </div>
</section>


<?php get_footer();?>