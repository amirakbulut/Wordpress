<?php

$unique_id = $args['id'];
$header_tag = $args['block-index'] == 1 ? 'h1' : 'h2';

$section_color = !empty(get_sub_field('section_color')) ? 'background-color:' . get_sub_field('section_color') . ';' : false;

$pre_title = !empty(get_sub_field('pre_title')) ? get_sub_field('pre_title') : false;
$pre_title_color = !empty(get_sub_field('pre_title_color')) ? 'color:' . get_sub_field('pre_title_color') . ';' : false;

$title = !empty(get_sub_field('title')) ? get_sub_field('title') : false;
$title_color = !empty(get_sub_field('title_color')) ? 'color: ' . get_sub_field('title_color') . ';' : false;

$description = !empty(get_sub_field('description')) ? get_sub_field('description') : false;
$description_color = !empty(get_sub_field('description_color')) ? 'color: ' . get_sub_field('description_color') . ';' : false;

$button_1 = [
   'text' => !empty(get_sub_field('button_1')['title']) ? get_sub_field('button_1')['title'] : 'Meer informatie',
   'link' => !empty(get_sub_field('button_1')['url']) ? get_sub_field('button_1')['url'] : '#',
   'target' => !empty(get_sub_field('button_1')['target']) ? get_sub_field('button_1')['target'] : '_self',
   'style' => [
       'background-color' => !empty(get_sub_field('button_1_style')['background_color']) ? 'background-color:' . get_sub_field('button_1_style')['background_color'] . ';' : false,
       'text-color' => !empty(get_sub_field('button_1_style')['text_color']) ? 'color:' . get_sub_field('button_1_style')['text_color'] . ';' : false,
   ]
];

$button_2 = [
   'text' => !empty(get_sub_field('button_2')['title']) ? get_sub_field('button_2')['title'] : 'Meer informatie',
   'link' => !empty(get_sub_field('button_2')['url']) ? get_sub_field('button_2')['url'] : '#',
   'target' => !empty(get_sub_field('button_2')['target']) ? get_sub_field('button_2')['target'] : '_self',
   'style' => [
       'background-color' => !empty(get_sub_field('button_2_style')['background_color']) ? 'background-color:' . get_sub_field('button_2_style')['background_color'] . ';' : false,
       'text-color' => !empty(get_sub_field('button_2_style')['text_color']) ? 'color:' . get_sub_field('button_2_style')['text_color'] . ';' : false,
   ]
];

$svg_color = !empty(get_sub_field('svg_color')) ? 'color: ' . get_sub_field('svg_color') . ';' : false;

$media_1 = !empty(get_sub_field('media')) ? get_sub_field('media') : false;
$media_2 = !empty(get_sub_field('media_2')) ? get_sub_field('media_2') : false;
$media_3 = !empty(get_sub_field('media_3')) ? get_sub_field('media_3') : false;

$reorder = !empty(get_sub_field('reorder')) ? get_sub_field('reorder') : false;
$extra_classes = !empty(get_sub_field('extra_classes')) ? get_sub_field('extra_classes') : false;
$margin_before = !empty(get_sub_field('margin_before')) ? 'mt-32' : false;
$margin_after = !empty(get_sub_field('margin_after')) ? 'mb-32' : false;

$classes = implode(' ', [
    $extra_classes,
    $margin_before,
    $margin_after
]);

?>

<section id="<?= $unique_id; ?>" style="<?= $section_color; ?>" class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden <?= $classes; ?>">
   <div class="container">
      <div class="flex flex-wrap justify-between items-center -mx-4">
         <div class="w-full lg:w-6/12 px-4 <?= $reorder ? 'order-2' : false; ?>">
            <div class="flex items-center -mx-3 sm:-mx-4">
               <div class="w-full xl:w-1/2 px-3 sm:px-4">

                  <?php if($media_1 && $media_1['type'] == 'image'): ?>
                     <div class="py-3 sm:py-4">
                        <img srcset="<?= $media_1['sizes']['rima-thumb']; ?>" alt="<?= $media_1['alt']; ?>" class="rounded-2xl w-full aspect-[1/1.1] object-cover"></img>
                     </div>
                  <?php elseif($media_1 && $media_1['type'] == 'video'): ?>
                     <div class="py-3 sm:py-4">
                       <video src="<?= $media_1['url']; ?>" alt="<?= $media_1['alt']; ?>" class="rounded-2xl w-full aspect-[1/1.1] object-cover" muted autoplay loop playsInline></video>
                     </div>
                  <?php endif; ?>

                  <?php if($media_2 && $media_2['type'] == 'image'): ?>
                     <div class="py-3 sm:py-4">
                        <img srcset="<?= $media_2['sizes']['rima-thumb']; ?>" alt="<?= $media_2['alt']; ?>" class="rounded-2xl w-full aspect-[1/1.1] object-cover"></img>
                     </div>
                  <?php elseif($media && $media['type'] == 'video'): ?>
                     <div class="py-3 sm:py-4">
                       <video src="<?= $media_2['url']; ?>" alt="<?= $media_2['alt']; ?>" class="rounded-2xl w-full aspect-[1/1.1] object-cover" muted autoplay loop playsInline></video>
                     </div>
                  <?php endif; ?>
                  </div>
                  <?php if($media_3 && $media_3['type'] == 'image'): ?>

                     
                     <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="my-4 relative z-10">
                           <img srcset="<?= $media_3['sizes']['rima-thumb']; ?>" alt="<?= $media_3['alt']; ?>" class="rounded-2xl w-full aspect-[1/1.1] object-cover"></img>
                           <span class="absolute -right-7 -bottom-7 z-[-1]" style="<?= $svg_color; ?>">
                              <svg
                                 width="134"
                                 height="106"
                                 viewBox="0 0 134 106"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <circle
                                    cx="1.66667"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 1.66667 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="16.3333"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 16.3333 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="31"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 31 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="45.6667"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 45.6667 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="60.3334"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 60.3334 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="88.6667"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 88.6667 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="117.667"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 117.667 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="74.6667"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 74.6667 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="103"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 103 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="132"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 132 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="1.66667"
                                    cy="89.3333"
                                    r="1.66667"
                                    transform="rotate(-90 1.66667 89.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="16.3333"
                                    cy="89.3333"
                                    r="1.66667"
                                    transform="rotate(-90 16.3333 89.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="31"
                                    cy="89.3333"
                                    r="1.66667"
                                    transform="rotate(-90 31 89.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="45.6667"
                                    cy="89.3333"
                                    r="1.66667"
                                    transform="rotate(-90 45.6667 89.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="60.3333"
                                    cy="89.3338"
                                    r="1.66667"
                                    transform="rotate(-90 60.3333 89.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="88.6667"
                                    cy="89.3338"
                                    r="1.66667"
                                    transform="rotate(-90 88.6667 89.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="117.667"
                                    cy="89.3338"
                                    r="1.66667"
                                    transform="rotate(-90 117.667 89.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="74.6667"
                                    cy="89.3338"
                                    r="1.66667"
                                    transform="rotate(-90 74.6667 89.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="103"
                                    cy="89.3338"
                                    r="1.66667"
                                    transform="rotate(-90 103 89.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="132"
                                    cy="89.3338"
                                    r="1.66667"
                                    transform="rotate(-90 132 89.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="1.66667"
                                    cy="74.6673"
                                    r="1.66667"
                                    transform="rotate(-90 1.66667 74.6673)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="1.66667"
                                    cy="31.0003"
                                    r="1.66667"
                                    transform="rotate(-90 1.66667 31.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="16.3333"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 16.3333 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="16.3333"
                                    cy="31.0003"
                                    r="1.66667"
                                    transform="rotate(-90 16.3333 31.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="31"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 31 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="31"
                                    cy="31.0003"
                                    r="1.66667"
                                    transform="rotate(-90 31 31.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="45.6667"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 45.6667 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="45.6667"
                                    cy="31.0003"
                                    r="1.66667"
                                    transform="rotate(-90 45.6667 31.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="60.3333"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 60.3333 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="60.3333"
                                    cy="30.9998"
                                    r="1.66667"
                                    transform="rotate(-90 60.3333 30.9998)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="88.6667"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 88.6667 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="88.6667"
                                    cy="30.9998"
                                    r="1.66667"
                                    transform="rotate(-90 88.6667 30.9998)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="117.667"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 117.667 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="117.667"
                                    cy="30.9998"
                                    r="1.66667"
                                    transform="rotate(-90 117.667 30.9998)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="74.6667"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 74.6667 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="74.6667"
                                    cy="30.9998"
                                    r="1.66667"
                                    transform="rotate(-90 74.6667 30.9998)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="103"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 103 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="103"
                                    cy="30.9998"
                                    r="1.66667"
                                    transform="rotate(-90 103 30.9998)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="132"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 132 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="132"
                                    cy="30.9998"
                                    r="1.66667"
                                    transform="rotate(-90 132 30.9998)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="1.66667"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 1.66667 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="1.66667"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 1.66667 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="16.3333"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 16.3333 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="16.3333"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 16.3333 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="31"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 31 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="31"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 31 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="45.6667"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 45.6667 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="45.6667"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 45.6667 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="60.3333"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 60.3333 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="60.3333"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 60.3333 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="88.6667"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 88.6667 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="88.6667"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 88.6667 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="117.667"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 117.667 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="117.667"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 117.667 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="74.6667"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 74.6667 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="74.6667"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 74.6667 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="103"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 103 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="103"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 103 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="132"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 132 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="132"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 132 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="1.66667"
                                    cy="45.3333"
                                    r="1.66667"
                                    transform="rotate(-90 1.66667 45.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="1.66667"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 1.66667 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="16.3333"
                                    cy="45.3333"
                                    r="1.66667"
                                    transform="rotate(-90 16.3333 45.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="16.3333"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 16.3333 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="31"
                                    cy="45.3333"
                                    r="1.66667"
                                    transform="rotate(-90 31 45.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="31"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 31 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="45.6667"
                                    cy="45.3333"
                                    r="1.66667"
                                    transform="rotate(-90 45.6667 45.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="45.6667"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 45.6667 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="60.3333"
                                    cy="45.3338"
                                    r="1.66667"
                                    transform="rotate(-90 60.3333 45.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="60.3333"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 60.3333 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="88.6667"
                                    cy="45.3338"
                                    r="1.66667"
                                    transform="rotate(-90 88.6667 45.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="88.6667"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 88.6667 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="117.667"
                                    cy="45.3338"
                                    r="1.66667"
                                    transform="rotate(-90 117.667 45.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="117.667"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 117.667 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="74.6667"
                                    cy="45.3338"
                                    r="1.66667"
                                    transform="rotate(-90 74.6667 45.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="74.6667"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 74.6667 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="103"
                                    cy="45.3338"
                                    r="1.66667"
                                    transform="rotate(-90 103 45.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="103"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 103 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="132"
                                    cy="45.3338"
                                    r="1.66667"
                                    transform="rotate(-90 132 45.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="132"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 132 1.66683)"
                                    fill="currentColor"
                                    />
                              </svg>
                           </span>
                        </div>
                     </div>
               
                  <?php elseif($media_3 && $media_3['type'] == 'video'): ?>
                     <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="my-4 relative z-10">
                           <video src="<?= $media_3['url']; ?>" alt="<?= $media_3['alt']; ?>" class="rounded-2xl w-full  aspect-[1/1.1] object-cover" muted autoplay loop playsInline></video>
                           <span class="absolute -right-7 -bottom-7 z-[-1]" style="<?= $svg_color; ?>">
                              <svg
                                 width="134"
                                 height="106"
                                 viewBox="0 0 134 106"
                                 fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <circle
                                    cx="1.66667"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 1.66667 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="16.3333"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 16.3333 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="31"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 31 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="45.6667"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 45.6667 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="60.3334"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 60.3334 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="88.6667"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 88.6667 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="117.667"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 117.667 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="74.6667"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 74.6667 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="103"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 103 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="132"
                                    cy="104"
                                    r="1.66667"
                                    transform="rotate(-90 132 104)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="1.66667"
                                    cy="89.3333"
                                    r="1.66667"
                                    transform="rotate(-90 1.66667 89.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="16.3333"
                                    cy="89.3333"
                                    r="1.66667"
                                    transform="rotate(-90 16.3333 89.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="31"
                                    cy="89.3333"
                                    r="1.66667"
                                    transform="rotate(-90 31 89.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="45.6667"
                                    cy="89.3333"
                                    r="1.66667"
                                    transform="rotate(-90 45.6667 89.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="60.3333"
                                    cy="89.3338"
                                    r="1.66667"
                                    transform="rotate(-90 60.3333 89.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="88.6667"
                                    cy="89.3338"
                                    r="1.66667"
                                    transform="rotate(-90 88.6667 89.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="117.667"
                                    cy="89.3338"
                                    r="1.66667"
                                    transform="rotate(-90 117.667 89.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="74.6667"
                                    cy="89.3338"
                                    r="1.66667"
                                    transform="rotate(-90 74.6667 89.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="103"
                                    cy="89.3338"
                                    r="1.66667"
                                    transform="rotate(-90 103 89.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="132"
                                    cy="89.3338"
                                    r="1.66667"
                                    transform="rotate(-90 132 89.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="1.66667"
                                    cy="74.6673"
                                    r="1.66667"
                                    transform="rotate(-90 1.66667 74.6673)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="1.66667"
                                    cy="31.0003"
                                    r="1.66667"
                                    transform="rotate(-90 1.66667 31.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="16.3333"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 16.3333 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="16.3333"
                                    cy="31.0003"
                                    r="1.66667"
                                    transform="rotate(-90 16.3333 31.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="31"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 31 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="31"
                                    cy="31.0003"
                                    r="1.66667"
                                    transform="rotate(-90 31 31.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="45.6667"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 45.6667 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="45.6667"
                                    cy="31.0003"
                                    r="1.66667"
                                    transform="rotate(-90 45.6667 31.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="60.3333"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 60.3333 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="60.3333"
                                    cy="30.9998"
                                    r="1.66667"
                                    transform="rotate(-90 60.3333 30.9998)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="88.6667"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 88.6667 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="88.6667"
                                    cy="30.9998"
                                    r="1.66667"
                                    transform="rotate(-90 88.6667 30.9998)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="117.667"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 117.667 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="117.667"
                                    cy="30.9998"
                                    r="1.66667"
                                    transform="rotate(-90 117.667 30.9998)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="74.6667"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 74.6667 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="74.6667"
                                    cy="30.9998"
                                    r="1.66667"
                                    transform="rotate(-90 74.6667 30.9998)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="103"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 103 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="103"
                                    cy="30.9998"
                                    r="1.66667"
                                    transform="rotate(-90 103 30.9998)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="132"
                                    cy="74.6668"
                                    r="1.66667"
                                    transform="rotate(-90 132 74.6668)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="132"
                                    cy="30.9998"
                                    r="1.66667"
                                    transform="rotate(-90 132 30.9998)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="1.66667"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 1.66667 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="1.66667"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 1.66667 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="16.3333"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 16.3333 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="16.3333"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 16.3333 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="31"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 31 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="31"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 31 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="45.6667"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 45.6667 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="45.6667"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 45.6667 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="60.3333"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 60.3333 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="60.3333"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 60.3333 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="88.6667"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 88.6667 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="88.6667"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 88.6667 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="117.667"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 117.667 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="117.667"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 117.667 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="74.6667"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 74.6667 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="74.6667"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 74.6667 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="103"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 103 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="103"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 103 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="132"
                                    cy="60.0003"
                                    r="1.66667"
                                    transform="rotate(-90 132 60.0003)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="132"
                                    cy="16.3333"
                                    r="1.66667"
                                    transform="rotate(-90 132 16.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="1.66667"
                                    cy="45.3333"
                                    r="1.66667"
                                    transform="rotate(-90 1.66667 45.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="1.66667"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 1.66667 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="16.3333"
                                    cy="45.3333"
                                    r="1.66667"
                                    transform="rotate(-90 16.3333 45.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="16.3333"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 16.3333 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="31"
                                    cy="45.3333"
                                    r="1.66667"
                                    transform="rotate(-90 31 45.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="31"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 31 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="45.6667"
                                    cy="45.3333"
                                    r="1.66667"
                                    transform="rotate(-90 45.6667 45.3333)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="45.6667"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 45.6667 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="60.3333"
                                    cy="45.3338"
                                    r="1.66667"
                                    transform="rotate(-90 60.3333 45.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="60.3333"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 60.3333 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="88.6667"
                                    cy="45.3338"
                                    r="1.66667"
                                    transform="rotate(-90 88.6667 45.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="88.6667"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 88.6667 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="117.667"
                                    cy="45.3338"
                                    r="1.66667"
                                    transform="rotate(-90 117.667 45.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="117.667"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 117.667 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="74.6667"
                                    cy="45.3338"
                                    r="1.66667"
                                    transform="rotate(-90 74.6667 45.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="74.6667"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 74.6667 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="103"
                                    cy="45.3338"
                                    r="1.66667"
                                    transform="rotate(-90 103 45.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="103"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 103 1.66683)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="132"
                                    cy="45.3338"
                                    r="1.66667"
                                    transform="rotate(-90 132 45.3338)"
                                    fill="currentColor"
                                    />
                                 <circle
                                    cx="132"
                                    cy="1.66683"
                                    r="1.66667"
                                    transform="rotate(-90 132 1.66683)"
                                    fill="currentColor"
                                    />
                              </svg>
                           </span>
                        </div>
                     </div>
                  <?php endif; ?>
               
            </div>
         </div>
         <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
            <div class="mt-10 lg:mt-0">
               <?php if($pre_title): ?>
                  <span class="font-medium text-lg mb-1 block" style="<?= $pre_title_color; ?>">
                     <?= $pre_title; ?>
                  </span>
               <?php endif; ?>

               <?php
                    if($title):
                        echo "<$header_tag class='". ($args['block-index'] == 1 ? 'lg:text-[2.6rem] xl:text-[3rem]' : false) ."' style='$title_color'>$title</$header_tag>";
                    endif;
                ?>

               <?php if($description): ?>
                  <div class="mb-7" style="<?= $description_color; ?>"><?= $description; ?></div>
               <?php endif; ?>

               <div class="btn-wrap flex-wrap">
                    <?php if($button_1['link'] !== '#'): ?>
                        <a href="<?= $button_1['link']; ?>" target="<?= $button_1['target']; ?>" style="<?= $button_1['style']['background-color'] . $button_1['style']['text-color']; ?>" class="btn flex-grow"><?= $button_1['text']; ?></a>
                    <?php endif; ?>

                    <?php if($button_2['link'] !== '#'): ?>
                        <a href="<?= $button_2['link']; ?>" target="<?= $button_2['target']; ?>" style="<?= $button_2['style']['background-color'] . $button_2['style']['text-color']; ?>" class="btn flex-grow"><?= $button_1['text']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
         </div>
      </div>
   </div>
</section>