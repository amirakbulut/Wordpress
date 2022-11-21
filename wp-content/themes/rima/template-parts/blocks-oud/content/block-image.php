<?php

$last_item = isset($args['last-item']) ? $args['last-item'] : false;
$space_below = !$last_item ? "mb-5" : false;

if(get_sub_field('img')):
  $image = get_sub_field('img');

  echo wp_get_attachment_image($image['ID'], null, null, [
    'class' => $space_below
  ]);
endif;

?>
