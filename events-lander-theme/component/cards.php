<?php if( have_rows('cards') ): ?>
    <ul class="cards">
    <?php while( have_rows('slides') ): the_row(); ?>
        <li class="card">
            <h4><?php the_sub_field('card_header'); ?></h4>
            <p><?php the_sub_field('card_text'); ?></p>
            <button><?php the_sub_field('card_btn_text'); ?></button>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>