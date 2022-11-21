<?php

$last_item = isset($args['last-item']) ? $args['last-item'] : false;
$space_below = !$last_item ? " mb-5" : false;

if (get_sub_field('button')) :

  $button = get_sub_field('button');

  rima_create_button([
    'link' => esc_html($button['url']),
    'text' => esc_html($button['title']),
    'attributes' => [
      'target' => esc_html($button['target'] ?? '_self'),
      'rel' => 'noopener',
    ],
    'classes' => 'border' . $space_below
  ]);

?>
  <?php
endif;
