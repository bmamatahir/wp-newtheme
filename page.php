<?php

get_header();

?>

<div class="container-fluid sticky-top">
    <?php 
        get_template_part('template-parts/header/stick-top-bar'); 
    ?>
</div>

<div class="container mt-4">

    <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
    <?php endif;?>

    <h1><?php the_title();?></h1>

    <p>
        <?php the_content(); ?>
    </p>
</div>

<?php
get_footer();