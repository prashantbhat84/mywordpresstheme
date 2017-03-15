<?php
get_header();
if(have_posts()):
  while(have_posts()): the_post();  ?>
<article class="post page">
<!--column container clearfix -->
  <div class="column-container clearfix">
  <!--title column -->
<div class="title-column">
    <h2> <?php the_title(); ?></h2>
  <!--text-column -->
  <div class="text-column">
<p>  <?php the_content(); ?></p>
  </div>

</div>
  </div>


</article>


<?php endwhile;
else:
  echo "<p> No Content Found</p>";
endif;
get_footer(); ?>
