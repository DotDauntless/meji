<?php
get_header()
?>

<?php the_content();


    if( have_rows('best-seller') ):
        get_template_part('./template-parts/blocks/best-sellers/best-sellers');

        endif;
 if( have_rows('testimony') ):
    get_template_part('./template-parts/blocks/testimony/testimony');

endif;


            ?>
<?php get_footer() ?>