<?php 
/*
Template Name: HP
Template Post Type: page
*/
get_header(); ?>

<?php include ("component/nav.php"); ?>

<main>

    <header style="background: url(<?php the_field('bg_header_image'); ?>) center no-repeat;">
        <div class="content">
            <h1><?php the_field('header'); ?></h1>
            <div class="sub-header">
                <?php the_field('header_sub_text'); ?>
            </div>
            <div class="btn-wrapper">
                <button class="go-down" href="#help"><?php the_field('header_button_text'); ?></button>
            </div>
        </div>
    </header>

    <section class="info">
        <div class="grid">
            <div class="content">
                <?php if( get_field('information_image') ): ?>
                    <img src="<?php the_field('information_image'); ?>" />
                <?php endif; ?>
            </div>
            <div class="content">
                <h3><?php the_field('information_header'); ?></h3>
                <p><?php the_field('information_sub_header'); ?></p>
                <button><?php the_field('info_button_text'); ?></button>
            </div>
        </div>
    </section>

    <section class="help" id="help">
        <h3><?php the_field('help_header'); ?></h3>
        <p><?php the_field('help_sub_header'); ?></p>
        <div class="box">
            <label for="nature-select">I want to get:</label>
                <select name="nature-elements" id="nature-select">
                    <option value="">Involved in</option>
                    <option value="river">River</option>
                    <option value="lake">Lake</option>
                    <option value="mountains">Mountains</option>
                    <option value="trees">Trees</option>
                </select>
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
