<?php ?>

<div <?php post_class(); ?>>
    

    <div class="about-container">
        <div class="about_title">
            <?php the_field("title"); ?>
        </div>
        <div class="about_paragraph">
        <?php the_field("paragraph"); ?>
        </div>
    </div>
</div>