<div class="wrap" id="wrap">
    <article>
        <header>
            <h1><?php echo get_admin_page_title(); ?></h1>
        </header>
        <section>
            <?php settings_errors(); ?>
            <form method="post" action="options.php">
                <?php settings_fields( $settings_fields ); ?>

                <?php do_settings_sections( $page_slug ); ?>

                <?php submit_button(); ?>

            </form>
        </section>
    </article>
</div>