<?php
/**
 * Template Name: Portal Layout
 *
 * @package WordPress
 * @subpackage NDIS
 * @since  NDIS 1.0
 */
?>
<?php get_header(); ?>

<?php get_template_part("template-parts/page/home/banner"); ?>


<?php get_template_part("template-parts/page/home/what-we-do"); ?>

<?php get_template_part("template-parts/page/home/button"); ?>

<?php get_template_part("template-parts/page/home-portal/what-we-offer"); ?>

<?php get_template_view("template-parts/page/home/cs-banner-static",get_front_banner("middle_banner")); ?>

<?php get_template_part("template-parts/page/home/why-choose-us"); ?>

<?php get_template_view("template-parts/page/home/cs-banner",get_front_banner("bottom_banner")); ?>


<?php get_template_part("template-parts/page/home/contact"); ?>

<?php get_footer(); ?>