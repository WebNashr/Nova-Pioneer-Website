<?php
/**
 * Created by PhpStorm.
 * User: edgarchris
 * Date: 8/17/17
 * Time: 12:23
 */

/**
 * @param $title
 * @param $comments
 * @param $type
 * @param $subject
 * @param array $admin_emails
 * @param $redirect
 * @param bool $infoBox
 */
function get_nova_campaign_form($post = false)
{
    ?>
    <form method="post" id="campaign-lead" class="campaign-lead"
          action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
        <input type="hidden" name="action" value="prefix_admin_insert_form_entry" id="action">

        <?php

        if (have_rows('campaign_recipients', $post->ID)):
            while (have_rows('campaign_recipients', $post->ID)) : the_row(); ?>
                <input type="hidden" name="admin_notify[]" value="<?php echo base64_encode(get_sub_field('email')) ?>">

            <?php endwhile;
        endif; ?>
        <fieldset>
            <h2><?php echo get_field('form_title', $post->ID); ?></h2>
            <?php echo get_field('form_help', $post->ID); ?>
            <?php echo get_field('form_title', $post->ID);
            echo get_field('gravity_form_id', $post->ID); ?>
        </fieldset>


        <fieldset>
            <input id="name" class="form-text" name="name" value="Name" type="text"
                   onfocus="if(this.value==this.defaultValue)this.value='';"
                   onblur="if(this.value=='')this.value=this.defaultValue;" required>
            <span id="name-error" style="color:red"></span>
        </fieldset>

        <fieldset>
            <input id="email" class="form-text" name="email" value="Email" type="email"
                   onfocus="if(this.value==this.defaultValue)this.value='';"
                   onblur="if(this.value=='')this.value=this.defaultValue;" required>
        </fieldset>

        <fieldset>
            <input id="phone" class="form-text" name="phone" value="Phone" type="text"
                   onfocus="if(this.value==this.defaultValue)this.value='';"
                   onblur="if(this.value=='')this.value=this.defaultValue;" required>
        </fieldset>

        <fieldset>
            <input id="campaign-button" class="form-submit button button-default button-primary"
                   value="<?php echo get_field('form_button', $post->ID); ?>" type="submit">

            <span id="success" style="color:green"></span>
        </fieldset>
        <script>
            $(document).ready(function () {
                console.log('form');
                $("#campaign-lead").submit(function (e) {
                    e.preventDefault();
                    var action, admin_notify, name, email, phone;
                    action = $('#action').val();
                    admin_notify = $("input[name='admin_notify[]']").map(function () {
                        return $(this).val();
                    }).get();
                    name = $('#name').val();
                    email = $('#email').val();
                    phone = $('#phone').val();
                    var form = {
                        'action': action,
                        'admin_notify': admin_notify,
                        'name': name,
                        'email': email,
                        'phone': phone,
                    }
                    if (name == 'Name') {
                        $('#error-span').text('Please Correctly fill the form');
                        return false;
                    }
                    $('#name-error').text('');
                    $('#success').text('');
                    $('#campaign-button').val('Please Wait..');
                    //console.log(form)
                    $.post("<?php echo esc_url(admin_url('admin-ajax.php'));?>", form, function (data) {
                        console.log(data);
                        if (data == 'success') {
                            $('#success').text('Thanks, we will  be in touch.');
                            $('#name').val('');
                            $('#email').val('');
                            $('#phone').val('');
                            $('#campaign-button').val('<?php echo get_field('form_button', $post->ID); ?>');
                            window.setTimeout(function () {
                                window.location.href = "<?php echo site_url()?>";
                            }, 1000);

                        }

                    });

                });

            })

        </script>
    </form>

    <?php
}