<?php
get_header();
?>

<h2 class="archive-title">
    <?php the_archive_title() ?>
</h2>

<div class="post_parent">
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/content-myworks');
    endwhile;
    
else :
    echo "We do NOT have posts!";
endif;
?>
</div>

<?php
get_footer();