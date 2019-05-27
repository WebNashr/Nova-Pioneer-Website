<?php
/**
 * Template Name: Blog Home Page
 */
get_header(); ?>


<?php //if( have_posts() ): ?>
<?php //while( have_posts() ): the_post(); ?>
<div class="updates-2019">

        <div class="trigger"></div>

        <section class="section section-blog-category trigger-offset">
            <h1 class=""><?php the_field('alternate_title'); ?></h1>

            <a href="" title="">
                All blog articles
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>arrow-right-1</title><path d="M17.586 11l-5.293-5.293a1 1 0 1 1 1.414-1.414l7 7c.63.63.184 1.707-.707 1.707H4a1 1 0 0 1 0-2h13.586zm-.75 3.253a1 1 0 1 1 1.328 1.494l-4.5 4a1 1 0 1 1-1.328-1.494l4.5-4z" fill="#000" fill-rule="nonzero"/></svg>
            </a>
        </section>

        <section class="section section-blog-featured">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'meta_query' => array(
                        array(
                            'key' => 'featured_post',
                            'compare' => '=',
                            'value' => '1'
                        ),
                    ),
                    'post_status'=>'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'offset' => 0,
                    'showposts' => 1,
                    'posts_per_page' => 1
                );

                $featured_aside_loop = new WP_Query($args);
            ?>
            <?php if ($featured_aside_loop->have_posts()): ?>
            <?php while ($featured_aside_loop->have_posts()) : $featured_aside_loop->the_post(); ?>
            <a class="section-blog-featured-main" href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                <figure class="">
                    <img class="featured-img" src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), '16-9-hero')[0]; ?>" alt="<?php the_title(); ?>">

                    <figcaption class="">
                        <?php $categories = get_the_category(); ?>
                        <?php foreach($categories as $category): ?>
                        <h6><?php echo $category->name; ?></h6>
                        <?php endforeach; ?> 
                        
                        <h2 class=""><?php the_title(); ?></h2>

                        <?php the_excerpt(); ?>

                        <div class="byline">
                            <div class="byline-img">
                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 36 ); ?>
                            </div>

                            <div class="byline-name">By <?php the_author() ?></div>
                        </div>
                    </figcaption>
                </figure>
            </a>
            <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            
            <?php
                $args = array(
                    'post_type' => 'post',
                    'meta_query' => array(
                        array(
                            'key' => 'featured_post',
                            'compare' => '=',
                            'value' => '1'
                        ),
                    ),
                    'post_status'=>'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'offset' => 1,
                    'showposts' => 3,
                    'posts_per_page' => 3
                );

                $featured_aside_loop = new WP_Query($args);
            ?>
            <?php if ($featured_aside_loop->have_posts()): ?>
            <div class="section-blog-featured-list">
                <?php while ($featured_aside_loop->have_posts()) : $featured_aside_loop->the_post(); ?>
                <a class="section-blog-featured-list-item" href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
                    <figure>
                        <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), '1-1-square')[0]; ?>" alt="">
                        
                        <figcaption class="">
                            <?php $categories = get_the_category(); ?>
                            <?php foreach($categories as $category): ?>
                            <h6><?php echo $category->name; ?></h6>
                            <?php endforeach; ?>

                            <h5 class=""><?php the_title(); ?></h5>
                        </figcaption>
                    </figure>
                </a>
                <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </section>







        <?php
            $args = array(
                'post_type' => 'post',
                'post_status'=>'publish',
                'meta_query' => array(
                    array(
                        'key' => 'featured_post',
                        'compare' => '=',
                        'value' => '0'
                    ),
                ),
                'orderby' => 'date',
                'order' => 'DESC',
                'showposts' => 3,
                'posts_per_page' => 3
            );

            $blog_latest_loop = new WP_Query($args);
        ?>
        <?php if ($blog_latest_loop->have_posts()): ?>

        <section class="section section-blog-category">
            <h4>Latest</h4>

            <a href="" title="">
                All latest articles
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>arrow-right-1</title><path d="M17.586 11l-5.293-5.293a1 1 0 1 1 1.414-1.414l7 7c.63.63.184 1.707-.707 1.707H4a1 1 0 0 1 0-2h13.586zm-.75 3.253a1 1 0 1 1 1.328 1.494l-4.5 4a1 1 0 1 1-1.328-1.494l4.5-4z" fill="#000" fill-rule="nonzero"/></svg>
            </a>
        </section>

        <section class="section section-blog">
            <?php while ($blog_latest_loop->have_posts()) : $blog_latest_loop->the_post(); ?>
            <figure class="section-blog-item">
                <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
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
                    <!--<a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">read more</a>-->

                    <figure class="byline">
                        <div class="byline-img">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 36 ); ?>
                        </div>

                        <div class="byline-name">By <?php the_author() ?></div>
                    </figure>
                </figcaption>
            </figure>
            <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
        </section>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>





        <?php
            $args = array(
                'post_type' => 'post',
                'post_status'=>'publish',
                // 'meta_query' => array(
                //     array(
                //         'key' => 'featured_post',
                //         'compare' => '=',
                //         'value' => '0'
                //     ),
                // ),
                'meta_key' => 'popular_posts',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                'showposts' => 3,
                'posts_per_page' => 3
            );

            $blog_popular_loop = new WP_Query($args);
        ?>
        <?php if ($blog_popular_loop->have_posts()): ?>

        <section class="section section-blog-category">
            <h4>Popular</h4>

            <a href="" title="">
                All popular articles
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>arrow-right-1</title><path d="M17.586 11l-5.293-5.293a1 1 0 1 1 1.414-1.414l7 7c.63.63.184 1.707-.707 1.707H4a1 1 0 0 1 0-2h13.586zm-.75 3.253a1 1 0 1 1 1.328 1.494l-4.5 4a1 1 0 1 1-1.328-1.494l4.5-4z" fill="#000" fill-rule="nonzero"/></svg>
            </a>
        </section>

        <section class="section section-blog">
            <?php while ($blog_popular_loop->have_posts()) : $blog_popular_loop->the_post(); ?>
            <figure class="section-blog-item">
                <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
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
                    <!--<a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">read more</a>-->

                    <figure class="byline">
                        <div class="byline-img">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 36 ); ?>
                        </div>

                        <div class="byline-name">By <?php the_author() ?></div>
                    </figure>
                </figcaption>
            </figure>
            <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
        </section>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>






        <?php
            $args = array(
                'post_type' => 'post',
                'category_name' => 'news-events',
                'post_status'=>'publish',
                'meta_query' => array(
                    array(
                        'key' => 'featured_post',
                        'compare' => '=',
                        'value' => '0'
                    ),
                ),
                'orderby' => 'date',
                'order' => 'DESC',
                'showposts' => 3,
                'posts_per_page' => 3
            );

            $loop = new WP_Query($args);
        ?>
        <?php if ($loop->have_posts()): ?>

        <section class="section section-blog-category">
            <h4>News &amp; events</h4>

            <a href="<?php echo novap_get_baseurl(); ?>/kenya/news-events" title="">
                All news and events
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>arrow-right-1</title><path d="M17.586 11l-5.293-5.293a1 1 0 1 1 1.414-1.414l7 7c.63.63.184 1.707-.707 1.707H4a1 1 0 0 1 0-2h13.586zm-.75 3.253a1 1 0 1 1 1.328 1.494l-4.5 4a1 1 0 1 1-1.328-1.494l4.5-4z" fill="#000" fill-rule="nonzero"/></svg>
            </a>
        </section>

        <section class="section section-blog">
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
            <figure class="section-blog-item">
                <a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">
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
                    <!--<a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>">read more</a>-->

                    <figure class="byline">
                        <div class="byline-img">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 36 ); ?>
                        </div>

                        <div class="byline-name">By <?php the_author() ?></div>
                    </figure>
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
        });
    })(jQuery);
</script>


<?php get_footer(); ?>
