<?php

get_header();

if(have_posts()) :
    while(have_posts()): the_post();
?>

<div class="post">
    <h2><?php the_title(); ?></h2>
    <div class="content">
        <?php the_content(); ?>
    </div>
    <div class="meta">
        <p>Category : <?php the_category(' '); ?></p>
        <p><?php the_tags('Tags : '); ?></p>
    </div>
</div>

<?php
    endwhile;
else: 
    _e('Pas trouvé', 'textdomain');
endif;
get_footer();
?>