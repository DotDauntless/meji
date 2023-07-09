<?php
/**
 * Hero Block Template.
 *
 * @param    array        $block      The block settings and attributes.
 * @param    string       $content    The block inner HTML (empty).
 * @param    bool         $is_preview True during AJAX preview.
 * @param    (int|string) $post_id    The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$image = get_field('hero_image') ?: '';
$title = get_field('hero_title') ?: '';

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" style="background-image: url(<?php echo $image; ?>)">
    <h1 class="hero-title"><?php echo $title; ?></h1>
    <div class="svg-container">
        <svg xmlns="http://www.w3.org/2000/svg" width="1728" height="68" viewBox="0 0 1728 68" fill="none">
            <path d="M637 48.5641C373 73.7638 285 -3.19209 0 48.5641V68H1728V44.5429C1705.33 39.8514 1644 30.3345 1580 29.7984C1500 29.1282 1460 40.5216 1272 11.0327C1084 -18.4563 967 17.0645 637 48.5641Z" fill="white"/>
        </svg>
    </div>

</section>



