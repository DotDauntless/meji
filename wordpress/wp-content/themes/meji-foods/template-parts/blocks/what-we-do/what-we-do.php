<div class="your-block-wrapper">
    <?php
    while( have_rows('what-we-do') ) : the_row();
    $sub_value = get_sub_field('item-3');
    ?>
    <div class="about-us-text">
        <h2><?php echo $sub_value['what-we-do-h2']?></h2>
        <p><?php echo $sub_value['what-we-do-p']?></p>
    </div>

    <section class="your-section">

            <div class="your-item">
                <img class="overlay-img" src="<?php echo $sub_value['overlay']; ?>">
                <img class="main-img" src="<?php echo $sub_value['spoon']; ?>">
            </div>
        <?php endwhile; ?>
    </section>
</div>
