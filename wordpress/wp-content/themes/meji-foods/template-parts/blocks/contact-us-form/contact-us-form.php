<div class="contact-us-form-wrapper">
    <?php
    while( have_rows('contact-us-form') ) : the_row();
        $sub_value = get_sub_field('item-7');
        ?>
        <div class="contact-us-form-text">
            <h1><?php echo $sub_value['contact-us-form-h1']; ?></h1>
            <h4><?php echo $sub_value['contact-us-form-h4']; ?></h4>
            <p><?php echo $sub_value['contact-us-form-p1']; ?></p>
            <div class="spacing"></div>
            <h2><?php echo $sub_value['contact-us-form-h2']; ?></h2>
            <p><?php echo $sub_value['contact-us-form-p2']; ?></p>
        </div>

        <div class="contact-us-form-content">
            <form method="post">
                <div class="form-row">
                    <div class="form-group">
                        <h4>First Name</h4>
                        <input type="text" name="first-name" class="form-control">
                    </div>
                    <div class="form-group">
                        <h4>Last Name</h4>
                        <input type="text" name="last-name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <h4>Email</h4>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <h4>Subject</h4>
                    <input type="text" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <h4>Message</h4>
                    <textarea name="message" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>

    <?php endwhile; ?>
</div>
