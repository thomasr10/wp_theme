<?php
get_header();
?>

<section class="projects-container">
    <h2>My Projects</h2>
    <?php
    if(have_posts()) :
        while(have_posts()): the_post();
    ?>
    <article class="project">
        <h3><?php the_title() ?></h3>
        <?php the_post_thumbnail('full') ?>
        <?php the_excerpt() ?>
        <p>Category : <?php the_category(' ') ?></p>
        <p><?php the_tags('Tags : ') ?></p>
        <a href="<?php the_permalink()?>">En savoir plus</a>
    </article>

    <?php
        endwhile;
    else: 
        _e('Pas trouvé', 'textdomain');
    endif;
    ?>
</section>

<?php
get_footer();
?>