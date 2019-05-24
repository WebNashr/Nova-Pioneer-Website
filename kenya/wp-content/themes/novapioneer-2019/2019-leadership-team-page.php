<?php
/**
 * Template Name: Global Leadership Team
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
                    <?php the_field('alternate_description'); ?>
                </figcaption>
            </figure>
        </section>


        <!--<div class="trigger"></div>-->


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


        <section class="section section-team">
            <h2 class="section-heading">Meet the team</h2>

            <div class="container-team section-team-container">
                <?php foreach (get_field('team_list') as $team_member): $team_member = (object)$team_member; ?>
                <a class="section-team-member" href="<?php echo get_permalink($team_member->ID); ?>" title="<?php echo $team_member->post_title; ?>">
                    <figure>
                        <img
                            src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($team_member->ID), '1-1-square')[0]; ?>"
                            alt="<?php echo $team_member->post_title; ?>">

                        <div class="team-member-name"><?php echo $team_member->post_title; ?></div>
                        <div class="team-member-role"><?php echo get_field('title', $team_member->ID); ?></div>
                    </figure>
                </a>
                <?php endforeach; ?>
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


        <section class="section section-hiring">
            <figure class="section-hiring-item">
                <figcaption>
                    <h2 class=""><?php the_field('hiring_title'); ?></h2>
                    <?php the_field('hiring_text_1'); ?>
                </figcaption>

                <?php if(get_field('hiring_image_1')):?>
                <?php
                    $img_id = get_field('hiring_image_1');
                    $image = wp_get_attachment_image_src(get_field('hiring_image_1'), '16-9-triplet');
                ?>
                <img src="<?php echo esc_url( $image[0] ); ?>" alt="">
                <?php endif;?>
            </figure>

            <figure class="section-hiring-item">
                <?php if(get_field('hiring_image_2')):?>
                <?php
                    $img_id = get_field('hiring_image_2');
                    $image = wp_get_attachment_image_src(get_field('hiring_image_2'), '16-9-tall');
                ?>
                <img src="<?php echo esc_url( $image[0] ); ?>" alt="">
                <?php endif;?>
            </figure>

            <figure class="section-hiring-item">
                <?php if(get_field('hiring_image_3')):?>
                <?php
                    $img_id = get_field('hiring_image_3');
                    $image = wp_get_attachment_image_src(get_field('hiring_image_3'), '16-9-triplet');
                ?>
                <img src="<?php echo esc_url( $image[0] ); ?>" alt="">
                <?php endif;?>

                <?php the_field('hiring_text_2'); ?>

                <a class="button button-default button-raspberry" href="<?php the_field('hiring_link'); ?>" title="<?php the_field('hiring_button'); ?>"><?php the_field('hiring_button'); ?></a>
            </figure>
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


