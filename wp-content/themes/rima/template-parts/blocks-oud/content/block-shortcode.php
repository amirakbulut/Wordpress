<?php

$last_item = isset($args['last-item']) ? $args['last-item'] : false;
$space_below = !$last_item ? "mb-5" : false;

if(get_sub_field('shortcode')):
  ?>

  <div class="shortcode <?php echo $space_below; ?>">
    <?= do_shortcode(get_sub_field('shortcode')); ?>
  </div>
  
  <?php
endif;