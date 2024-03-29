<?php 
/**
* Template Name: Admissions Page
*/

get_header();?>

<?php if( have_posts() ): ?>

    <?php while( have_posts() ): the_post(); 

    ?>

        <section class="section section-hero admission-process-hero">
            <div class="container hero-container">
                <!-- <heading class="hero-heading">
                    <h1>Developing innovators &amp; leaders who will shape the future</h1>
                </heading> -->
                <div class="main-callout-box">
                    <hr>
                    <h1>Admissions</h1>
                    <p>Developing innovators &amp; leaders who will shape the future</p>
                </div>
            </div>
        </section>

        <div class="trigger"></div>

        <section class="section section-pair">
            <div class="section-navigation section-navigation-admissions">
                <h2>Upcoming Admissions</h2>
                <div class="even-list-container">
                    <div class="event-item">
                        <div class="event-day">
                            <div class="date">20</div>
                            <div class="month">November</div>
                        </div>
                        <div class="event-details">
                            <h6>Nova Pioneer Ormonde Enrollment</h6>
                            <p>Student Applications begin. <a href="#" class="" title="">View Details</a> </p>
                        </div>
                    </div>

                    <div class="event-item">
                        <div class="event-day">
                            <div class="date">21</div>
                            <div class="month">November</div>
                        </div>
                        <div class="event-details">
                            <h6>Nova Pioneer Midrand Enrollment</h6>
                            <p>Student Applications begin. <a href="#" class="" title="">View Details</a> </p>
                        </div>
                    </div>

                    <div class="event-item">
                        <div class="event-day">
                            <div class="date">28</div>
                            <div class="month">November</div>
                        </div>
                        <div class="event-details">
                            <h6>Nova Pioneer Jackal Creek Enrollment</h6>
                            <p>Student Applications begin. <a href="#" class="" title="">View Details</a> </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-content section-content-admissions">
                <div class="section-content-item section-content-item-full">
                    <div id="calendar-wrap">
                        <header>
                            <h3>November 2016</h3>
                        </header>

                        <div id="calendar">
                            <ul class="weekdays">
                                <li>Sunday</li>
                                <li>Monday</li>
                                <li>Tuesday</li>
                                <li>Wednesday</li>
                                <li>Thursday</li>
                                <li>Friday</li>
                                <li>Saturday</li>
                            </ul>

                            <!-- Days from previous month -->
                            <ul class="days">
                                <li class="day other-month">
                                    <div class="date">27</div>                      
                                </li>

                                <li class="day other-month">
                                    <div class="date">28</div>                
                                </li>

                                <li class="day other-month">
                                    <div class="date">29</div>                      
                                </li>

                                <li class="day other-month">
                                    <div class="date">30</div>                      
                                </li>

                                <li class="day other-month">
                                    <div class="date">31</div>                      
                                </li>

                                <!-- Days in current month -->
                                <li class="day">
                                    <div class="date">1</div>                       
                                </li>

                                <li class="day">
                                    <div class="date">2</div>                   
                                </li>
                            </ul>

                            <!-- Row #2 -->
                            <ul class="days">
                                <li class="day">
                                    <div class="date">3</div>
                                    <div class="event">
                                        <div class="event-desc">
                                            Nova Pioneer Ormonde Enrollment
                                        </div>
                                        <div class="event-time">
                                            8:00pm to 5:00pm
                                        </div>
                                    </div>                       
                                </li>

                                <li class="day">
                                    <div class="date">4</div>                       
                                </li>

                                <li class="day">
                                    <div class="date">5</div>                       
                                </li>

                                <li class="day">
                                    <div class="date">6</div>                       
                                </li>

                                <li class="day">
                                    <div class="date">7</div>                
                                </li>

                                <li class="day">
                                    <div class="date">8</div>                       
                                </li>

                                <li class="day">
                                    <div class="date">9</div>                       
                                </li>
                            </ul>

                            <!-- Row #3 -->
                            <ul class="days">
                                <li class="day">
                                    <div class="date">10</div>

                                </li>
                                <li class="day">
                                    <div class="date">11</div>                      
                                </li>
                                <li class="day">
                                    <div class="date">12</div>                      
                                </li>
                                <li class="day">
                                    <div class="date">13</div>                      
                                </li>
                                <li class="day">
                                                        
                                </li>
                                <li class="day">
                                    <div class="date">15</div>                      
                                </li>
                                <li class="day">
                                    <div class="date">16</div>                      
                                </li>
                            </ul>

                            <!-- Row #4 -->
                            <ul class="days">
                                <li class="day">
                                    <div class="date">17</div>                      
                                </li>
                                <li class="day">
                                    <div class="date">18</div>                      
                                </li>
                                <li class="day">
                                    <div class="date">19</div>                      
                                </li>
                                <li class="day">
                                    <div class="date">20</div> 
                                                            
                                </li>
                                <li class="day">
                                    <div class="date">21</div>
                                    <div class="event">
                                        <div class="event-desc">
                                            Nova Pioneer Midrand Enrollment
                                        </div>
                                        <div class="event-time">
                                            8:00pm to 5:00pm
                                        </div>
                                    </div>                     
                                </li>
                                <li class="day">
                                    <div class="date">22</div>
                                                            
                                </li>
                                <li class="day">
                                    <div class="date">23</div>                      
                                </li>
                            </ul>

                            <!-- Row #5 -->
                            <ul class="days">
                                <li class="day">
                                    <div class="date">24</div>                      
                                </li>
                                <li class="day">
                                    <div class="date">25</div>
                                                        
                                </li>
                                <li class="day">
                                    <div class="date">26</div>                      
                                </li>
                                <li class="day">
                                    <div class="date">27</div>                      
                                </li>
                                <li class="day">
                                    <div class="date">28</div>
                                    <div class="event">
                                        <div class="event-desc">
                                            Nova Pioneer Jackal Creek Enrollment
                                        </div>
                                        <div class="event-time">
                                            8:00pm to 5:00pm
                                        </div>
                                    </div>                       
                                </li>
                                <li class="day">
                                    <div class="date">29</div>                      
                                </li>
                                <li class="day">
                                    <div class="date">30</div>                      
                                </li>
                            </ul>

                            <!-- Row #6 -->
                            <ul class="days">
                                <li class="day">
                                    <div class="date">31</div>                      
                                </li>
                                <li class="day other-month">
                                    <div class="date">1</div> <!-- Next Month -->                       
                                </li>
                                <li class="day other-month">
                                    <div class="date">2</div>                       
                                </li>
                                <li class="day other-month">
                                    <div class="date">3</div>                       
                                </li>
                                <li class="day other-month">
                                    <div class="date">4</div>                       
                                </li>
                                <li class="day other-month">
                                    <div class="date">5</div>                       
                                </li>
                                <li class="day other-month">
                                    <div class="date">6</div>                       
                                </li>
                            </ul>
                        </div><!-- /. calendar -->
                    </div><!-- /. wrap -->
                </div>
            </div>
        </section>


        <!-- <section class="section">
            <article class="article">
                <div class="cta-container button-link">
                    <a href="#" class="cta-button" title="">Apply Online</a> 
                </div>
            </article> 
        </section> -->



        <section class="section">
            <article class="article article-body general-content">
                <h3>Admissions Contacts</h3>

                <address class="contact-info">
                    <p class="phone-contact-one">South Africa Admission Enquiries: <a href="tel:011 496 1201 ">+27 11 496 1201</a><br>
                    Kenya Admission Enquiries: <a href="tel:011 496 1202 ">+254 20 123 4567</a><br>
                    Email us: <a href="mailto:learn@novapioneer.com">learn@novapioneer.com</a></p>
                </address>
            </article>
        </section>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_template_part('includes/partials/content', 'stay-updated'); ?>

<?php get_footer(); ?>
