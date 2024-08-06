<?php
/*
Template Name: Translation debug
*/
?>
<?php get_header(); ?>
<?php $strings = getStrings(); print_r($strings); ?>
<?php get_footer(); ?>