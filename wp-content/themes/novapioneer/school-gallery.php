<?php

/**
 *
 * Template Name: School Gallery
 *
 */
$current_gallery = $_GET['current'];
get_header(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post();
        $images = novap_get_gallery_images($current_gallery); ?>
        <?php //wp_die( var_dump( $images ) ); ?>
        <section class="section-pair section-gallery trigger-offset">
            <div class="slider-container">
                <div class="section-navigation">
                    <h2>Gallery</h2>
                    <nav class="gallery-nav">
                      <a href="" class="gallery-select" title="">School grounds</a>
                      <a href="" class="gallery-select gallery-selected" title="">Classrooms</a>
                      <a href="" class="gallery-select" title="">Library</a>
                      <a href="" class="gallery-select" title="">Play Area</a>
                    </nav>
                </div>


                <div class="section-content-item-full overflow-crop">
                  <div class="media gallery">
                    <ul id="slippry">
                      <li>
                        <a href="#slide1"><img src="/wp-content/uploads/2016/12/slide-1.jpg" alt="this is a caption"></a>
                      </li>
                      <li>
                        <a href="#slide2"><img src="/wp-content/uploads/2016/12/slide-2.jpg"  alt="another caption"></a>
                      </li>
                      <li>
                        <a href="#slide3"><img src="/wp-content/uploads/2016/12/slide-3.jpg" alt="one more caption"></a>
                      </li>
                    </ul>
                </div>
            </div>

        </section>


    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>
