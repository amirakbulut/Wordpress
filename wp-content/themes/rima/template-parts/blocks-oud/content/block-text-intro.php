<?php

$last_item = isset($args['last-item']) ? $args['last-item'] : false;

if(get_sub_field('text_intro')):
  ?>
  <div class="intro-text mb-4">
    <?php the_sub_field('text_intro'); ?>
  </div>
  <?php
endif;