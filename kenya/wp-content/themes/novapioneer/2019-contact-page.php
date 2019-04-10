<?php
/**
 *  Template Name: Contacts Page
 */

get_header(); ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post(); ?>
<div class="updates-2019">
        <section
            class="section section-hero" <?php if (has_post_thumbnail()): echo 'style="background-image: url(' . wp_get_attachment_image_src(get_post_thumbnail_id(), 'single-post-thumbnail')[0] . ');"'; endif; ?>
            data-enllax-ratio="0.1">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1 class="animated-title">Contact Us</h1>
                    <p>Developing innovators &amp; leaders who will shape the future</p>
                </div>
            </div>
        </section>

        

        <div class="trigger"></div>

        <section class="section">
            <div class="section-pair">
                <div class="section-navigation">
                    <h2><?php echo get_field('country'); ?></h2>
                    <div class="social-media-links">
                        <a href=" <?php echo get_field('facebook'); ?>" target="_blank"><span
                                class="social-icon facebook-icon"></span>Facebook</a><br/>
                        <a href=" <?php echo get_field('twitter'); ?>" target="_blank"><span
                                class="social-icon twitter-icon"></span>Twitter</a><br/>
                        <a href=" <?php echo get_field('instagram_ke'); ?>" target="_blank"><span
                                class="social-icon instagram-icon"></span>Instagram</a><br/>
                    </div>
                </div>
                <div class="section-content">
                    <?php foreach (get_field('school_branches') as $school_branch): $school_branch = (object)$school_branch; ?>
                        <div class="section-content-item section-content-item-third">
                            <div class="school-contact">
                                <h3><?php echo $school_branch->branch_name; ?></h3>
                                <?php echo $school_branch->address; ?>
                                <address>
                                    <div class="contact-info">
                                        <?php foreach ($school_branch->contacts_ as $contact): $contact = (object)$contact; ?>
                                            <?php if (strtolower($contact->label) == 'email' || strpos(strtolower($contact->label), 'email') !== false): ?>
                                                <span class="phone-contact-one">   <?php echo $contact->label; ?>
                                                    <a href="mailto:<?php echo $contact->contact; ?>"> <?php echo $contact->contact; ?> </a></span>
                                            <?php else: ?>
                                                <span class="phone-contact-one">   <?php echo $contact->label; ?>
                                                    <a href="tel:<?php echo $contact->contact; ?>"> <?php echo $contact->contact; ?> </a></span>
                                            <?php endif ?>
                                        <?php endforeach; ?>
                                    </div>
                                </address>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
        </section>






    <section class="section section-schools" style="padding:auto 0;">
        <div class="section-school-list">
            <?php $schools = get_field('schools'); ?>
            <?php foreach ($schools as $school): $school = (object)$school; ?>
                <div class="section-school-list-select"
                >
                    <img
                        class="school-photo"
                        src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id($school->ID), '16-9-triplet')[0]; ?>"
                        alt="<?php echo $school->post_title; ?>"
                    >

                    <div class="school-summary">
                        <h4><?php echo $school->post_title; ?></h4>
                        <br>

                        <p class="school-contact">
                            <span class="icon-heading">
                                <span class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>map</title><path d="M14.535 19.885L9 17.118l-5.553 2.776A1 1 0 0 1 2 19V8a1 1 0 0 1 .553-.894l5.982-2.991a.996.996 0 0 1 .93 0L15 6.882l5.553-2.776A1 1 0 0 1 22 5v11a1 1 0 0 1-.553.894l-5.982 2.991a.996.996 0 0 1-.93 0zM14 17.382V11a1 1 0 0 1 2 0v6.382l4-2V6.618l-4.553 2.276a1 1 0 0 1-.894 0L10 6.618V13a1 1 0 0 1-2 0V6.618l-4 2v8.764l4.553-2.276a1 1 0 0 1 .894 0L14 17.382z" fill="#000" fill-rule="nonzero"/></svg>
                                </span>
                                <span class="icon-label">Address</span>
                            </span>
                            <?php echo get_field('physical_address', $school->ID); ?>
                        </p>

                        <p class="school-contact">
                            <span class="icon-heading">
                                <span class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>phone-1</title><path d="M15.938 14.743l-1.379 1.378a.998.998 0 1 1-1.412-1.412l1.757-1.756a.998.998 0 0 1 .902-.273l4.391.878a.998.998 0 0 1 .803.98v5.267a.998.998 0 0 1-.767.971c-3.387.806-8.222-.523-12.355-4.655-4.134-4.131-5.46-8.966-4.654-12.354A.998.998 0 0 1 4.196 3h5.27c.475 0 .885.336.979.803l.878 4.39a.998.998 0 0 1-.273.901l-1.233 1.232a10.469 10.469 0 0 0 2.195 2.68.998.998 0 1 1-1.31 1.507 12.16 12.16 0 0 1-.63-.588 12.654 12.654 0 0 1-2.379-3.337.998.998 0 0 1 .188-1.15L9.26 8.06l-.613-3.063H5.036c-.292 2.69.942 6.403 4.253 9.712 3.312 3.31 7.025 4.546 9.714 4.255v-3.608l-3.065-.613z" fill="#000" fill-rule="nonzero"/></svg>
                                </span>
                                <span class="icon-label">Reception</span>
                            </span>
                            <?php echo get_field('main_phone_number', $school->ID); ?>
                        </p>

                        <p class="school-contact">
                            <span class="icon-heading">
                                <span class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>phone-1</title><path d="M15.938 14.743l-1.379 1.378a.998.998 0 1 1-1.412-1.412l1.757-1.756a.998.998 0 0 1 .902-.273l4.391.878a.998.998 0 0 1 .803.98v5.267a.998.998 0 0 1-.767.971c-3.387.806-8.222-.523-12.355-4.655-4.134-4.131-5.46-8.966-4.654-12.354A.998.998 0 0 1 4.196 3h5.27c.475 0 .885.336.979.803l.878 4.39a.998.998 0 0 1-.273.901l-1.233 1.232a10.469 10.469 0 0 0 2.195 2.68.998.998 0 1 1-1.31 1.507 12.16 12.16 0 0 1-.63-.588 12.654 12.654 0 0 1-2.379-3.337.998.998 0 0 1 .188-1.15L9.26 8.06l-.613-3.063H5.036c-.292 2.69.942 6.403 4.253 9.712 3.312 3.31 7.025 4.546 9.714 4.255v-3.608l-3.065-.613z" fill="#000" fill-rule="nonzero"/></svg>
                                </span>
                                <span class="icon-label">Admissions</span>
                            </span>
                            <?php echo get_field('admission_enquiries_number', $school->ID); ?>
                        </p>

                        <p class="school-contact">
                            <span class="icon-heading">
                                <span class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>mail</title><path d="M20 7.83A3.008 3.008 0 0 1 18.17 6H5a1 1 0 1 1 0-2h13.17A3.001 3.001 0 1 1 22 7.83V19a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a1 1 0 0 1 1.53-.848l7.453 4.658 5.462-3.642a1 1 0 0 1 1.11 1.664l-6 4a1 1 0 0 1-1.085.016L4 9.804V18h16V7.83zM21 6a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" fill="#000" fill-rule="nonzero"/></svg>
                                </span>
                                <span class="icon-label">Email</span>
                            </span>
                            <?php echo get_field('email_address', $school->ID); ?>
                        </p>
                    </div>
                </div>
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
    
    <section class="section section-contact-map">
        <h2 id="faqs">Find our schools</h2>

        <?php 
            $locations = array(); // The school locations

            array_push($locations, array(
                "latitude" => $school_branch->latitude,
                "longitude" => $school_branch->longitude,
                "info_text" => $school_branch->branch_name
            ));
        ?>
        <?php novap_render_google_map($locations); ?>
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
