<?php
get_header();

echo "Hey, this is MIZUHO";

if (have_posts()) :
    while (have_posts()) :
        the_post();
        the_title();
        the_post_thumbnail();
        the_content();
        the_category();
    endwhile;
    else :
        echo "No posts";
    endif;

get_footer();