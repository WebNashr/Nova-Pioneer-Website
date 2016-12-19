<!-- page-modal -->
<div class="modal">
    <span class="modal-toggle modal-close">×</span>

    <div class="modal-container">
        <header class="modal-header">
            <img class="modal-logo" src="<?php echo get_template_directory_uri(); ?>/img/nova-logo-2-white.svg" alt="">
            <div class="modal-title">
                <h2>Ormonde School</h2>
                <h1>Open Day</h1>
                <time datetime="2017-10-15 09:00+02:00">15th October, 2017</time>
                <address>49 Dorado Avenue, Ormonde, Johannesburg, South Africa</address>
            </div>
        </header>

        <!-- <p>We hope you will able to make it for our 2017 Open Day. Please confirm your attendance by completing the form below.</p> -->

        <form action="" class="rsvp">
            <fieldset>
                <label for="name">Name</label>
                <input type="text" id="name" required autofocus>
            </fieldset>

            <fieldset>
                <label for="email">Email</label>
                <input type="email" id="email">
            </fieldset>

            <fieldset>
                <label for="guests">Guests</label>
                <input type="text" id="guests" min="0" maxlength="1">
            </fieldset>

            <fieldset>
                <label for="">Attendance</label>
                <span class="radio-pair">
                    <label for="yes" class="radio-label">Yes</label>
                    <input type="radio" value="yes" id="yes" class="radio-button" checked>
                </span>
                <span class="radio-pair">
                    <label for="no" class="radio-label">No</label>
                    <input type="radio" value="no" id="no" class="radio-button">
                </span>
                <span class="radio-pair">
                    <label for="maybe" class="radio-label">Maybe</label>
                    <input type="radio" value="maybe" id="maybe" class="radio-button">
                </span>
            </fieldset>

            <fieldset>
                <!-- <label for="email">Email</label> -->
                <input type="submit" id="submit" value="Send">
            </fieldset>
        </form>
    </div>
</div>
<!-- end page-modal -->