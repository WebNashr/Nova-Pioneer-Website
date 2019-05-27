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

    // some date variables
    $start_date_str      = get_post_meta( $event_id, 'start_ts', true );
    $end_date_str        = get_post_meta( $event_id, 'end_ts', true );
    $start_date_formated = date_i18n( 'F j', $start_date_str );
    $end_date_formated   = date_i18n( 'F j', $end_date_str );
    $start_time          = date_i18n( 'h:i a', $start_date_str );
    $end_time            = date_i18n( 'h:i a', $end_date_str );
    $website             = get_post_meta( $event_id, 'iee_event_link', true );

    // some venue variables
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
    <div class="article-meta-calendarette">
        <div class="calendarette-month"><?php echo date( 'F', $start_date_str ); ?></div>
        <div class="calendarette-date"><?php echo date( 'j', $start_date_str ); ?></div>
        <div class="calendarette-days">single date</div>
    </div>
</div>
<?php } else { ?>
<div class="article-meta-generic article-meta-generic-date">
    <div class="article-meta-calendarette">
        <div class="calendarette-month"><?php echo date( 'F', $start_date_str ); ?></div>
        <div class="calendarette-date">M</div>
        <div class="calendarette-days">multiple dates</div>
    </div>
</div>
<?php } ?>



<?php if ( date( 'Y-m-d', $start_date_str ) == date( 'Y-m-d', $end_date_str ) ) { ?>
<div class="article-meta-generic article-meta-generic-fee">
    <div class="open-day-event-meta">
        <span class="icon-heading">
            <span class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>clock</title><path d="M11 10V3a1 1 0 0 1 1-1c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12a9.997 9.997 0 0 1 5.242-8.798 1 1 0 0 1 .953 1.759A8 8 0 1 0 13 4.062V12a1 1 0 0 1-1.6.8l-4-3a1 1 0 1 1 1.2-1.6L11 10z" fill="#000" fill-rule="nonzero"/></svg>
            </span>
            <span class="icon-label"><?php esc_html_e( 'Date', 'import-eventbrite-events' ); ?>, <?php esc_html_e( 'Time', 'import-eventbrite-events' ); ?></span>
        </span>

        <small>
            <?php echo $start_date_formated; ?>
            <br>
            <?php echo $start_time . ' - ' . $end_time; ?>
        </small>
    </div>
</div>
<?php } else { ?>
<div class="article-meta-generic article-meta-generic-fee">
    <div class="open-day-event-meta">
        <span class="icon-heading">
            <span class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>clock</title><path d="M11 10V3a1 1 0 0 1 1-1c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12a9.997 9.997 0 0 1 5.242-8.798 1 1 0 0 1 .953 1.759A8 8 0 1 0 13 4.062V12a1 1 0 0 1-1.6.8l-4-3a1 1 0 1 1 1.2-1.6L11 10z" fill="#000" fill-rule="nonzero"/></svg>
            </span>
            <span class="icon-label"><?php esc_html_e( 'Start', 'import-eventbrite-events' ); ?>, <?php esc_html_e( 'End', 'import-eventbrite-events' ); ?></span>
        </span>

        <small>
            <?php echo $start_date_formated . ' - ' . $start_time; ?>,
            <br>
            <?php echo $end_date_formated . ' - ' . $end_time; ?>
        </small>
    </div>
</div>
<?php } ?>



<?php if ( $venue_name != '' && ( $venue_address != '' || $venue['city'] != '' ) ) { ?>
<div class="article-meta-generic article-meta-generic-address">
    <div class="open-day-event-meta">
        <span class="icon-heading">
            <span class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>map</title><path d="M14.535 19.885L9 17.118l-5.553 2.776A1 1 0 0 1 2 19V8a1 1 0 0 1 .553-.894l5.982-2.991a.996.996 0 0 1 .93 0L15 6.882l5.553-2.776A1 1 0 0 1 22 5v11a1 1 0 0 1-.553.894l-5.982 2.991a.996.996 0 0 1-.93 0zM14 17.382V11a1 1 0 0 1 2 0v6.382l4-2V6.618l-4.553 2.276a1 1 0 0 1-.894 0L10 6.618V13a1 1 0 0 1-2 0V6.618l-4 2v8.764l4.553-2.276a1 1 0 0 1 .894 0L14 17.382z" fill="#000" fill-rule="nonzero"/></svg>
            </span>
            <span class="icon-label">Address</span>
        </span>

        <?php echo '<small>' . $venue_address . '</small>'; ?>
    </div>
</div>
<?php } ?>



<div class="article-meta-generic article-meta-generic-fee">
    <div class="open-day-event-meta">
        <span class="icon-heading">
            <span class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>tag</title><path d="M9.293 14.707a1 1 0 0 1 1.414-1.414l4 4a1 1 0 0 1 0 1.414l-3 3a1 1 0 0 1-1.414 0l-7-7a1 1 0 0 1 0-1.414l10-10A1 1 0 0 1 14 3h7a1 1 0 0 1 1 1v7a1 1 0 0 1-.293.707l-4.5 4.5a1 1 0 0 1-1.414-1.414L20 10.586V5h-5.586l-9 9L11 19.586 12.586 18l-3.293-3.293zM17 9a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" fill="#000" fill-rule="nonzero"/></svg>
            </span>
            <span class="icon-label">Assessment fee</span>
        </span>

        <small>Free</small>
    </div>
</div>



<?php if ( $venue['lat'] != '' && $venue['lon'] ) { ?>
<div class="article-meta-generic article-meta-generic-map">
    <div class="open-day-event-meta">
        <span class="icon-heading">
            <span class="icon">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>globe</title><path d="M14.894 14a18.728 18.728 0 0 0 0-4H9.106A18.728 18.728 0 0 0 9 12v1a1 1 0 0 1-2 0v-1c0-.683.032-1.353.093-2H4.252A8.014 8.014 0 0 0 4 12c0 1.478.4 2.893 1.143 4.124a3 3 0 1 1-1.62 1.183A9.958 9.958 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a1 1 0 0 1 0-2c.966 0 1.99-1.593 2.557-4H11a1 1 0 0 1 0-2h3.894zm4.854 0c.164-.64.252-1.31.252-2s-.088-1.36-.252-2h-2.84c.06.647.092 1.317.092 2s-.032 1.353-.093 2h2.841zm-.818 2H16.61c-.245 1.192-.6 2.267-1.05 3.166A8.036 8.036 0 0 0 18.93 16zm-4.373-8C13.99 5.593 12.966 4 12 4s-1.99 1.593-2.557 4h5.114zM7.389 8c.245-1.192.6-2.267 1.05-3.166A8.036 8.036 0 0 0 5.07 8H7.39zm11.54 0a8.036 8.036 0 0 0-3.368-3.166c.45.9.805 1.974 1.05 3.166h2.319zM6 20a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" fill="#000" fill-rule="nonzero"/></svg>
            </span>
            <span class="icon-label">
                <a href="https://maps.google.com/maps?q=<?php echo $venue['lat'] . ',' . $venue['lon']; ?>&hl=es;z=14&amp;output=embed" title="View map" target="_blank">View map</a>
            </span>
        </span>
    </div>
</div>
<?php } ?>



<?php if ( $website != '' ) { ?>
<div class="article-meta-generic article-meta-generic-register">
    <a class="button button-default button-raspberry" href="<?php echo esc_url( $website ); ?>" title="Register" target="_blank">Register</a>
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
