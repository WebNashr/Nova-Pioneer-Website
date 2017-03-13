<?php
/**
 * Template Name: Open Positions
 */
get_header(); ?>

<section class="section trigger-offset">
    <article>
        <header class="article-header">
            <h1 class="nav-bar-below"><?php the_title(); ?></h1>
        </header>
        <iframe name="resumator-job-frame" id="resumator-job-frame" class="resumator-advanced-widget"
                src="//novaacademies.applytojob.com/apply/jobs/"  height="700px" width="100%" frameborder="0"
                allowTransparency="true" scrolling="yes"></iframe>
        <script>



                        function resizeResumatorIframe(height, nojump) {
                            if (nojump == 0) {
                                window.scrollTo(0, 0);
                            }
                            document.getElementById("resumator-job-frame").height = parseInt(height) + 20;
                        }
                    </script>

    </article>
</section>

<?php get_footer(); ?>
