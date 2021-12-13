<?php ?>

<article>
    <h2 class="entry-title"> <?php the_title(); ?></h2>

    <div class="entry-thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <div class="entry-footer">
        <div class="entry-category">
            <h4>Category</h4>
            <?php
            the_category($separator = ' ');
            ?>
        </div>
        <div class="entry-tag">
            <h4>Tag</h4>
            <?php
            the_tags($separator = ' ');
            ?>
        </div>
    </div>
</article>