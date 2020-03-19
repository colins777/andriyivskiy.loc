<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <!-- <base href="/"> -->

    <title><?php bloginfo();?></title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <!-- Custom Browsers Color End -->

<?php wp_head();?>

</head>
<body>

<!-- Custom HTML -->

<?php if (is_home()) :?>

<header class="header" style="background-image: url('<?php echo get_template_directory_uri() . '/img/header_bg.jpg';?>');">

		<div class="header-top__line">
			<div class="sandwich">
				<div class="sandwich__line sandwich__line--top"></div>
				<div class="sandwich__line sandwich__line--middle"></div>
				<div class="sandwich__line sandwich__line--bottom"></div>
			</div>
			<div class="container container-flex">
			<div class="header-top__line-left">
				<div class="logo">
                    <?php the_custom_logo();?>
				</div>
			</div>

			<div class="header-top__line-right">


				<div class="contacts">
					<a class="contacts-item" href="tel:<?php the_field('phone', 133); ?>"><?php the_field('phone', 133); ?></a>
				</div>
				<nav class="header-menu">
					<ul class="main-nav">
						<li class="menu-item"><a href="#anchor1">Про комплекс</a></li>
						<li class="menu-item"><a href="#anchor2">Переваги</a></li>
						<li class="menu-item"><a href="#anchor3">Планування</a></li>
						<li class="menu-item"><a href="#anchor4">Галерея</a></li>
						<li class="menu-item"><a href="#anchor5">Дозволи</a></li>
						<li class="menu-item"><a href="#anchor6">Забудовник</a></li>
						<li class="menu-item"><a href="#anchor7">Новини</a></li>
						<li class="menu-item"><a href="#anchor8">Контакти</a></li>
					</ul>
				</nav>
			</div>
</div> <!--			container-->
		</div> <!--header-top__line-->
			<div class="container">
				<div id="anchor1" class="header-text">

                    <?php
                    $aboutPosts = get_posts('numberposts=1&category=7');
                    foreach ($aboutPosts as $post) :
                        setup_postdata($post);
                        ?>
						<?php the_content(); ?>
                    <?php endforeach; ?>
				</div>
			</div>

</header>

<?php else: ?>

<header class="header-nothome">

	<div class="header-top__line">
		<div class="container container-flex">
			<div class="header-top__line-left">
				<div class="logo">
					<?php the_custom_logo();?>
				</div>
			</div>

			<div class="header-top__line-right">

				<div class="contacts">
					<a href="#callback" class="button button-left">Залишити заявку</a>
					<a class="contacts-item" href="tel:<?php the_field('phone', 133); ?>"><?php the_field('phone', 133); ?></a>
				</div>
			</div>
		</div> <!--			container-->
	</div> <!--header-top__line-->

</header>

<?php endif; ?>





