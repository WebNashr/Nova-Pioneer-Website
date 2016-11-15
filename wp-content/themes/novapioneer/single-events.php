<?php
get_header();?>


<?php while(have_posts()): the_post(); ?>

<?php 

if(isset($_POST) && !empty($_POST)):
    novap_add_event_rsvp($_POST);
endif;

?>

    <article class="page">
        <header>
            <?php the_title(); ?>
        </header>
        <p><?php echo get_field('date'); ?></p>
        <section>
            <?php the_content(); ?>
        </section>
        <section>
            <form method="POST" autocomplete="off">
                <label> <strong>Name: </strong> </label>
                <input type="text" name="rsvp_name" required/><br/>
                <label> <strong>Email: </strong> </label>
                <input type="email" name="rsvp_email" required/><br/>
                <label> <strong>Attendance: </strong> </label>
                <input type="radio" name="rsvp_attendance" value="yes" required/> <label>Yes</label>
                <input type="radio" name="rsvp_attendance" value="maybe"  required/><label>Maybe</label><br/>
                <button type="submit">RSVP</button>
            </form>
        </section>
        
    </article>


<?php endwhile; ?>