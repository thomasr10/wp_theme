<?php
/*
Template Name: My Projects
*/
get_header();

if(have_posts()) :
    while(have_posts()): the_post();
    
?>

<div class="post">
    <h2><?php the_title() ?></h2>
    <?php the_post_thumbnail('thumbnail') ?>
    <?php the_excerpt() ?>
    <p>Catégories : <?php the_category(' ') ?></p>
    <p>Étiquettes : <?php the_tags() ?></p>
    <a href="<?php the_permalink()?>">En savoir plus</a>
</div>

<?php
    endwhile;
else: 
    _e('Pas trouvé', 'textdomain');
endif;
get_footer();
?>