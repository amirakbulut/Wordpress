<?php

$unique_id = $args['id'];

$col_left = get_sub_field('column_left');
$column_left = [

    'title' => !empty($col_left['title']) ? $col_left['title'] : false,
    'description' => !empty($col_left['description']) ? $col_left['description'] : false,

    'button_1' => [
        'text' => !empty($col_left['button_1']['title']) ? $col_left['button_1']['title'] : 'Meer informatie',
        'link' => !empty($col_left['button_1']['url']) ? $col_left['button_1']['url'] : '#',
        'target' => !empty($col_left['button_1']['target']) ? $col_left['button_1']['target'] : '_self'
    ],

    'button_2' => [
        'text' => !empty($col_left['button_2']['title']) ? $col_left['button_2']['title'] : 'Meer informatie',
        'link' => !empty($col_left['button_2']['url']) ? $col_left['button_2']['url'] : '#',
        'target' => !empty($col_left['button_2']['target']) ? $col_left['button_2']['target'] : '_self'
    ]
];

$col_right = get_sub_field('column_right');
$column_right = [
    // 'pre_title' => !empty($col_right['pre_titel']) ? $col_right['pre_titel'] : false,
    // 'pre_title_color' = !empty($col_right['pre_title_color']) ? 'color:' . $col_right['pre_title_color'] . ';' : false,

    'title' => !empty($col_right['title']) ? $col_right['title'] : false,
    'description' => !empty($col_right['description']) ? $col_right['description'] : false,

    'button_1' => [
        'text' => !empty($col_right['button_1']['title']) ? $col_right['button_1']['title'] : 'Meer informatie',
        'link' => !empty($col_right['button_1']['url']) ? $col_right['button_1']['url'] : '#',
        'target' => !empty($col_left['button_1']['target']) ? $col_left['button_1']['target'] : '_self'
    ],

    'button_2' => [
        'text' => !empty($col_right['button_2']['title']) ? $col_right['button_2']['title'] : 'Meer informatie',
        'link' => !empty($col_right['button_2']['url']) ? $col_right['button_2']['url'] : '#',
        'target' => !empty($col_left['button_2']['target']) ? $col_left['button_2']['target'] : '_self'
    ]
];

$extra_classes = !empty(get_sub_field('extra_classes')) ? get_sub_field('extra_classes') : false;
$margin_before = !empty(get_sub_field('margin_before')) ? 'mt-32' : false;
$margin_after = !empty(get_sub_field('margin_after')) ? 'mb-32' : false;

$classes = implode(' ', [
    $extra_classes,
    $margin_before,
    $margin_after
]);

?>

<section class="<?= $classes; ?>">
    <div class="container flex flex-col justify-center items-center py-36">
        <div class="lg:columns-2 ">
            <div class="lg:pr-20 break-inside-avoid mb-20 lg:mb-0">
                <h2><?= $column_left['title']; ?></h2>
                <div class="mb-7"><?= $column_left['description'] ?></div>
                <div class="btn-wrap flex-wrap">
                    <?php if($column_left['button_1']['link'] !== '#'): ?>
                        <a href="<?= $column_left['button_1']['link']; ?>" target="<?= $column_left['button_1']['target']; ?>" class="btn flex-grow bg-primary text-white"><?= $column_left['button_1']['text']; ?></a>
                    <?php endif; ?>

                    <?php if($column_left['button_2']['link'] !== '#'): ?>
                        <a href="<?= $column_left['button_2']['link']; ?>" target="<?= $column_left['button_2']['target']; ?>" class="btn flex-grow bg-secondary text-black"><?= $column_left['button_2']['text']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="lg:pl-20 break-inside-avoid">
                <h2><?= $column_right['title']; ?></h2>
                <div class="mb-7"><?= $column_right['description'] ?></div>
                <div class="btn-wrap flex-wrap">
                    <?php if($column_right['button_1']['link'] !== '#'): ?>
                        <a href="<?= $column_right['button_1']['link']; ?>" target="<?= $column_right['button_1']['target']; ?>" class="btn flex-grow bg-primary text-white"><?= $column_right['button_1']['text']; ?></a>
                    <?php endif; ?>

                    <?php if($column_right['button_2']['link'] !== '#'): ?>
                        <a href="<?= $column_right['button_2']['link']; ?>" target="<?= $column_right['button_2']['target']; ?>" class="btn flex-grow bg-secondary text-black"><?= $column_right['button_2']['text']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
