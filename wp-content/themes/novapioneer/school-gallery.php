<?php

/**
 *
 * Template Name: School Gallery
 *
 */
$current_gallery = $_GET['current'];
if( empty($current_gallery) ): $current_gallery = "classrooms"; endif;
get_header(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post();
        $images = novap_get_gallery_images($current_gallery); ?>
        <section class="section-pair section-gallery trigger-offset">
            <div class="slider-container">
                <div class="section-navigation">
                    <h2>Gallery</h2>
                    <nav class="gallery-nav">
                        <a href="<?php get_permalink(); ?>?current=school_grounds"
                           class="gallery-select <?php if ($current_gallery === 'school_grounds'): echo 'gallery-selected'; endif; ?>">School
                            grounds</a>
                        <a href="<?php get_permalink(); ?>?current=classrooms"
                           class="gallery-select <?php if ($current_gallery === 'classrooms'): echo 'gallery-selected'; endif; ?>">Classrooms</a>
                        <a href="<?php get_permalink(); ?>?current=library"
                           class="gallery-select <?php if ($current_gallery === 'library'): echo 'gallery-selected'; endif; ?>">Library</a>
                        <a href="<?php get_permalink(); ?>?current=play_area"
                           class="gallery-select <?php if ($current_gallery === 'play_area'): echo 'gallery-selected'; endif; ?>">Play
                            Area</a>
                    </nav>
                </div>


                <div class="section-content-item-full overflow-crop">
                  <div class="media gallery">
                    <ul id="slippry">
                      <?php $image_count = 0; ?>
                      <?php foreach ($images as $image): $image = (object)$image; $image_count++; ?>
                        <li>
                          <a href="#slide<?php echo $image_count; ?>">
                            <img src="<?php echo $image->url; ?>" alt="<?php echo $image->caption; ?>">
                          </a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                </div>
            </div>

        </section>


    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>
