<?php
require_once 'LeadsMailer.php';
add_action('wp', 'set_nova_forms');
function set_nova_forms()
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'nova_campaign_forms';
    $charset_collate = $wpdb->get_charset_collate();
// Check if table exists and create it if it doesn't
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name';") != $table_name) {
        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id int(9) NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        phone varchar(255) NOT NULL,
        inserted_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    )$charset_collate;";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

        return true;

    } else {
        return false;
    }
}

//ajax shit
add_action('wp_ajax_prefix_admin_insert_form_entry', 'prefix_admin_insert_form_entry');
add_action('wp_ajax_nopriv_prefix_admin_insert_form_entry', 'prefix_admin_insert_form_entry');
//normal post
add_action('admin_post_insert_form_entry', 'prefix_admin_insert_form_entry');
add_action('admin_post_nopriv_insert_form_entry', 'prefix_admin_insert_form_entry');
function prefix_admin_insert_form_entry()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'nova_campaign_forms';
    $data = (object)$_REQUEST;
    $insert_form = array(
        'name' => $data->name,
        'email' => $data->email,
        'phone' => $data->phone,
    );
    $data_types = array('%s', '%s', '%s');

    $insert = $wpdb->insert($table_name, $insert_form, $data_types);
    if ($insert) {
        $notify = form_entry_notify($data);
        if ($notify) {
            echo 'success';
            exit;
        }
    }

    //return false;
    echo 'fail';


}


function form_entry_notify($data)
{
    foreach ($data->admin_notify as $email) {
        $mail = base64_decode($email);
        $to_email[$mail] = $mail;
    };
    $bcc_email = array(
        "edgar@circle.co.ke" => "Circle Developers",);
    $adminNotifier = new  LeadsMailer();

    $subject = "New Kenya Campaign Lead";
    $adminMessage = 'New lead KE' . "\r\n";
    $adminMessage .= '<p>name : ' . $data->name . "</p>";
    $adminMessage .= '<p>Email: ' . $data->email . "</p>";
    $adminMessage .= '<p>Phone :' . $data->phone . "</p>";
    $adminNotifier->sendMail($subject, $adminMessage, $to_email, $bcc_email, 'keCampaign@novapioneer.com', $data->name);
    return true;
}