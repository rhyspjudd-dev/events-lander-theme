<?php 
/*
Template Name: HP
Template Post Type: page
*/
get_header(); ?>

<main>
    
    <?php include ("component/nav.php"); ?>

    <header>
        <h1><?php the_field('header'); ?></h1>
        <div class="sub-header"><?php the_field('header_sub_text'); ?></div>
        <button><?php the_field('header_button_text'); ?></button>
    </header>

    <section class="info">
        <h3><?php the_field('information_header'); ?></h3>
        <p><?php the_field('information_sub_header'); ?></p>
        <button><?php the_field('info_button_text'); ?></button>
    </section>

    <section class="help">
        <h3><?php the_field('help_header'); ?></h3>
        <p><?php the_field('help_sub_header'); ?></p>
        <div class="wrapper">
            <p><?php the_field('help_wrapper_text'); ?></p>
            <button><?php the_field('help_button_text'); ?></button>
        </div>
    </section>

    <section class="cards">
        <h3><?php the_field('cards_header'); ?></h3>
        <p><?php the_field('cards_sub_header'); ?></p>
        <?php include ("component/cards.php"); ?>
        <button><?php the_field('cards_button_text'); ?></button>
    </section>


</main>

<?php get_footer(); ?>
