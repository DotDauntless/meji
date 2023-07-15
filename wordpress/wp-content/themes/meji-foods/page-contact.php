<?php get_header() ?>

<?php the_content();


    if( have_rows('contact-us-top') ):
        get_template_part('./template-parts/blocks/contact-us-top/contact-us-top');

        endif;

        if( have_rows('contact-us-form') ):
    get_template_part('./template-parts/blocks/contact-us-form/contact-us-form');

endif;
        ?>

<?php get_footer() ?>
