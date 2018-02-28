<?php
get_header();

if (have_posts()) :
    while(have_posts()) : the_post(); ?>

    <article class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
        <p class="post-wrapper"><?php the_content(); ?> </p>
    </article>
    


<?php endwhile;

else: 
    echo "No content found!";

endif; ?>



<?php

get_footer();

?>



