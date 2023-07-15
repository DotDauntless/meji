<?php

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {
    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // hero block
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('A custom hero block.'),
            'render_template'   => 'template-parts/blocks/hero/hero.php',
            'category'          => 'formatting',
            'icon'              => 'admin-users',
            'keywords'          => array( 'hero', 'image', 'title' ),
            'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/hero/hero_section.css',
        ));
    }

    acf_register_block_type(array(
        'name'              => 'best_sellers',
        'title'             => __('Best Sellers'),
        'description'       => __('A custom best sellers block.'),
        'render_template'   => 'template-parts/blocks/best-sellers/best-sellers.php',
        'category'          => 'formatting',
        'icon'              => 'admin-users',
        'keywords'          => array( 'best', 'sellers', 'image', 'text' ),
        'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/best-sellers/best-sellers.css',
    ));

}

add_action('acf/init', 'my_acf_add_local_field_groups');
function my_acf_add_local_field_groups() {
    if( function_exists('acf_add_local_field_group') ) {

        //  hero field group
        acf_add_local_field_group(array(
            'key' => 'group_hero',
            'title' => 'Hero Fields',
            'fields' => array (
                array (
                    'key' => 'field_hero_image',
                    'label' => 'Hero Image',
                    'name' => 'hero_image',
                    'type' => 'image',
                    'return_format' => 'url',
                    'preview_size' => 'full',
                ),
                array (
                    'key' => 'field_hero_title',
                    'label' => 'Hero Title',
                    'name' => 'hero_title',
                    'type' => 'text',
                ),
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/hero',
                    ),
                ),
            ),
        ));

        // best sellers field group
        $best_sellers_fields = array();

        // loop for four times to create fields for 4 images, texts, buttons, and background images
        for ($i = 1; $i <= 4; $i++) {
            $best_sellers_fields[] = array (
                'key' => 'field_seller_image_' . $i,
                'label' => 'Seller Image ' . $i,
                'name' => 'seller_image_' . $i,
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'full',
            );
            $best_sellers_fields[] = array (
                'key' => 'field_seller_bg_image_' . $i,
                'label' => 'Seller Background Image ' . $i,
                'name' => 'seller_bg_image_' . $i,
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'full',
            );
            $best_sellers_fields[] = array (
                'key' => 'field_seller_text_' . $i,
                'label' => 'Seller Text ' . $i,
                'name' => 'seller_text_' . $i,
                'type' => 'text',
            );
            $best_sellers_fields[] = array (
                'key' => 'field_seller_button_' . $i,
                'label' => 'Seller Button ' . $i,
                'name' => 'seller_button_' . $i,
                'type' => 'text',
            );
        }

        // ...
    }
}


function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );






function zest_styles() {
    wp_enqueue_style( 'header-style', get_theme_file_uri("./css/header.css"));
    wp_enqueue_style('footer-style', get_theme_file_uri('./css/footer.css'));
    wp_enqueue_style('image_with_text-style', get_theme_file_uri('./css/front-page.css'));
    wp_enqueue_style('hero', get_theme_file_uri('./template-parts/blocks/hero/hero_section.css'));
    wp_enqueue_style('best-sellers', get_theme_file_uri('./template-parts/blocks/best-sellers/best-sellers.css'));
    wp_enqueue_style('testimony', get_theme_file_uri('./template-parts/blocks/testimony/testimony.css'));
    wp_enqueue_style('what-we-do', get_theme_file_uri('./template-parts/blocks/what-we-do/what-we-do.css'));
    wp_enqueue_style('how-about-us', get_theme_file_uri('./template-parts/blocks/how-about-us/how-about-us.css'));
    wp_enqueue_style('west-africa', get_theme_file_uri('./template-parts/blocks/west-africa/west-africa.css'));
    wp_enqueue_style('contact-us-top', get_theme_file_uri('./template-parts/blocks/contact-us-top/contact-us-top.css'));
    wp_enqueue_style('contact-us-form', get_theme_file_uri('./template-parts/blocks/contact-us-form/contact-us-form.css'));
    wp_enqueue_style('single-product', get_theme_file_uri('./woocommerce/single-product.css'));



}
add_action( 'wp_enqueue_scripts', 'zest_styles' );