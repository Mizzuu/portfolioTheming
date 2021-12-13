<?php
get_header();

if (have_posts()) :
  while (have_posts()) :
    the_post();
    the_title();
    the_post_thumbnail();
    the_content();
    the_category();
  endwhile;
endif;

if (is_page("about-me")) :
?>

  <div class="aboutme">
    <?php

    //about query
    $about_query = new WP_Query(
      array(
        'post_type'   =>   'aboutme',
        'posts_per_page'  =>   '1',
        'orderby'         =>   'rand',
      )
    );

    if ($about_query->have_posts()) :
      while ($about_query->have_posts()) :
        $about_query->the_post();
        get_template_part('template-parts/content-aboutme');
      endwhile;
    else :
      get_template_part('template-parts/content-none.php');
    endif;

    ?>
  </div>

  <div class="myskill">
    <div class="heading">
      <h2>My Skills</h2>
    </div>
    <div class="skill_parent">
      <?php
      //skill query
      $skill_query = new WP_Query(
        array(
          'post_type'   =>   'skill',
          'posts_per_page'  =>   '7',
          'orderby'         =>   'none',
        )
      );

      if ($skill_query->have_posts()) :
        while ($skill_query->have_posts()) :
          $skill_query->the_post();
          get_template_part('template-parts/content-myskill');
        endwhile;
      else :
        get_template_part('template-parts/content-none.php');
      endif;

      ?>
    </div>
  </div>


<?php endif;

get_footer();
?>