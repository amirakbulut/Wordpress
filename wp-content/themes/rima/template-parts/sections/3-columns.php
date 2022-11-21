<?php

$column_1 = !empty(get_field('column_1')) ? get_field('column_1') : false;
$column_2 = !empty(get_field('column_2')) ? get_field('column_2') : false;
$column_3 = !empty(get_field('column_3')) ? get_field('column_3') : false;

?>

<section>
    <div class="grid grid-cols-1 lg:grid-cols-3 w-full">
        <div class="py-16 xl:px-24 lg:py-24 bg-primary-600 h-full">
            <div class="container lg:max-w-none flex flex-col justify-between h-full">
                <div class="lg:mb-4">
                    <?php if(!empty($column_1['title'])): ?>
                        <h2 class="text-white"><?= $column_1['title']; ?></h2>
                    <?php endif; ?>

                    <?php if(!empty($column_1['description'])): ?>
                        <div class="text-white">
                            <?= $column_1['description']; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if($column_1['btn_primary'] || $column_1['btn_secondary']): ?>
                    <div class="btn-wrap flex-wrap w-fit">
                        <?php if(!empty($column_1['btn_primary']['title'])): ?>
                            <a href="<?= $column_1['btn_primary']['url']; ?>" target="<?= $column_1['btn_primary']['target'] ?: '_self'; ?>" class="btn flex-grow btn-primary">
                                <?= $column_1['btn_primary']['title']; ?>
                            </a>
                        <?php endif; ?>

                        <?php if(!empty($column_1['btn_secondary']['title'])): ?>
                            <a href="<?= $column_1['btn_secondary']['url']; ?>" target="<?= $column_1['btn_secondary']['target'] ?: '_self'; ?>" class="btn flex-grow btn-primary-light">
                                <?= $column_1['btn_secondary']['title']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="py-16 xl:px-24 lg:py-24 bg-primary-100 h-full">
            <div class="container lg:max-w-none flex flex-col justify-between h-full">
                <div class="lg:mb-4">
                    <?php if(!empty($column_2['title'])): ?>
                        <h2><?= $column_2['title']; ?></h2>
                    <?php endif; ?>

                    <?php if(!empty($column_2['description'])): ?>
                        <div>
                            <?= $column_2['description']; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if($column_2['btn_primary'] || $column_2['btn_secondary']): ?>
                    <div class="btn-wrap flex-wrap w-fit">
                        <?php if(!empty($column_2['btn_primary']['title'])): ?>
                            <a href="<?= $column_2['btn_primary']['url']; ?>" target="<?= $column_2['btn_primary']['target'] ?: '_self'; ?>" class="btn flex-grow btn-primary">
                                <?= $column_2['btn_primary']['title']; ?>
                            </a>
                        <?php endif; ?>

                        <?php if(!empty($column_2['btn_secondary']['title'])): ?>
                            <a href="<?= $column_2['btn_secondary']['url']; ?>" target="<?= $column_2['btn_secondary']['target'] ?: '_self'; ?>" class="btn flex-grow btn-primary-light">
                                <?= $column_2['btn_secondary']['title']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="py-16 xl:px-24 lg:py-24 bg-primary-300 h-full">
            <div class="container lg:max-w-none flex flex-col justify-between h-full">
                <div class="lg:mb-4">
                    <?php if(!empty($column_3['title'])): ?>
                        <h2><?= $column_3['title']; ?></h2>
                    <?php endif; ?>

                    <?php if(!empty($column_3['description'])): ?>
                        <div>
                            <?= $column_3['description']; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if($column_3['btn_primary'] || $column_3['btn_secondary']): ?>
                    <div class="btn-wrap flex-wrap w-fit">
                        <?php if(!empty($column_3['btn_primary']['title'])): ?>
                            <a href="<?= $column_3['btn_primary']['url']; ?>" target="<?= $column_3['btn_primary']['target'] ?: '_self'; ?>" class="btn flex-grow btn-primary">
                                <?= $column_3['btn_primary']['title']; ?>
                            </a>
                        <?php endif; ?>

                        <?php if(!empty($column_3['btn_secondary']['title'])): ?>
                            <a href="<?= $column_3['btn_secondary']['url']; ?>" target="<?= $column_3['btn_secondary']['target'] ?: '_self'; ?>" class="btn flex-grow btn-primary-light">
                                <?= $column_3['btn_secondary']['title']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
