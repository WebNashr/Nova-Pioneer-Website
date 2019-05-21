<?php
/**
 * Template Name: Blog Archive Page
 */
get_header(); ?>


<?php //if( have_posts() ): ?>
<?php //while( have_posts() ): the_post(); ?>
<div class="updates-2019">
    <div class="trigger"></div>

    <?php if( have_posts() ): ?>
    <section class="section section-blog-category trigger-offset" style="display: none;">
        <h1 class="">
            Blog / 
            <span class="blog-category">
                <?php
                    $category = get_the_category();
                    echo $category[0]->cat_name;
                ?>
            </span>
        </h1>

        <a href="<?php echo novap_get_baseurl(); ?>/kenya/blog" title="Back to Blog">
            Back to Blog
            <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>arrow-right-1</title><path d="M17.586 11l-5.293-5.293a1 1 0 1 1 1.414-1.414l7 7c.63.63.184 1.707-.707 1.707H4a1 1 0 0 1 0-2h13.586zm-.75 3.253a1 1 0 1 1 1.328 1.494l-4.5 4a1 1 0 1 1-1.328-1.494l4.5-4z" fill="#000" fill-rule="nonzero"/></svg>
        </a>
    </section>

    <section class="section section-banner">
        <figure class="">
            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($school->ID), '16-9-hero')[0]; ?>" alt="">

            <figcaption class="" style="
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
">
                <h1 class="">
                    Blog / 
                    <span class="blog-category">
                        <?php
                            $category = get_the_category();
                            echo $category[0]->cat_name;
                        ?>
                    </span>
                </h1>
                
                <!--<div class="banner-social">-->
                    <a style="
    margin-left: auto;
    color: grey;
    font-weight: 100;
    font-size: 14px;
    color: #4a4a4a;
" href="<?php echo novap_get_baseurl(); ?>/kenya/blog" title="Back to Blog">
                        Back to Blog
                        <svg style="
    top: 7px;
    position: relative;
    margin-left: 8px;
" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>arrow-right-1</title><path style="fill: #1e3f75;"d="M17.586 11l-5.293-5.293a1 1 0 1 1 1.414-1.414l7 7c.63.63.184 1.707-.707 1.707H4a1 1 0 0 1 0-2h13.586zm-.75 3.253a1 1 0 1 1 1.328 1.494l-4.5 4a1 1 0 1 1-1.328-1.494l4.5-4z" fill="#000" fill-rule="nonzero"/></svg>
                    </a>
                <!--</div>-->
            </figcaption>
        </figure>
    </section>
    <?php endif; ?>


    <?php
        // $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;

        // $args = array(
        //     'post_type' => 'post',
        //     'post_status'=>'publish',
        //     'orderby' => 'date',
        //     'order' => 'DESC',
        //     'showposts' => 12,
        //     'posts_per_page' => 12,
        //     'paged'=> $paged
        // );

        // $loop = new WP_Query($args);
    ?>
    <?php //if ($loop->have_posts()): ?>
    <?php if (have_posts()): ?>
    <section class="section section-blog">
        <?php //while ($loop->have_posts()) : $loop->the_post(); ?>
        <?php while (have_posts()) : the_post(); ?>
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

    <!--pagination-->
    <?php
        $total_pages = $loop->max_num_pages;
        if ($total_pages > 1) {
            $current_page = max(1, get_query_var( 'paged' ));
            echo paginate_links( array(
                'base' => get_pagenum_link( 1 ) . '%_%',
                'format' => 'page/%#%',
                'current' => $current_page,
                'total' => $total_pages,
                'prev_text' => __('PREVIOUS'),
                'next_text' => __('NEXT'),
                'type' => 'list'
            ) );
        }
    ?>

    <?php else: ?>
    <section class="no-content">
        <h4>There are no blog articles at the moment.</h4>
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


