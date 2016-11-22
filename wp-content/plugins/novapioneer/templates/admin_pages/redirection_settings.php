<div class="wrap" id="wrap">
    <article>
        <header>
            <h1><?php echo get_admin_page_title(); ?></h1>
        </header>
        <section>
            <form method="post" action="options.php">
                <?php settings_fields( $settings_fields ); ?>

                <?php 
                    foreach( $settings_sections as $section ): 
                        do_settings_sections( $section );
                    endforeach; 
                ?>

                <?php submit_button(); ?>

            </form>
        </section>
    </article>
</div>