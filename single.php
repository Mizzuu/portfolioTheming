<?php
get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part( 'template-parts/content' );
    endwhile;
else :
    echo "We do NOT have posts!";
endif;

get_footer();