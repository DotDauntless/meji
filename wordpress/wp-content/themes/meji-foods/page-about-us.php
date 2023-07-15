<?php
get_header()
?>
<?php the_content();


    if( have_rows('what-we-do') ):
        get_template_part('./template-parts/blocks/what-we-do/what-we-do');

        endif;


    if( have_rows('how-about-us') ):
    get_template_part('./template-parts/blocks/how-about-us/how-about-us');

    endif;

    if( have_rows('west-africa') ):
    get_template_part('./template-parts/blocks/west-africa/west-africa');

    endif;


?>



<?php get_footer() ?>
