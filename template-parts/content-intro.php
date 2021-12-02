<?php ?>

<div <?php post_class(); ?>>
    <div class="profileImg">
        <?php the_post_thumbnail(); ?>
    </div>

    <div class="intro-container">
        <div class="intro1">
            <?php the_field("introduction"); ?>
        </div>
        <div class="intro2">
        <?php the_field("introduction2"); ?>
        </div>
        <div class="intro3">
        <?php the_field("introduction3"); ?>
        </div>
    </div>
</div>

