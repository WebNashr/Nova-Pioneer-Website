<?php 
/**
* Template Name: School Homepage
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); ?>



        <section class="section section-hero school-home">
            <div class="container hero-container">
                <div class="main-callout-box">
                    <hr>
                    <h1>Learners are inspired become adaptive, independent thinkers</h1>
                    <a href="<?php echo site_url('/learning'); ?>" class="button button-default button-primary">Learn More</a>
                </div>
            </div>
        </section>

        <div class="trigger"></div>

        <section class="section">
            <div class="school-description-container">
            <div class="school-name"><h1><?php the_title(); ?></h1></div>

                <div class="description-inner-wrap"
                <div class="section-content-item">

                        <div class="school-detail">
                            <?php echo get_field('school_type'); ?>
                        </div>
                        <div class="detail-separator">&nbsp;</div>
                        <div class="school-detail">
                            Ages <?php echo get_field('minimum_age'); ?> - <?php echo get_field('maximum_age'); ?> years
                        </div>
                        <div class="detail-separator">&nbsp;</div>
                        <div class="school-detail">
                            Grades <?php echo get_field('lowest_grade'); ?> - <?php echo get_field('highest_grade'); ?>
                        </div>
                        <div class="detail-separator">&nbsp;</div>
                        <div class="school-detail">
                            <?php echo get_field('curriculum'); ?>
                        </div>
                </div>
                </div>
            </div>
        </section>

        <section class="section">

            <div class="general-notices-container school-notices">
            <div class="large-notice-container" style="background-image: url(<?php echo get_field('admission_photo'); ?>);">
                <div class="large-notice">
                    <div class="bar-notice">
                        <div class="contact">
                            <p>General Enquiries Call: <a href="tel:<?php echo get_field('general_enquiries_number'); ?>"><?php echo get_field('general_enquiries_number'); ?> </a></p>
                        </div>
                        <div class="contact">
                            <p>Admission Enquiries Call: <a href="tel:<?php echo get_field('admission_enquiries_number'); ?>"><?php echo get_field('admission_enquiries_number'); ?> </a></p>
                        </div>
                        <div class="contact">
                            <p>Email Us: <a href="mailto:<?php echo get_field('school_email'); ?>"><?php echo get_field('school_email'); ?></a></p>
                        </div>
                    </div>
                    <div class="notice-content">
                        <h1>Learn About Our Admission Process</h1>
                        <?php echo get_field('admission_call_to_action'); ?>
                        <p class="call-to-action"><a href="#" class="button button-large button-secondary" title="">Enrol Now</a></p>
                    </div>
                </div>
            </div>

            <div class="small-notice-container">
                <div class="small-notice" id="rsvp-node">
                    <h1>Nova Pioneer Ormonde Open Day</h1>
                    <h2>15th October, 2016</h2>
                    <p>49 Dorado Avenue, Ormonde</p>
                    <a href="#" class="modal-toggle button button-tiny button-secondary" title="">Send an RSVP</a>
                </div>
                <div class="divider"></div>
                <div class="small-notice">
                    <h1>Nova Pioneer Ormonde September Intake</h1>
                    <h2>Now in Progress</h2>
                    <a href="#" class="button button-tiny button-secondary" title="">Apply Now</a>
                </div>
            </div>

            </div>
        </section>



        <section class="section section-pair">
            <div class="section-navigation">
                <h1>Leadership Team</h1>
                <a href="#"  title="">Our team</a>
            </div>

            <div class="section-content">
                <div class="section-content-item section-content-item-half">
                    <p>Our leadership team comes from some of the best schools and organisations in South Africa and around the world. Our team is deeply committed towards developing leaders and innovators who are equipped to shape the world they envision.</p>
                </div>

                <div class="section-content-item section-content-item-quarter profile">
                    <img src="img/gavin-profile-pic.jpg" alt="" class="profile-img">
                    <a href="#" class="profile-name" title="">Gavin Esterhuizen</a>
                    <span class="profile-role">Head of School</span>
                </div>

                <div class="section-content-item section-content-item-quarter profile">
                    <img src="img/female-profile-photo.jpg" alt="" class="profile-img">
                    <a href="#" class="profile-name" title="">Ms. Seshoka</a>
                    <span class="profile-role">Lead Teacher for Leadership &amp; Personal Mastery</span>
                </div>
            </div>
        </section>

        <div class="divider"></div>

        <section class="section section-pair">
            <div class="section-navigation">
                <h1>Our Students</h1>
                <a href="#" title="">Meet the Students</a>
            </div>

            <div class="section-content">
                <div class="section-content-item section-content-item-half">
                        <div class="testimonial pull-quote">

                            <blockquote>
                            <svg aria-hidden="true">
                                <use xlink:href="img/quote-mark-icon.svg#quote-mark"></use>
                            </svg>
                                Growth mindset is having a mindset that when you fail, you can still strive to achieve better. You cant just give up. it gives you an opportunity to learn from your mistakes and failure.
                                <cite><span>Nigel Mutuku,</span> Nova Pioneer Student</cite>
                            </blockquote>
                        </div>

                </div>
                <div class="section-content-item section-content-item-half">
                    <div class="media youtube-video">
                        <iframe width="347" height="194" src="https://www.youtube.com/embed/QcJA8Vwowa0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-pair section-gallery">


            <div class="image-slider-container">

                <div class="section-navigation">
                    <h1>Gallery</h1>
                    <nav class="gallery-nav">
                        <a href="" class="gallery-select" title="">School grounds</a>
                        <a href="" class="gallery-select gallery-selected" title="">Classrooms</a>
                        <a href="" class="gallery-select" title="">Library</a>
                        <a href="" class="gallery-select" title="">Play Area</a>
                    </nav>
                </div>

                <div class="section-content-item-full">
                    <div class="media gallery">
                        <article id="cc-slider">
                            <input checked="checked" name="cc-slider" id="slide1" type="radio">
                            <input name="cc-slider" id="slide2" type="radio">
                            <input name="cc-slider" id="slide3" type="radio">

                            <div id="cc-slides">
                            <div id="overflow">
                                <div class="inner">
                                <article>
                                    <div class="cctooltip">
                                    <h3>This is a sample caption for the current image</h3>
                                    </div>
                                    <img src="img/slide-1.jpg">
                                </article>
                                <article>
                                    <div class="cctooltip">
                                    <h3>Sample Image Caption</h3>
                                    </div>
                                    <img src="img/slide-2.jpg"> </article>
                                <article>
                                    <div class="cctooltip">
                                    <h3>Sample Image Caption</h3>
                                    </div>
                                    <img src="img/slide-3.jpg"> </article>
                                </div>
                            </div>
                            </div>
                            <div id="controls">
                            <label for="slide1"></label>
                            <label for="slide2"></label>
                            <label for="slide3"></label>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <aside>
            <div class="testimonial full-width-quote">
                <div class="spacing-to-center"></div>
                <figure class="full-width-figure">
                    <img src="img/parent-profile-pic-2.jpg" alt="" class="">
                </figure>
                <blockquote>
                    <svg aria-hidden="true">
                    <use xlink:href="img/quote-mark-icon.svg#quote-mark"></use>
                    </svg>
                    I really like their teaching philosophy of not spoon feeding the kids but giving them problems that they can come up with solutions to. The teachers are knowledgeable, friendly and helpful. You can see they are passionate about children and teaching.
                    <cite><span>Bridget,</span> Nova Pioneer Parent</cite>
                </blockquote>
                <div class="spacing-to-center"></div>
            </div>
        </aside>



        <section class="section section-pair section-school-blog">
            <div class="section-navigation">
                <h1>Student Blog</h1>
                <a href="#"  title="">View All Blog Posts</a>
            </div>

            <div class="section-content">
                <div class="section-content-item section-content-item-third blog-article">
                    <img src="img/image-wide-1.jpg" alt="">
                    <a href="#" class="blog-article-title" title="">Are We Good Enough?</a>
                    <p class="article-author">Article Author</p>
                </div>

                <div class="section-content-item section-content-item-third blog-article">
                    <img src="img/image-wide-2.jpg" alt="">
                    <a href="#" class="blog-article-title" title="">Visual. Audio. Reading. Writing.</a>
                    <p class="article-author">Article Author</p>
                </div>

                <div class="section-content-item section-content-item-third blog-article">
                    <img src="img/image-wide-3.jpg" alt="">
                    <a href="#" class="blog-article-title" title="">We Are Always Growing In Everything We Do</a>
                    <p class="article-author">Article Author</p>
                </div>
            </div>
        </section>
            <div class="divider"></div>

        <section class="section section-pair section-school-location">
            <div class="section-navigation">
                <h1>Contact Us</h1>
            </div>

            <div class="section-content">
                <div class="section-content-item section-content-item-half">
                    <div class="media">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19106.579929676856!2d28.00426426922892!3d-26.247365180124465!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28fd6a66006ddf9a!2sPioneer+Academy+Ormonde!5e0!3m2!1sen!2s!4v1479403217254" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="section-content-item section-content-item-half">
                    <div class="contact-info">
                        <span class="phone-contact-one">Call us: <a href="tel:011 496 1201 ">011 496 1201 </a></span>
                        <span class="phone-contact-two">Admission Enquiries:  <a href="tel:011 496 1202 ">011 496 1202 </a></span>
                        <span class="email-contact">Email us: <a href="mailto:learn@novapioneer.com">learn@novapioneer.com</a></span>
                    </div>

                    <div class="contact-info">
                        <p><b>NovaPioneer Ormonde</b><br>
                        49 Dorado Avenue, Ormonde<br>
                        Johannesburg South, 2091<br>
                        South Africa</p>
                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
    <?php get_template_part('includes/partials/content', 'stay-updated'); ?>
    <?php get_template_part('includes/partials/content', 'rsvp-modal'); ?>
<?php endif; ?>

<?php get_footer(); ?>
