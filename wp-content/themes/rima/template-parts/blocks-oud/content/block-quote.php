<?php

$last_item = isset($args['last-item']) ? $args['last-item'] : false;
// $space_below = !$last_item ? "mb-5" : false;

if(get_sub_field('quote')): ?>
    <q class="d-block px-md-7 mb-5 mt-md-5"><?php echo the_sub_field('quote'); ?></q>
<?php endif; ?>