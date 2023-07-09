<?php
// Load values and assign defaults.
$images = [];
$texts = [];
$buttons = [];
$bg_images = [];
for ($i = 1; $i <= 4; $i++) {
    $images[] = get_field('seller_image_' . $i) ?: '';
    $texts[] = get_field('seller_text_' . $i) ?: '';
    $buttons[] = get_field('seller_button_' . $i) ?: '';
    $bg_images[] = get_field('seller_bg_image_' . $i) ?: ''; // new field for background images
}
?>

<section class="best-sellers">
    <?php for ($i = 0; $i < 4; $i++): ?>
        <div class="seller" style="background-image: url('<?php echo $bg_images[$i]; ?>')">
            <img src="<?php echo $images[$i]; ?>" alt="Seller Image <?php echo ($i + 1); ?>">
            <p><?php echo $texts[$i]; ?></p>
            <button><?php echo $buttons[$i]; ?></button>
        </div>
    <?php endfor; ?>
</section>
