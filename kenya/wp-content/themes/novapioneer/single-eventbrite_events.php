<?php
/**
* Single Blog Post Template
*/

get_header(); ?>

<?php
    /**
    * The template for displaying all single Event meta
    */
    global $iee_events;

    if ( ! isset( $event_id ) || empty( $event_id ) ) {
        $event_id = get_the_ID();
    }

    $start_date_str      = get_post_meta( $event_id, 'start_ts', true );
    $end_date_str        = get_post_meta( $event_id, 'end_ts', true );
    $start_date_formated = date_i18n( 'F j', $start_date_str );
    $end_date_formated   = date_i18n( 'F j', $end_date_str );
    $start_time          = date_i18n( 'h:i a', $start_date_str );
    $end_time            = date_i18n( 'h:i a', $end_date_str );
    $website             = get_post_meta( $event_id, 'iee_event_link', true );
?>

<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<div class="updates-2019">
    <div class="trigger"></div>

    <section class="section section-banner trigger-offset-xxx">
        <figure class="">
            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), '16-9-hero')[0]; ?>" alt="">

            <figcaption>
                <h6>
                    Events
                    <span class="slash">/</span>
                    <span class="categorically">Open Days</span>
                </h6>

                <h1 class=""><?php the_title(''); ?></h1>
            </figcaption>
        </figure>
    </section>

    <section class="section section-article">
        <article class="article">
            <aside class="article-meta">


<?php if ( date( 'Y-m-d', $start_date_str ) == date( 'Y-m-d', $end_date_str ) ) { ?>
<div class="article-meta-generic article-meta-generic-date">
    <!--<div><?php echo date( 'F', $start_date_str ); ?></div>
    <div><?php esc_html_e( 'Date', 'import-eventbrite-events' ); ?></div>
    <div>single date</div>-->

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="120.4" height="109.9" viewBox="0 0 120.4 109.9">
        <defs>
            <clipPath id="clip-path">
            <rect width="120.4" height="109.9" fill="none"/>
            </clipPath>
        </defs>
        <g id="event-date_copy" data-name="event-date copy" clip-path="url(#clip-path)">
            <rect id="grey_bg" data-name="grey bg" width="120.4" height="103.6" rx="5.6" transform="translate(0 6.3)" fill="#f1f1f1"/>
            <path id="blue_bg" data-name="blue bg" d="M5.6,0H114.8a5.6,5.6,0,0,1,5.6,5.6V29.4a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V5.6A5.6,5.6,0,0,1,5.6,0Z" transform="translate(0 6)" fill="#1e3a77"/>
            <path id="notch_right" data-name="notch right" d="M5.6,0h0a5.6,5.6,0,0,1,5.6,5.6V32a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V5.6A5.6,5.6,0,0,1,5.6,0Z" transform="translate(88.2)" fill="#1e3a77"/>
            <path id="notch_left" data-name="notch left" d="M5.6,0h0a5.6,5.6,0,0,1,5.6,5.6V32a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V5.6A5.6,5.6,0,0,1,5.6,0Z" transform="translate(21)" fill="#1e3a77"/>
            <text id="extra" transform="translate(60.2 94.6)" fill="#1e3a77" font-size="9.8" font-family="Montserrat-Regular, Montserrat"><tspan x="-35.741" y="0">single date</tspan></text>
            <text id="month" transform="translate(60 25)" fill="#ffd100" font-size="9.8" font-family="Montserrat-Bold, Montserrat" font-weight="700"><tspan x="-31.786" y="0" letter-spacing="0.143em"><?php echo date( 'F', $start_date_str ); ?></tspan></text>
            <text id="date" transform="translate(60.2 82.8)" fill="#1e3a77" font-size="33.6" font-family="Montserrat-ExtraBold, Montserrat" font-weight="800" letter-spacing="0.06em"><?php esc_html_e( 'Date', 'import-eventbrite-events' ); ?></text>
        </g>
    </svg>
</div>
<?php } else { ?>
<div class="article-meta-generic article-meta-generic-date">
    <!--<div><?php echo date( 'F', $start_date_str ); ?></div>
    <div>M</div>
    <div>multiple dates</div>-->

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="120.4" height="109.9" viewBox="0 0 120.4 109.9">
        <defs>
            <clipPath id="clip-path">
            <rect width="120.4" height="109.9" fill="none"/>
            </clipPath>
        </defs>
        <g id="event-date_copy" data-name="event-date copy" clip-path="url(#clip-path)">
            <rect id="grey_bg" data-name="grey bg" width="120.4" height="103.6" rx="5.6" transform="translate(0 6.3)" fill="#f1f1f1"/>
            <path id="blue_bg" data-name="blue bg" d="M5.6,0H114.8a5.6,5.6,0,0,1,5.6,5.6V29.4a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V5.6A5.6,5.6,0,0,1,5.6,0Z" transform="translate(0 6)" fill="#1e3a77"/>
            <path id="notch_right" data-name="notch right" d="M5.6,0h0a5.6,5.6,0,0,1,5.6,5.6V32a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V5.6A5.6,5.6,0,0,1,5.6,0Z" transform="translate(88.2)" fill="#1e3a77"/>
            <path id="notch_left" data-name="notch left" d="M5.6,0h0a5.6,5.6,0,0,1,5.6,5.6V32a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V5.6A5.6,5.6,0,0,1,5.6,0Z" transform="translate(21)" fill="#1e3a77"/>
            <text id="extra" transform="translate(60.2 94.6)" fill="#1e3a77" font-size="9.8" font-family="Montserrat-Regular, Montserrat"><tspan x="-35.741" y="0">multiple times</tspan></text>
            <text id="month" transform="translate(60 25)" fill="#ffd100" font-size="9.8" font-family="Montserrat-Bold, Montserrat" font-weight="700"><tspan x="-31.786" y="0" letter-spacing="0.143em"><?php echo date( 'F', $start_date_str ); ?></tspan></text>
            <text id="date" transform="translate(60.2 82.8)" fill="#1e3a77" font-size="33.6" font-family="Montserrat-ExtraBold, Montserrat" font-weight="800" letter-spacing="0.06em"><tspan x="-14.944" y="0">M</tspan></text>
        </g>
    </svg>
</div>
<?php } ?>



<?php if ( date( 'Y-m-d', $start_date_str ) == date( 'Y-m-d', $end_date_str ) ) { ?>
<div class="article-meta-generic article-meta-generic-fee">
    <p class="school-contact">
        <span class="icon-heading">
            <span class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>phone-1</title><path d="M15.938 14.743l-1.379 1.378a.998.998 0 1 1-1.412-1.412l1.757-1.756a.998.998 0 0 1 .902-.273l4.391.878a.998.998 0 0 1 .803.98v5.267a.998.998 0 0 1-.767.971c-3.387.806-8.222-.523-12.355-4.655-4.134-4.131-5.46-8.966-4.654-12.354A.998.998 0 0 1 4.196 3h5.27c.475 0 .885.336.979.803l.878 4.39a.998.998 0 0 1-.273.901l-1.233 1.232a10.469 10.469 0 0 0 2.195 2.68.998.998 0 1 1-1.31 1.507 12.16 12.16 0 0 1-.63-.588 12.654 12.654 0 0 1-2.379-3.337.998.998 0 0 1 .188-1.15L9.26 8.06l-.613-3.063H5.036c-.292 2.69.942 6.403 4.253 9.712 3.312 3.31 7.025 4.546 9.714 4.255v-3.608l-3.065-.613z" fill="#000" fill-rule="nonzero"></path></svg>
            </span>
            <span class="icon-label"><?php esc_html_e( 'Date', 'import-eventbrite-events' ); ?>, <?php esc_html_e( 'Time', 'import-eventbrite-events' ); ?></span>
        </span>
        <br>
        <small>
            <?php echo $start_date_formated; ?>
            <br>
            <?php echo $start_time . ' - ' . $end_time; ?>
        </small>
    </p>
</div>
<?php } else { ?>
<div class="article-meta-generic article-meta-generic-fee">
    <p class="school-contact">
        <span class="icon-heading">
            <span class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>phone-1</title><path d="M15.938 14.743l-1.379 1.378a.998.998 0 1 1-1.412-1.412l1.757-1.756a.998.998 0 0 1 .902-.273l4.391.878a.998.998 0 0 1 .803.98v5.267a.998.998 0 0 1-.767.971c-3.387.806-8.222-.523-12.355-4.655-4.134-4.131-5.46-8.966-4.654-12.354A.998.998 0 0 1 4.196 3h5.27c.475 0 .885.336.979.803l.878 4.39a.998.998 0 0 1-.273.901l-1.233 1.232a10.469 10.469 0 0 0 2.195 2.68.998.998 0 1 1-1.31 1.507 12.16 12.16 0 0 1-.63-.588 12.654 12.654 0 0 1-2.379-3.337.998.998 0 0 1 .188-1.15L9.26 8.06l-.613-3.063H5.036c-.292 2.69.942 6.403 4.253 9.712 3.312 3.31 7.025 4.546 9.714 4.255v-3.608l-3.065-.613z" fill="#000" fill-rule="nonzero"></path></svg>
            </span>
            <span class="icon-label"><?php esc_html_e( 'Start', 'import-eventbrite-events' ); ?>, <?php esc_html_e( 'End', 'import-eventbrite-events' ); ?></span>
        </span>
        <br>
        <small>
            <?php echo $start_date_formated . ' - ' . $start_time; ?>,
            <br>
            <?php echo $end_date_formated . ' - ' . $end_time; ?>
        </small>
    </p>
</div>
<?php } ?>



<?php
    $venue_name       = get_post_meta( $event_id, 'venue_name', true );
    $venue_address    = get_post_meta( $event_id, 'venue_address', true );
    $venue['city']    = get_post_meta( $event_id, 'venue_city', true );
    $venue['state']   = get_post_meta( $event_id, 'venue_state', true );
    $venue['country'] = get_post_meta( $event_id, 'venue_country', true );
    $venue['zipcode'] = get_post_meta( $event_id, 'venue_zipcode', true );
    $venue['lat']     = get_post_meta( $event_id, 'venue_lat', true );
    $venue['lon']     = get_post_meta( $event_id, 'venue_lon', true );
    $venue_url        = esc_url( get_post_meta( $event_id, 'venue_url', true ) );
?>
<?php if ( $venue_name != '' && ( $venue_address != '' || $venue['city'] != '' ) ) { ?>
<div class="article-meta-generic article-meta-generic-address">
    <p class="school-contact">
        <span class="icon-heading">
            <span class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>map</title><path d="M14.535 19.885L9 17.118l-5.553 2.776A1 1 0 0 1 2 19V8a1 1 0 0 1 .553-.894l5.982-2.991a.996.996 0 0 1 .93 0L15 6.882l5.553-2.776A1 1 0 0 1 22 5v11a1 1 0 0 1-.553.894l-5.982 2.991a.996.996 0 0 1-.93 0zM14 17.382V11a1 1 0 0 1 2 0v6.382l4-2V6.618l-4.553 2.276a1 1 0 0 1-.894 0L10 6.618V13a1 1 0 0 1-2 0V6.618l-4 2v8.764l4.553-2.276a1 1 0 0 1 .894 0L14 17.382z" fill="#000" fill-rule="nonzero"></path></svg>
            </span>
            <span class="icon-label">Address</span>
        </span>
        <br>
        <?php echo '<small>' . $venue_address . '</small>'; ?>
    </p>
</div>
<?php } ?>



<div class="article-meta-generic article-meta-generic-fee">
    <p class="school-contact">
        <span class="icon-heading">
            <span class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>phone-1</title><path d="M15.938 14.743l-1.379 1.378a.998.998 0 1 1-1.412-1.412l1.757-1.756a.998.998 0 0 1 .902-.273l4.391.878a.998.998 0 0 1 .803.98v5.267a.998.998 0 0 1-.767.971c-3.387.806-8.222-.523-12.355-4.655-4.134-4.131-5.46-8.966-4.654-12.354A.998.998 0 0 1 4.196 3h5.27c.475 0 .885.336.979.803l.878 4.39a.998.998 0 0 1-.273.901l-1.233 1.232a10.469 10.469 0 0 0 2.195 2.68.998.998 0 1 1-1.31 1.507 12.16 12.16 0 0 1-.63-.588 12.654 12.654 0 0 1-2.379-3.337.998.998 0 0 1 .188-1.15L9.26 8.06l-.613-3.063H5.036c-.292 2.69.942 6.403 4.253 9.712 3.312 3.31 7.025 4.546 9.714 4.255v-3.608l-3.065-.613z" fill="#000" fill-rule="nonzero"></path></svg>
            </span>
            <span class="icon-label">Assessment fee</span>
        </span>
        <br>
        <small>Free</small>
    </p>
</div>



<div class="article-meta-generic article-meta-generic-map">
    <p class="school-contact">
        <span class="icon-heading">
            <span class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>phone-1</title><path d="M15.938 14.743l-1.379 1.378a.998.998 0 1 1-1.412-1.412l1.757-1.756a.998.998 0 0 1 .902-.273l4.391.878a.998.998 0 0 1 .803.98v5.267a.998.998 0 0 1-.767.971c-3.387.806-8.222-.523-12.355-4.655-4.134-4.131-5.46-8.966-4.654-12.354A.998.998 0 0 1 4.196 3h5.27c.475 0 .885.336.979.803l.878 4.39a.998.998 0 0 1-.273.901l-1.233 1.232a10.469 10.469 0 0 0 2.195 2.68.998.998 0 1 1-1.31 1.507 12.16 12.16 0 0 1-.63-.588 12.654 12.654 0 0 1-2.379-3.337.998.998 0 0 1 .188-1.15L9.26 8.06l-.613-3.063H5.036c-.292 2.69.942 6.403 4.253 9.712 3.312 3.31 7.025 4.546 9.714 4.255v-3.608l-3.065-.613z" fill="#000" fill-rule="nonzero"></path></svg>
            </span>
            <span class="icon-label"><a class="" href="" title="Register" target="_blank" style="display: inline;">View map</a></span>
        </span>
    </p>
</div>



<?php if ( $website != '' ) { ?>
<div class="article-meta-generic article-meta-generic-register">
    <a class="button button-default button-orange-lt" href="<?php echo esc_url( $website ); ?>" title="Register" target="_blank">Register</a>
</div>
<?php } ?>
            </aside>








            <div class="article-body">
                <?php the_content(); ?>
            </div>

            <aside class="article-share">
                <div class="share-container">
                    <header>Share</header>

                    <?php post_share_buttons(); ?>
                </div>
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

<script>
    jQuery(document).ready(function () {
        jQuery(".article-body .iee_event_meta, .article-body .eventbrite-ticket-section").css("display", "none");
        jQuery(".article-body .iee_event_meta").remove();
        jQuery(".article-body .eventbrite-ticket-section").remove();
        jQuery('.article-body div:empty').remove();
        jQuery('.article-body p:empty').remove();
        jQuery('.article-body br').remove();
        jQuery('.article-body ul br').remove();
    });
</script>

<?php get_footer(); ?>
