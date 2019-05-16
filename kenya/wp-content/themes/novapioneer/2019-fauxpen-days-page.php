<?php
/**
 * Template Name: Fauxpen Days Page
 */
get_header(); ?>


<?php //if( have_posts() ): ?>
<?php //while( have_posts() ): the_post(); ?>
<div class="updates-2019">

    <div class="trigger"></div>

    <section class="section section-banner trigger-offset">
        <figure class="">
            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($school->ID), '16-9-hero')[0]; ?>" alt="">

            <figcaption class="">
                <h1 class="">Open Days</h1>
            </figcaption>
        </figure>
    </section>


    <?php
        $args = array(
            'post_type' => 'post',
            'post_status'=>'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'showposts' => 15,
            'posts_per_page' => 15
        );

        $blog_latest_loop = new WP_Query($args);
    ?>
    <?php if ($blog_latest_loop->have_posts()): ?>

    <section class="section section-blog section-open-days">
        <?php while ($blog_latest_loop->have_posts()) : $blog_latest_loop->the_post(); ?>
        <figure class="section-open-day-item">
            <a class="open-day-img" href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), '16-9-triplet')[0]; ?>">
            </a>

            <figcaption>
                <?php $categories = get_the_category(); ?>
                <?php foreach($categories as $category): ?>
                <h6>
                    <a href="<?php echo get_category_link( $category->cat_ID ); ?>" title=""><?php echo $category->name; ?></a>
                </h6>
                <?php endforeach; ?>

                <h4>
                    <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h4>

                <?php the_excerpt(); ?>
            </figcaption>
        </figure>
        <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>
    </section>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>


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

    <?php //endwhile; ?>

    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>

    <?php //endif; ?>

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
