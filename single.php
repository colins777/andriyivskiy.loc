<?php get_header();?>

<?php
$post = $wp_query->post;
if (in_category(array(4)) ) {
    include(TEMPLATEPATH.'/single-news.php');

} else {
    include(TEMPLATEPATH.'/single-plan.php');
}
?>

<?php get_footer();?>