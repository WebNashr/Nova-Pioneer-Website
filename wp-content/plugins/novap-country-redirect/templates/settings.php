<div class="wrap" id="wrap">
    <article>
        <header>
            <h1>Novapioneer Redirection Settings</h1>
        </header>
        <section>
            <form method="post" action="options.php">

                <?php settings_fields( 'npcr-redirection-settings' ); ?>

                <?php do_settings_sections('npcr-redirection'); ?>

                <?php submit_button(); ?>

            </form>
        </section>
    </article>
</div>