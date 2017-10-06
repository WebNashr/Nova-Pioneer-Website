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
function get_nova_campaign_form($post)
{
    ?>
    <form method="post" id="campaign-lead" class="campaign-lead">
          action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
        <input type="hidden" name="action" value="prefix_admin_insert_form_entry" id="action">
        <fieldset>
            <h2><?php echo get_field('form_title', $post->ID); ?></h2>
            <?php echo get_field('form_help', $post->ID); ?>
            <?php echo get_field('form_title', $post->ID);
            echo get_field('gravity_form_id', $post->ID); ?>
        </fieldset>


        <fieldset>
            <input id="" class="form-text" value="Name" type="text"
                   onfocus="if(this.value==this.defaultValue)this.value='';"
                   onblur="if(this.value=='')this.value=this.defaultValue;" required>
        </fieldset>

        <fieldset>
            <input id="" class="form-text" value="Email" type="text"
                   onfocus="if(this.value==this.defaultValue)this.value='';"
                   onblur="if(this.value=='')this.value=this.defaultValue;" required>
        </fieldset>

        <fieldset>
            <input id="" class="form-text" value="Phone" type="text"
                   onfocus="if(this.value==this.defaultValue)this.value='';"
                   onblur="if(this.value=='')this.value=this.defaultValue;" required>
        </fieldset>

        <fieldset>
            <input id="" class="form-submit button button-default button-primary"
                   value="<?php echo get_field('form_button', $post->ID); ?>" type="submit">
        </fieldset>

        <script>
            $(document).ready(function () {
                $('input[name="name"]').keypress(function (e) {
                    if (this.value.length == 'Name') {
                        e.preventDefault();
                        console.log('true');
                        return false;


                    }
                });
                $('#request-visit').change(function () {
                    $(this).val('NO')
                    if ($(this).attr('checked')) {
                        $(this).val('YES');
                    }
                });
            });

        </script>
        <script>
            $(document).ready(function () {
                // open form modal
                $("#enquiry-form").submit(function (e) {
                    e.preventDefault();
                    var action, form_type, subject, redirect, admin_notify, name, email, phone, request_visit
                    action = $('#action').val();
                    form_type = $('#form_type').val();
                    subject = $('#subject').val();
                    redirect = $('#redirect').val();
                    admin_notify = $("input[name='admin_notify[]']").map(function () {
                        return $(this).val();
                    }).get();
                    name = $('#name').val();
                    email = $('#email').val();
                    phone = $('#phone').val();
                    request_visit = $('#request-visit').val();
                    var form = {
                        'action': action,
                        'form_type': form_type,
                        'subject': subject,
                        'redirect': redirect,
                        'admin_notify': admin_notify,
                        'name': name,
                        'email': email,
                        'phone': phone,
                        'request_visit': request_visit,
                    }
                    if ($("#comment").length) {
                        form.comment = $('#comment').val();
                    }
                    if (name == 'Name') {
                        $('#error-span').text('Please Correctly fill the form');
                        return false;
                    }
                    $('#error-span').text('');
                    $('#submit').val('Please Wait..');
                    console.log(form)
                    $.post("<?php echo esc_url(admin_url('admin-ajax.php'));?>", form, function (data) {
                        console.log(data);
                        $(".form-modal").addClass("form-modal-open");
                        console.log('a modal box was opened');

                    });

                });

                // close form modal
                $(".modal-clear, .form-modal").click(function () {
                    $(".form-modal").removeClass("form-modal-open");
                    console.log('a modal box was closed');
                    location.reload();
                });
            })

        </script>
    </form>

    <?php
}