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
            <div class="image-slider-container">
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

                <div class="section-content-item-full">
                    <div class="media gallery">
                        <article id="cc-slider">
                            <?php $im = 1;
                            foreach ($images as $image): $image = (object)$image; ?>
                                <input
                                    checked="<?php if ($im == 1): echo "checked"; endif; ?>"
                                    name="cc-slider"
                                    id="slide<?php echo $im; ?>"
                                    type="radio" />
                                <?php $im++; ?>
                            <?php endforeach; ?>

                            <div id="cc-slides">
                                <div id="overflow">
                                    <div class="inner">
                                        <?php foreach ($images as $image): $image = (object)$image; ?>
                                            <article>
                                                <div class="cctooltip">
                                                    <h3><?php echo $image->caption; ?></h3>
                                                </div>
                                                <img
                                                    src="<?php echo $image->url; ?>" />
                                            </article>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                            <div id="controls">
                                <?php $lb = 1;
                                foreach ($images as $image): $image = (object)$image; ?>
                                    <label for="slide<?php echo $lb; ?>"></label>
                                    <?php $lb++; endforeach; ?>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>

<?php endif; ?>


<?php get_footer(); ?>