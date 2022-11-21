<?php

$last_item = isset($args['last-item']) ? $args['last-item'] : false;
$space_below = !$last_item ? "mb-5" : false;

if(get_sub_field('spotify')): ?>
  <iframe src="<?php the_sub_field('spotify'); ?>" class="spotify-widget border-4 rounded-5 <?php echo $space_below; ?>" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
<?php endif; ?>