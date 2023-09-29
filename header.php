<?php 
    /**
     * Template Header
     * 
     * @package Manza
     */

?>


<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php get_bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('test-class'); ?>>

<?php wp_body_open(); ?>

<header> Header </header>