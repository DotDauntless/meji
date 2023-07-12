<div class="testimony-wrapper">
    <div class="text">
        <h2>What people are saying</h2>
        <p>Meji Foods has inspired tens of people around the country to leave a testimonial after trying our products</p>
    </div>
<section class="testimony-section">
    <?php
    while( have_rows('testimony') ) : the_row();
        $sub_value = get_sub_field('item_2');
        ?>

        <div class="testimony-item" style="background-image: url('<?php echo $sub_value['testimony-bubble']?>')">
            <h4><?php echo $sub_value['h4-title']?></h4>
            <p><?php echo $sub_value['paragraph-testimony']?></p>
        </div>
    <?php endwhile; ?>
</section>

</div>
