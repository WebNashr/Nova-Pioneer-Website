<?php
get_header(); ?>

<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<div class="updates-2019">
    <div class="trigger"></div>

    <section class="section section-profile-header trigger-offset">
        <h6>
            Our team
            <?php $categories = get_the_category(); ?>
            <?php foreach($categories as $category): ?>
            <span class="slash">/</span>
            <span class="categorically">
                <a href="<?php echo get_category_link( $category->cat_ID ); ?>"><?php echo $category->name; ?></a>
            </span>
            <?php endforeach; ?>
        </h6>

        <div>
            <h1 class=""><?php the_title(); ?></h1>

            <a href="<?php echo novap_get_baseurl(); ?>sa/global-team" title="Back to Our team">
                Back to Our team
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>arrow-right-1</title><path d="M17.586 11l-5.293-5.293a1 1 0 1 1 1.414-1.414l7 7c.63.63.184 1.707-.707 1.707H4a1 1 0 0 1 0-2h13.586zm-.75 3.253a1 1 0 1 1 1.328 1.494l-4.5 4a1 1 0 1 1-1.328-1.494l4.5-4z" fill="#000" fill-rule="nonzero"/></svg>
            </a>
        </div>
    </section>

    <section class="section section-article section-article-profile">
        <article class="article">
            <aside class="article-meta">
                <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), '1-1-square')[0]; ?>" alt="">

                <h5>
                    <?php if(get_field('title_in_full')): ?>
                        <?php the_field('title_in_full'); ?></h5>
                    <?php else : ?>
                        <?php the_field('title'); ?></h5>
                    <?php endif; ?>
            </aside>

            <div class="article-body">
                <?php the_content(); ?>

                <?php if(get_field('quote')): ?>
                    <blockquote><?php the_field('quote'); ?></blockquote>
                <?php endif; ?>
            </div>

            <aside class="article-share">
                <?php if(get_field('linkedin') || get_field('twitter') || get_field('facebook')): ?>
                <div class="share-container">
                    <header>Follow</header>

                    <div class="share-icons">
                        <?php if(get_field('linkedin')): ?>
                        <a class="share-icon" href="<?php the_field('linkedin'); ?>" targt="_blank">
                            <svg width='32' height='32' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><title>linkedin</title><path d='M12.707 10.292A3 3 0 0 1 17 13v3a1 1 0 0 1-2 0v-3a1 1 0 0 0-2 0v3a1 1 0 0 1-2 0v-5a1 1 0 0 1 1.707-.708zM5 19h11a1 1 0 0 1 0 2H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a1 1 0 0 1-2 0V5H5v14zm2-8a1 1 0 0 1 2 0v5a1 1 0 0 1-2 0v-5zm1-2a1 1 0 1 1 0-2 1 1 0 0 1 0 2z' fill='#000' fill-rule='nonzero'/></svg>
                        </a>
                        <?php endif; ?>

                        <?php if(get_field('twitter')): ?>
                        <a class="share-icon" href="<?php the_field('twitter'); ?>" targt="_blank">
                            <svg width='32' height='32' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><title>twitter</title><path d='M20.03 4.388a.922.922 0 0 0 .31-.177.998.998 0 0 1 1.41.095c.364.417.321 1.05-.095 1.414a2.914 2.914 0 0 1-.969.561c-.6.209-1.206.227-1.768.138a2.854 2.854 0 0 1-.284-.058 1 1 0 0 1-.52-.339c-.826-1.026-1.803-1.27-3.17-.767-1.283.473-1.795 1.534-1.553 3.498.074.6-.395 1.128-.998 1.125-3.215-.02-6.162-1.444-8.803-4.22a1.004 1.004 0 0 1 .033-1.418.998.998 0 0 1 1.414.034c1.974 2.076 4.067 3.24 6.3 3.528.033-2.184 1.009-3.724 2.916-4.428 2.02-.745 3.805-.375 5.155 1.085.213.015.432-.005.622-.071zM8.442 18.996c3.7 0 6.987-1.578 9.14-5.173.79-1.317 1.232-2.845 1.326-4.6a1 1 0 1 1 1.997.107c-.111 2.072-.646 3.919-1.608 5.525C16.753 19.103 12.799 21 8.442 21c-2.293 0-4.315-.631-6.033-1.894-.819-.6-.326-1.9.684-1.806 1.463.138 3.151-.354 5.067-1.516a.999.999 0 0 1 1.373.339c.286.474.135 1.09-.338 1.376-.924.56-1.822.994-2.693 1.298a9.155 9.155 0 0 0 1.94.199zM3.197 8.708A.999.999 0 1 1 5.04 7.93c.218.52.568.896 1.08 1.158.492.251.687.855.437 1.348a.999.999 0 0 1-1.345.437 4.21 4.21 0 0 1-2.015-2.166zm.92 3.985a1.003 1.003 0 0 1 .352-1.373.999.999 0 0 1 1.37.352c.393.665.789 1.006 1.178 1.097a1.002 1.002 0 0 1-.45 1.952c-.986-.228-1.8-.928-2.45-2.028z' fill='#000' fill-rule='nonzero'/></svg>
                        </a>
                        <?php endif; ?>

                        <?php if(get_field('facebook')): ?>
                        <a class="share-icon" href="<?php the_field('facebook'); ?>" targt="_blank">
                            <svg width='32' height='32' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><title>facebook</title><path d='M12 13h-1a1 1 0 0 1 0-2h1V8a1 1 0 0 1 1-1h3a1 1 0 0 1 0 2h-2v2h2a1 1 0 0 1 0 2h-2v7a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-3a1 1 0 0 1 0-2h2V5H5v14h7v-6z' fill='#000' fill-rule='nonzero'/></svg>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
            </aside>
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