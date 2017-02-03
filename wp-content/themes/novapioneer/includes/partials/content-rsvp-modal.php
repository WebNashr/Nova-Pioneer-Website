<!-- page-modal -->
<div class="modal">
    <span class="modal-toggle modal-close">×</span>

    <div class="modal-container">
        <header class="modal-header">
            <img class="modal-logo" src="<?php echo get_template_directory_uri(); ?>/img/nova-logo-2-white.svg">
            <div class="modal-title">
                <h2 id="event-organiser"></h2>
                <h1 id="event-title"></h1>
                <time datetime="" id="event-date"></time>
                <address id="event-location"></address>
            </div>
        </header>

        <form action="<?php echo site_url('/wp-admin/admin-post.php');  ?>" class="rsvp" method="POST">
            <fieldset>
                <label for="name">Name</label>
                <input name="rsvp_name" type="text" id="name" required autofocus>
            </fieldset>

            <fieldset>
                <label for="email">Email</label>
                <input name="rsvp_email" type="email" id="email">
            </fieldset>

            <fieldset>
                <label for="guests">Guests</label>
                <input name="rsvp_guests" type="text" id="guests" min="0" maxlength="1">
            </fieldset>

            <fieldset>
                <label for="">Attendance</label>
                <span class="radio-pair">
                    <label for="yes" class="radio-label">Yes</label>
                    <input name="rsvp_attendance" type="radio" value="yes" id="yes" class="radio-button" checked>
                </span>
                <span class="radio-pair">
                    <label for="no" class="radio-label">No</label>
                    <input name="rsvp_attendance" type="radio" value="no" id="no" class="radio-button">
                </span>
                <span class="radio-pair">
                    <label for="maybe" class="radio-label">Maybe</label>
                    <input name="rsvp_attendance" type="radio" value="maybe" id="maybe" class="radio-button">
                </span>
            </fieldset>

            <fieldset>
                <input id="event-id" type="hidden" name="event_id" value="" />
                <input id="action" name="action" type="hidden" value="event-rsvp" />
                <input type="submit" id="submit" value="Send" />
            </fieldset>
        </form>
    </div>
</div>
<!-- end page-modal -->