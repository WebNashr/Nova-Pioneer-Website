<?php
/**
 * Template Name: About Page
 */
get_header(); ?>


<?php if( have_posts() ): ?>
<?php while( have_posts() ): the_post(); ?>
<div class="updates-2019">

    <div class="trigger"></div>

    <section class="section section-banner trigger-offset">
        <figure class="">
            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), '16-9-hero')[0]; ?>" alt="">

            <figcaption>
                <h1 class=""><?php the_field('alternate_title'); ?></h1>
                <p><?php the_field('alternate_description'); ?></p>
            </figcaption>
        </figure>
    </section>

    <section class="section section-video-side section-video-side-left">
        <div class="video-side-embed">
            <div class="media youtube-video">
                <?php the_field('vision_video_embed'); ?>
            </div>
        </div>

        <div class="video-side-text">
            <h3><?php the_field('vision_video_title'); ?></h3>
            <br>
            <?php the_field('vision_video_description'); ?>
        </div>
    </section>

    <div class="divider-rose">
        <svg xmlns="http://www.w3.org/2000/svg" width="195" height="46.819" viewBox="0 0 195 46.819">
            <g id="divider" transform="translate(0 -0.359)">
                <g id="Group_4_Copy_6" data-name="Group 4 Copy 6">
                <g id="logo-mark-white_copy_3" data-name="logo-mark-white copy 3" transform="translate(75)">
                    <g id="white" transform="translate(0.59 0.36)">
                    <path id="Shape" d="M18.628,46.819,5.246,38.949,0,33V16.943L2.726,9.58,16.7,1.514,24.467,0,38.145,8.072l5.143,6.149V30.168l-2.923,7.566L26.4,45.508l-7.77,1.311ZM9.9,18.325,6.373,20.351V38.017l12.52,7.365,5.3-.9-1.264-.75L9.9,36.014V18.325Zm1.375,12.64V35.23l12.282,7.278,2.615,1.549,13.088-7.285,2.01-5.2L27.217,39.4l-.336.187h-.005L26.2,39.58ZM38.386,10.5V27.484L32.8,30.375l-9.9,5.713L26.553,38.2l15.36-8.556V14.722ZM16.636,8.64h0L1.375,17.465V32.478L5,36.59V19.561l5.25-3.019L20.185,10.8,16.636,8.64Zm4.9,2.974h0L11.277,17.535V29.378L21.53,35.3l10.255-5.92V17.535L21.532,11.614ZM24.21,1.451,18.851,2.5l14.309,8.39V28.642l3.851-1.994V9Zm-7.555,5.59h0l4.7,2.866.527.321,9.909,5.722.025-4.257L16.932,2.964,3.842,10.522l-1.849,5L16.655,7.042Z" fill="#9b9b9b"/>
                    </g>
                </g>
                <rect id="Rectangle_3" data-name="Rectangle 3" width="48" height="1" transform="translate(147 24)" fill="#9b9b9b"/>
                <rect id="Rectangle_3_Copy" data-name="Rectangle 3 Copy" width="48" height="1" transform="translate(0 24)" fill="#9b9b9b"/>
                </g>
            </g>
        </svg>
    </div>

    <section class="section section-about-statements">
        <?php if(get_field('our_story')):?>
        <figure class="section-about-statements-item">
            <?php
                $image = get_sub_field('our_story_image');
                $size = '16-9-triplet';
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                }
            ?>

            <?php
                $img_id = get_field('our_story_image');
                $image = wp_get_attachment_image_src(get_field('our_story_image'), '16-9-triplet');
            ?>
            <img src="<?php echo esc_url( $image[0] ); ?>" alt="">

            <figcaption>
                <h4><?php the_field('our_story_title'); ?></h4>
                <?php the_field('our_story'); ?>
                <a href="<?php the_field('our_story_link'); ?>"><?php the_field('our_story_link_text'); ?></a>
            </figcaption>
        </figure>
        <?php endif;?>

        <?php if(get_field('our_mission')):?>
        <figure class="section-about-statements-item">
            <?php
                $image = get_sub_field('our_mission_image');
                $size = '16-9-triplet';
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                }
            ?>

            <?php
                $img_id = get_field('our_mission_image');
                $image = wp_get_attachment_image_src(get_field('our_mission_image'), '16-9-triplet');
            ?>
            <img src="<?php echo esc_url( $image[0] ); ?>" alt="">
            
            <figcaption>
                <h4><?php the_field('our_mission_title'); ?></h4>
                <?php the_field('our_mission'); ?>
                <a href="<?php the_field('our_mission_link'); ?>"><?php the_field('our_mission_link_text'); ?></a>
            </figcaption>
        </figure>
        <?php endif;?>

        <?php if(get_field('our_vision')):?>
        <figure class="section-about-statements-item">
            <?php
                $image = get_sub_field('our_vision_image');
                $size = '16-9-triplet';
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                }
            ?>

            <?php
                $img_id = get_field('our_vision_image');
                $image = wp_get_attachment_image_src(get_field('our_vision_image'), '16-9-triplet');
            ?>
            <img src="<?php echo esc_url( $image[0] ); ?>" alt="">
            
            
            <figcaption>
                <h4><?php the_field('our_vision_title'); ?></h4>
                <?php the_field('our_vision'); ?>
                <a href="<?php the_field('our_vision_link'); ?>"><?php the_field('our_vision_link_text'); ?></a>
            </figcaption>
        </figure>
        <?php endif;?>
    </section>

    <div class="divider-rose">
        <svg xmlns="http://www.w3.org/2000/svg" width="195" height="46.819" viewBox="0 0 195 46.819">
            <g id="divider" transform="translate(0 -0.359)">
                <g id="Group_4_Copy_6" data-name="Group 4 Copy 6">
                <g id="logo-mark-white_copy_3" data-name="logo-mark-white copy 3" transform="translate(75)">
                    <g id="white" transform="translate(0.59 0.36)">
                    <path id="Shape" d="M18.628,46.819,5.246,38.949,0,33V16.943L2.726,9.58,16.7,1.514,24.467,0,38.145,8.072l5.143,6.149V30.168l-2.923,7.566L26.4,45.508l-7.77,1.311ZM9.9,18.325,6.373,20.351V38.017l12.52,7.365,5.3-.9-1.264-.75L9.9,36.014V18.325Zm1.375,12.64V35.23l12.282,7.278,2.615,1.549,13.088-7.285,2.01-5.2L27.217,39.4l-.336.187h-.005L26.2,39.58ZM38.386,10.5V27.484L32.8,30.375l-9.9,5.713L26.553,38.2l15.36-8.556V14.722ZM16.636,8.64h0L1.375,17.465V32.478L5,36.59V19.561l5.25-3.019L20.185,10.8,16.636,8.64Zm4.9,2.974h0L11.277,17.535V29.378L21.53,35.3l10.255-5.92V17.535L21.532,11.614ZM24.21,1.451,18.851,2.5l14.309,8.39V28.642l3.851-1.994V9Zm-7.555,5.59h0l4.7,2.866.527.321,9.909,5.722.025-4.257L16.932,2.964,3.842,10.522l-1.849,5L16.655,7.042Z" fill="#9b9b9b"/>
                    </g>
                </g>
                <rect id="Rectangle_3" data-name="Rectangle 3" width="48" height="1" transform="translate(147 24)" fill="#9b9b9b"/>
                <rect id="Rectangle_3_Copy" data-name="Rectangle 3 Copy" width="48" height="1" transform="translate(0 24)" fill="#9b9b9b"/>
                </g>
            </g>
        </svg>
    </div>

    <section class="section section-culture-gallery">
        <h2 class="section-heading"><?php //the_field('school_gallery_title'); ?>Our culture</h2>
        <p><?php the_field('our_vision'); ?></p>

        <div class="section-culture-gallery-inner">
            <section class="section section-culture-gallery-show-XXX" style="display: none;">
                <?php foreach (get_field('culture_principles') as $principle): $principle = (object)$principle; ?>
                <figure>
                    <img
                        src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($principle->ID), '1-1-square')[0]; ?>"
                        alt="<?php echo $principle->title; ?>">
                </figure>
                <?php endforeach; ?>
                <?php wp_reset_query(); ?>
            </section>

            <section class="section section-culture-gallery-thumbs-XXX" style="display: none;">
                <?php foreach (get_field('culture_principles') as $principle): $principle = (object)$principle; ?>
                <figure>
                    <!--<img
                        src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($principle->ID), '1-1-square')[0]; ?>"
                        alt="<?php echo $principle->title; ?>">-->
                    <h3><?php echo $principle->title; ?></h3>
                    <?php echo $principle->description; ?>
                </figure>
                <?php endforeach; ?>
            </section>

            <section class="section section-culture-gallery-strike">
                <?php foreach (get_field('culture_principles') as $principle): $principle = (object)$principle; ?>
                <!--<figure>
                    <img
                        src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($principle->ID), '1-1-square')[0]; ?>"
                        alt="<?php echo $principle->title; ?>">

                    <figcaption>
                        <div class="principle-text">
                            <h6><?php echo $principle->number; ?></h6>
                            <h3><?php echo $principle->title; ?></h3>
                            <?php echo $principle->description; ?>
                        </div>

                        <div class="principle-thumbs"></div>
                    </figcaption>
                </figure>-->
                <?php endforeach; ?>
                <?php //wp_reset_query(); ?>


                <?php if( have_rows('culture_principles') ): ?>
                <?php while( have_rows('culture_principles') ): the_row();  ?>
                <figure>
                    <?php
                        $image = get_sub_field('image');
                        $size = '1-1-square';
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        }
                    ?>

                    <figcaption>
                        <div class="principle-text">
                            <h6>Principle <?php the_sub_field('number'); ?></h6>
                            <h3><?php the_sub_field('title'); ?></h3>
                            <?php the_sub_field('description'); ?>
                        </div>

                        <div class="principle-thumbs">

                        </div>
                    </figcaption>
                </figure>
                <?php endwhile; ?>
                <?php endif; ?>
            </section>

            
        </div>

        <div class="section-culture-gallery-inner section-culture-gallery-inner-ghost" style="display: none;">
            <section class="section section-culture-gallery-ghost">
                <?php if( have_rows('culture_principles') ): ?>
                <?php while( have_rows('culture_principles') ): the_row();  ?>
                <?php $gh = 0; ?>
                <figure data-count="<?php echo $gh; ?>">
                    <?php
                        $image = get_sub_field('image');
                        $size = '1-1-square';
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        }
                    ?>

                    <h5><?php the_sub_field('title'); ?></h5>
                </figure>
                <?php $gh++; ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </section>
        </div>
    </section>

    <div class="divider-rose">
        <svg xmlns="http://www.w3.org/2000/svg" width="195" height="46.819" viewBox="0 0 195 46.819">
            <g id="divider" transform="translate(0 -0.359)">
                <g id="Group_4_Copy_6" data-name="Group 4 Copy 6">
                <g id="logo-mark-white_copy_3" data-name="logo-mark-white copy 3" transform="translate(75)">
                    <g id="white" transform="translate(0.59 0.36)">
                    <path id="Shape" d="M18.628,46.819,5.246,38.949,0,33V16.943L2.726,9.58,16.7,1.514,24.467,0,38.145,8.072l5.143,6.149V30.168l-2.923,7.566L26.4,45.508l-7.77,1.311ZM9.9,18.325,6.373,20.351V38.017l12.52,7.365,5.3-.9-1.264-.75L9.9,36.014V18.325Zm1.375,12.64V35.23l12.282,7.278,2.615,1.549,13.088-7.285,2.01-5.2L27.217,39.4l-.336.187h-.005L26.2,39.58ZM38.386,10.5V27.484L32.8,30.375l-9.9,5.713L26.553,38.2l15.36-8.556V14.722ZM16.636,8.64h0L1.375,17.465V32.478L5,36.59V19.561l5.25-3.019L20.185,10.8,16.636,8.64Zm4.9,2.974h0L11.277,17.535V29.378L21.53,35.3l10.255-5.92V17.535L21.532,11.614ZM24.21,1.451,18.851,2.5l14.309,8.39V28.642l3.851-1.994V9Zm-7.555,5.59h0l4.7,2.866.527.321,9.909,5.722.025-4.257L16.932,2.964,3.842,10.522l-1.849,5L16.655,7.042Z" fill="#9b9b9b"/>
                    </g>
                </g>
                <rect id="Rectangle_3" data-name="Rectangle 3" width="48" height="1" transform="translate(147 24)" fill="#9b9b9b"/>
                <rect id="Rectangle_3_Copy" data-name="Rectangle 3 Copy" width="48" height="1" transform="translate(0 24)" fill="#9b9b9b"/>
                </g>
            </g>
        </svg>
    </div>

    <?php endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>

    <?php endif; ?>

    <div class="divider-rose">
        <svg xmlns="http://www.w3.org/2000/svg" width="195" height="46.819" viewBox="0 0 195 46.819">
            <g id="divider" transform="translate(0 -0.359)">
                <g id="Group_4_Copy_6" data-name="Group 4 Copy 6">
                <g id="logo-mark-white_copy_3" data-name="logo-mark-white copy 3" transform="translate(75)">
                    <g id="white" transform="translate(0.59 0.36)">
                    <path id="Shape" d="M18.628,46.819,5.246,38.949,0,33V16.943L2.726,9.58,16.7,1.514,24.467,0,38.145,8.072l5.143,6.149V30.168l-2.923,7.566L26.4,45.508l-7.77,1.311ZM9.9,18.325,6.373,20.351V38.017l12.52,7.365,5.3-.9-1.264-.75L9.9,36.014V18.325Zm1.375,12.64V35.23l12.282,7.278,2.615,1.549,13.088-7.285,2.01-5.2L27.217,39.4l-.336.187h-.005L26.2,39.58ZM38.386,10.5V27.484L32.8,30.375l-9.9,5.713L26.553,38.2l15.36-8.556V14.722ZM16.636,8.64h0L1.375,17.465V32.478L5,36.59V19.561l5.25-3.019L20.185,10.8,16.636,8.64Zm4.9,2.974h0L11.277,17.535V29.378L21.53,35.3l10.255-5.92V17.535L21.532,11.614ZM24.21,1.451,18.851,2.5l14.309,8.39V28.642l3.851-1.994V9Zm-7.555,5.59h0l4.7,2.866.527.321,9.909,5.722.025-4.257L16.932,2.964,3.842,10.522l-1.849,5L16.655,7.042Z" fill="#9b9b9b"/>
                    </g>
                </g>
                <rect id="Rectangle_3" data-name="Rectangle 3" width="48" height="1" transform="translate(147 24)" fill="#9b9b9b"/>
                <rect id="Rectangle_3_Copy" data-name="Rectangle 3 Copy" width="48" height="1" transform="translate(0 24)" fill="#9b9b9b"/>
                </g>
            </g>
        </svg>
    </div>
</div>

<script>
    jQuery(document).ready(function ($) {
        var readmoreCounter = 1;
        jQuery('.read-more-target-js p').hide();
        jQuery(".read-more-trigger-js").click(function (e) {
            console.log('default prevented');
            e.preventDefault();
            var collapse = $(this).data('collapse')
            readmoreCounter += 1 - 1;
            console.log(readmoreCounter++)
            var offset = 75; //Offset of 75px
            if (readmoreCounter % 2 === 0) {
                //  do some stuff if you want
                $(this).text('Read Less');

            }
            else {
                $(this).text('Read More');
                if (collapse == 'mission') {
                    jQuery('html, body').animate({
                        scrollTop: $('#mission-scroll').offset().top - offset
                    }, 2000);
                } else {
                    jQuery('html, body').animate({
                        scrollTop: $('#readmoreScroll').offset().top - offset
                    }, 2000);
                }

            }
            $('[data-collapse="' + collapse + '"] p').slideToggle("slow", function () {

            });

        });
    })
</script>


<!-- slick -->
<script type="text/javascript">
    (function ($) {
        $(document).ready(function () {
            $('.section-culture-gallery-show').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                dots: true,
                fade: true,
                asNavFor: '.section-culture-gallery-thumbs'
            });

            $('.section-culture-gallery-thumbs').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                asNavFor: '.section-culture-gallery-show',
                dots: false,
                centerMode: true,
                focusOnSelect: true
            });

            $('.section-culture-gallery-strike').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                dots: true,
                fade: true
                // asNavFor: '.section-culture-gallery-thumbed-out'
            });

            $('.section-culture-gallery-ghost').slick({
                slidesToShow: 6,
                slidesToScroll: 6,
                arrows: false,
                dots: false,
                fade: false
                // asNavFor: '.section-culture-gallery-strike'
            });

            $('.section-culture-gallery-ghost figure[data-slick-index=0] img').appendTo('.section-culture-gallery-strike .slick-dots li:nth-of-type(1)');
            $('.section-culture-gallery-ghost figure[data-slick-index=1] img').appendTo('.section-culture-gallery-strike .slick-dots li:nth-of-type(2)');
            $('.section-culture-gallery-ghost figure[data-slick-index=2] img').appendTo('.section-culture-gallery-strike .slick-dots li:nth-of-type(3)');
            $('.section-culture-gallery-ghost figure[data-slick-index=3] img').appendTo('.section-culture-gallery-strike .slick-dots li:nth-of-type(4)');
            $('.section-culture-gallery-ghost figure[data-slick-index=4] img').appendTo('.section-culture-gallery-strike .slick-dots li:nth-of-type(5)');
            $('.section-culture-gallery-ghost figure[data-slick-index=5] img').appendTo('.section-culture-gallery-strike .slick-dots li:nth-of-type(6)');

            $('.section-culture-gallery-ghost figure[data-slick-index=0] h5').appendTo('.section-culture-gallery-strike .slick-dots li:nth-of-type(1)');
            $('.section-culture-gallery-ghost figure[data-slick-index=1] h5').appendTo('.section-culture-gallery-strike .slick-dots li:nth-of-type(2)');
            $('.section-culture-gallery-ghost figure[data-slick-index=2] h5').appendTo('.section-culture-gallery-strike .slick-dots li:nth-of-type(3)');
            $('.section-culture-gallery-ghost figure[data-slick-index=3] h5').appendTo('.section-culture-gallery-strike .slick-dots li:nth-of-type(4)');
            $('.section-culture-gallery-ghost figure[data-slick-index=4] h5').appendTo('.section-culture-gallery-strike .slick-dots li:nth-of-type(5)');
            $('.section-culture-gallery-ghost figure[data-slick-index=5] h5').appendTo('.section-culture-gallery-strike .slick-dots li:nth-of-type(6)');
        });
    })(jQuery);
</script>


<?php get_footer(); ?>
