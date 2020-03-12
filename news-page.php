<?php
/*
Template Name: NewsPage
*/
?>

<?php get_header(); ?>
<section class="news">
    <div class="container">
        <div class="section-title">
            <h2 class="h2">Новини</h2>
            <div class="arrow"></div>
        </div>

        <div class="news-items">

			<?php
              global $wp_query;
            $argsNews = [
                'paged'=> $paged,
                'category_name' => 'news'
            ];
            $wp_query = new WP_Query($argsNews);

            if ( $wp_query->have_posts() ) :
                while ($wp_query -> have_posts()) :
                    $wp_query -> the_post();
                    ?>

                <div class="news-item">
                    <div class="news-item__img">
                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
                    </div>

                    <div class="news-item-descr">
                        <h2 class="news-item__title">
                            <?php the_title();?>
                        </h2>

                        <span class="news-item__text">
					<?php the_excerpt();?>
				</span>
                    </div> <!--news-item-descr-->

                    <a href="<?php the_permalink();?>" class="button">Читати далі...</a>
                </div> <!--news-item-->


                <?php endwhile; endif;
            wp_reset_postdata();
            ?>


        </div> <!--news-items-->
        <?php
		$args = [
            'screen_reader_text' => '124'

        ];
		the_posts_pagination($args); ?>


    </div>
</section>
<?php get_footer(); ?>