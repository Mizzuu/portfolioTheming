<?php ?>

<div <?php post_class(); ?>>


    <div class="skill-container">

        <div class="skill_title">
            <?php the_field("tool"); ?>
        </div>

        <div class="dot-container">

            <div class="skill-dot1">
                <?php the_field("dot1"); ?>
            </div>

            <div class="skill-dot2">
                <?php the_field("dot2"); ?>
            </div>

            <div class="skill-dot3">
                <?php the_field("dot3"); ?>
            </div>

            <div class="skill-dot4">
                <?php the_field("dot4"); ?>
            </div>

            <div class="skill-dot5">
                <?php the_field("dot5"); ?>
            </div>
            
        </div>
    </div>
</div>