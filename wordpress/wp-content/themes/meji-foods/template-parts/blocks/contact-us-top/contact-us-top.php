<div class="custom-block-wrapper">
    <?php
    while( have_rows('contact-us-top') ) : the_row();
        $sub_value = get_sub_field('item-6');
        ?>
        <div class="custom-block-item" style="background-image: url('<?php echo $sub_value['contact-us-top-bg']; ?>')">
            <img class="overlay-img" src="<?php echo $sub_value['contact-us-top-overlay']; ?>">
            <div class="custom-block-text">
                <h4><?php echo $sub_value['contact-us-top-h4']; ?></h4>
                <p><?php echo $sub_value['contact-us-top-p']; ?></p>
                <button>
                    <img src="<?php echo $sub_value['mail-icon']; ?>" alt="Mail Icon">
                    <?php echo $sub_value['contact-us-top-button']; ?>
                </button>
            </div>
        </div>
    <?php endwhile; ?>
</div>
