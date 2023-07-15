<div class="west-africa-wrapper">
    <?php
    while( have_rows('west-africa') ) : the_row();
        $sub_value = get_sub_field('item-5');
        ?>
        <section class="west-africa">
            <div class="west-africa-item">
                <img class="west-africa-img" src="<?php echo $sub_value['pepper-overlay']; ?>">
                <img class="west-africa-main-img" src="<?php echo $sub_value['pepper-image']; ?>">
            </div>
        </section>

        <div class="west-africa-text">
            <h2><?php echo $sub_value['west-africa-h2']?></h2>
            <p><?php echo $sub_value['west-africa-p']?></p>
        </div>
    <?php endwhile; ?>
</div>
