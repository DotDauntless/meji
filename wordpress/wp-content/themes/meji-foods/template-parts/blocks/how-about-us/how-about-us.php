<div class="how-about-us-wrapper">
    <?php
    while( have_rows('how-about-us') ) : the_row();
        $sub_value = get_sub_field('item-4');

        $h2_text = get_sub_field('how-about-us-h2');
        $p_text = get_sub_field('how-about-us-p');
        ?>
        <div class="how-about-us-text-content">
            <h2><?php echo $sub_value['how-about-us-h2']?></h2>
            <p><?php echo $sub_value['how-about-us-p']?></p>
        </div>
    <?php endwhile; ?>
</div>
