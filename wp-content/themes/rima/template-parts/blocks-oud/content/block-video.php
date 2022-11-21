<?php

$last_item = isset($args['last-item']) ? $args['last-item'] : false;
$space_below = !$last_item ? "mb-5" : false;



if(get_sub_field('video')):

    // Load value.
  $iframe = get_sub_field('video');

  // Use preg_match to find iframe src.
  preg_match('/src="(.+?)"/', $iframe, $matches);
  $src = $matches[1];

  // Add extra parameters to src and replace HTML.
  $params = array(
      'autoplay' => 1,
      'mute' => 1,
      // 'controls' => 0,
      'modestbranding' => 1,
      'loop' => 1
  );
  $new_src = add_query_arg($params, $src);
  $iframe = str_replace($src, $new_src, $iframe);

  // Add extra attributes to iframe HTML.
  $attributes = 'frameborder="0"';
  $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

  ?>

  <div class="video <?php echo $space_below; ?>">
    <?= $iframe; ?>
  </div>
  <?php
endif;