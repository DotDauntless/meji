
<section class="best-sellers">


        <section class="best-sellers">
            <?php
            while( have_rows('best-seller') ) : the_row();
                $sub_value = get_sub_field('item');
                ?>

                <div class="seller">
                    <div class="seller-image" style="background-image: url('<?php echo $sub_value['background-image']?>')">
                        <img src="<?php echo $sub_value['product-image']?>" />
                    </div>
                    <p><?php  echo $sub_value ["description"]; ?></p>
                    <a href="<?php echo $sub_value["button-link"]?>" class="button"> Shop now </a>

                </div>
            <?php endwhile; ?>
        </section>
</section>