<?php
/**
 * Template Name: Tribe Events Template
 */
get_header();
?>

<?php if (have_posts()): ?>


    <?php if (is_single()): /* If single then we're looking at a single event */ ?>

        <?php get_template_part('includes/partials/content', 'single-event'); ?>

    <?php else: /* Not single so we're looking at the calendar page */ ?>

        <?php get_template_part('includes/partials/content', 'calendar'); ?>
    <?php endif; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>
<?php endif; ?>
    <script>
        $(document).ready(function () {
            var isScrollable =<?php echo isSegmentScrollable()?> ;
            $('#legend').find('a').each(function () {
                var newHref = $(this).attr('href') + '#tribe-events-content-wrapper';
                $(this).attr('href', newHref)
                console.log($(this).attr('href'));
                if (isScrollable) {
                    $('html, body').animate({
                        scrollTop: $('#tribe-events-content-wrapper').offset().top
                    }, 2000);
                    return false;
                }

            });

        });

    </script>
<?php get_footer(); ?>