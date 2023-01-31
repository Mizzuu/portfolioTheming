<?php ?>

    <div <?php post_class(); ?>>
        <div class="post-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </div>

        <div class="post-thumbnail">
            <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail(); ?>
            </a>
        </div>
    </div>