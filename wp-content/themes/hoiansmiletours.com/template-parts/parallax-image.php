<?php
$title = get_the_title();
$description = rwmb_get_value('textarea_rqqb6h44gsn');
$images = rwmb_get_value('image_advanced_bow9yqyxcm');
$image = @Arr_first($images)['full_url'];
?>
<section id="page-title" class="page-title-wrap page-title-border-bottom page-title-size-lg page-title-margin"
         style="background-color: rgba(0, 0, 0, 0.5);">
    <div
            data-stellar-background-image="<?= $image ?>"
            data-stellar-background-position="center"
            data-stellar-background-ratio="0.5"
            class="page-title-parallax"
            style="background-image: url('<?= $image ?>'); background-position: 50% 800.5px;"
    ></div>
    <div class="container">
        <div class="page-title-inner text-center">
            <h1 class="p-font"><?= $title ?></h1>
            <p class="s-font"><?= $description ?></p>
        </div>
    </div>
</section>