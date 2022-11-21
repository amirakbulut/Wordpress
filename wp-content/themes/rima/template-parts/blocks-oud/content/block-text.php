<?php

$last_item = isset($args['last-item']) ? $args['last-item'] : false;
$space_below = !$last_item ? "mb-5" : false;

if(get_sub_field('text')):
  ?>

  <div class="paragraph <?php echo $space_below; ?>">
    <?php the_sub_field('text'); ?>
  </div>
  
  <?php
endif;