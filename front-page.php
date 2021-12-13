<?php

get_header();

?>


<div class="introduction">
  <?php

  //intro query
  $intro_query = new WP_Query(
    array(
      'post_type'   =>   'descme',
      'posts_per_page'  =>   '1',
      'orderby'         =>   'rand',
    )
  );

  if ($intro_query->have_posts()) :
    while ($intro_query->have_posts()) :
      $intro_query->the_post();
      get_template_part('template-parts/content-intro');
    endwhile;
  else :
    get_template_part('template-parts/content-none.php');
  endif;

  ?>
</div>


<div class="myworks">
  <div class="heading">
    <h2>My works</h2>
  </div>
  <div class="post-parent">

    <?php

    //myworks query
    $myworks_query = new WP_Query(
      array(
        'tag'   =>   'myworks',
        'posts_per_page'  =>   '6',
        'orderby'         =>   'rand',
      )
    );

    if ($myworks_query->have_posts()) :
      while ($myworks_query->have_posts()) :
        $myworks_query->the_post();
        get_template_part('template-parts/content-myworks');
      endwhile;
    else :
      get_template_part('template-parts/content-none.php');
    endif;

    ?>
  </div>
</div>





<?php

get_footer();
