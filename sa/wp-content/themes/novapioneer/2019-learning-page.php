<?php
/**
 * Template Name: Learning approach
 *
 */

get_header(); ?>


<div class="updates-2019">
<?php if( have_posts() ): ?>
<?php while( have_posts() ): the_post(); ?>
        <?php
            $introduction = get_field('introduction');
            $intro_cards = get_field('intro_cards');
            $education_stages = get_field('education_stages');
        ?>


        <section class="section section-banner">
            <figure class="">
                <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), '16-9-hero')[0]; ?>" alt="">

                <figcaption>
                    <h1 class=""><?php the_field('alternate_title'); ?></h1>
                    <?php //the_field('alternate_description'); ?>
                </figcaption>
            </figure>
        </section>


        <div class="trigger"></div>


        <section class="section section-learning-jump">
            <div class="section-learning-jump-container">
                <svg class="roselet" xmlns="http://www.w3.org/2000/svg" width="43.287" height="46.819" viewBox="0 0 43.287 46.819">
                    <g id="roselet" transform="translate(-0.59 -0.359)">
                        <g id="logo-mark-white_copy_2" data-name="logo-mark-white copy 2">
                            <g id="white" transform="translate(0.59 0.36)">
                                <path id="Shape" d="M18.628,46.819,5.246,38.949,0,33V16.943L2.726,9.58,16.7,1.514,24.467,0,38.145,8.072l5.143,6.149V30.168l-2.923,7.566L26.4,45.508l-7.77,1.311ZM9.9,18.325,6.373,20.351V38.017l12.52,7.365,5.3-.9-1.264-.75L9.9,36.014V18.325Zm1.375,12.64V35.23l12.282,7.278,2.615,1.549,13.088-7.285,2.01-5.2L27.217,39.4l-.336.187h-.005L26.2,39.58ZM38.386,10.5V27.484L32.8,30.375l-9.9,5.713L26.553,38.2l15.36-8.556V14.722ZM16.636,8.64h0L1.375,17.465V32.478L5,36.59V19.561l5.25-3.019L20.185,10.8,16.636,8.64Zm4.9,2.974h0L11.277,17.535V29.378L21.53,35.3l10.255-5.92V17.535L21.532,11.614ZM24.21,1.451,18.851,2.5l14.309,8.39V28.642l3.851-1.994V9Zm-7.555,5.59h0l4.7,2.866.527.321,9.909,5.722.025-4.257L16.932,2.964,3.842,10.522l-1.849,5L16.655,7.042Z" fill="#9b9b9b"/>
                            </g>
                        </g>
                    </g>
                </svg>

                <div class="jump-title">Jump to:</div>

                <?php if( have_rows('education_stages') ): ?>
                <?php while( have_rows('education_stages') ): the_row(); ?>
                    <?php $stage_link = get_sub_field('title'); ?>
                    <a class="jump-link-actual" href="#<?php echo strtolower($stage_link); ?>"><?php the_sub_field('title'); ?></a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>


        <?php if(have_rows('intro_cards')): ?>
        <section class="section section-learning-themes">
        <?php while(have_rows('intro_cards')): the_row(); ?>
            <figure class="learning-theme-item">
                <?php
                    $image = get_sub_field('image');
                    $size = '1-1-square';
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }
                ?>

                <figcaption>
                    <h5><?php the_sub_field('title'); ?></h5>
                    <?php the_sub_field('body'); ?>
                </figcaption>
            </figure>
        <?php endwhile; ?>
        </section>
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


        <?php if( have_rows('education_stages') ): ?>
        <?php while( have_rows('education_stages') ): the_row();  ?>
            <section class="section section-education-stage">
                <article class="anchor-link">
                    <?php $stage_link = get_sub_field('title'); ?>
                    <h2 id="<?php echo strtolower($stage_link); ?>"><?php the_sub_field('title'); ?></h2>
                    <?php the_sub_field('description'); ?>
                    <a class="button button-default button-blue-lt" href="<?php the_sub_field('link'); ?>" title="<?php the_sub_field('button'); ?>"><?php the_sub_field('button'); ?></a>

                    <div class="media youtube-video">
                        <?php the_sub_field('video'); ?>
                    </div>

                    <div class="section-education-testimonial">
                        <?php
                            $image = get_sub_field('testimonial_image');
                            $size = '1-1-square';
                            if( $image ) {
                                echo wp_get_attachment_image( $image, $size );
                            }
                        ?>

                        <div class="testimonial-text">
                            <blockquote><?php the_sub_field('testimonial_quote'); ?></blockquote>

                            <cite>
                                <span class="cite-by"><?php the_sub_field('testimonial_by'); ?></span>, 
                                <span class="cite-role"><?php the_sub_field('testimonial_role'); ?></span>
                            </cite>
                        </div>
                    </div>
                </article>
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
        <?php endif; ?>


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

<?php get_footer(); ?>



<!-- smooth scroll-->
<script>
    $('a[href^="#"]').on('click', function (event) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
</script>

