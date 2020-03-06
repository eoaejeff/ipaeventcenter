<?php
if (!function_exists("SanitizeInput")) {
    function SanitizeInput($string, $filter=true){
        if($filter){
            $illegalChars = array('>','<','"',"'",'%',';',':',',','/','\\','(',')','cc:','CC:','Cc:','cC:','bcc:','BCC:','Bcc:','BCc:','BcC:','bCc:','bcC:','<script>','</script>');
            foreach($illegalChars as $char){
                $string = str_replace($char, '', $string);
            }
        }
        return trim(htmlspecialchars($string));
    }
}

if (!function_exists("SanitizeInputMin")) {
    function SanitizeInputMin($string, $filter=true){
        if($filter){
            $illegalChars = array('>','<','%',';',':','/','\\','cc:','CC:','Cc:','cC:','bcc:','BCC:','Bcc:','BCc:','BcC:','bCc:','bcC:','<script>','</script>');
            foreach($illegalChars as $char){
                $string = str_replace($char, '', $string);
            }
        }
        return trim(htmlspecialchars($string));
    }
}

if (!function_exists("SanitizeInputLogin")) {
    function SanitizeInputLogin($string, $filter=true){
        if($filter){
            $illegalChars = array('>','<','"',"'",';','cc:','CC:','Cc:','cC:','bcc:','BCC:','Bcc:','BCc:','BcC:','bCc:','bcC:','<script>','</script>');
            foreach($illegalChars as $char){
                $string = str_replace($char, '', $string);
            }
        }
        return trim(htmlspecialchars($string));
    }
}

if (!function_exists("SanitizeInputDate")) {
    function SanitizeInputDate($string, $filter=true){
        if($filter){
            $illegalChars = array('>','<','"',"'",'%',';',',','\\','(',')','cc:','CC:','Cc:','cC:','bcc:','BCC:','Bcc:','BCc:','BcC:','bCc:','bcC:','<script>','</script>');
            foreach($illegalChars as $char){
                $string = str_replace($char, '', $string);
            }
        }
        return trim(htmlspecialchars($string));
    }
}

if (!function_exists("SanitizeInputUrl")) {
    function SanitizeInputUrl($string, $filter=true){
        if($filter){
            $illegalChars = array('>','<','"',"'",';',',','(',')','cc:','CC:','Cc:','cC:','bcc:','BCC:','Bcc:','BCc:','BcC:','bCc:','bcC:','<script>','</script>');
            foreach($illegalChars as $char){
                $string = str_replace($char, '', $string);
            }
        }
        return trim(htmlspecialchars($string));
    }
}

// Party Landing Pages
add_action("wp_ajax_submit_parties_landing", "submit_parties_landing");
add_action("wp_ajax_nopriv_submit_parties_landing", "submit_parties_landing");
function submit_parties_landing() {

    global $wpdb;
    //get email settings
    $setting_table_name = $wpdb->prefix . "website_contacts_manager_settings";
    $setting = $wpdb->get_row("SELECT * FROM $setting_table_name LIMIT 1");
    $email_to		= $setting->email_to;
    $email_from		= $setting->email_from;
    $email_subject	= $setting->email_subject;
    $success_msg	= $setting->success_msg;
    $failed_msg		= $setting->failed_msg;
    $wpdb->flush();

    $valid = true;

    if(empty($_POST['fname'])) {
        $valid = false;
    } else {
        $fname = strtolower(SanitizeInput($_POST['fname']));
    }

    if(empty($_POST['lname'])) {
        $valid = false;
    } else {
        $lname = strtolower(SanitizeInput($_POST['lname']));
    }

    if(empty($_POST['phone'])) {
        $valid = false;
    } else {
        $phone = strtolower(SanitizeInputMin($_POST['phone']));
    }

//    if(empty($_POST['eventtype'])) {
//        $valid = false;
//    } else {
        $eventtype = strtolower(SanitizeInputMin($_POST['eventtype']));
//    }

//    if(empty($_POST['company'])) {
//        $valid = false;
//    } else {
        $company = strtolower(SanitizeInput($_POST['company']));
//    }

    if(empty($_POST['email'])) {
        $valid = false;
    } else {
        $email = strtolower(SanitizeInput($_POST['email']));
    }
    if(!preg_match('/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)+$/', $_POST['email'])) {
        $valid = false;
    }

    if(empty($_POST['formAction'])) {
        $formAction = '';
    } else {
        $formAction = $_POST['formAction'];
    }


    $source		 	= 'Event Center Landing';
    $utm_source     = SanitizeInput($_POST['utm_source']);
    $utm_medium     = SanitizeInput($_POST['utm_medium']);
    $utm_campaign   = SanitizeInput($_POST['utm_campaign']);
    $utm_content    = SanitizeInput($_POST['utm_content']);
    $current_page	= $_POST['page'];
    $user_ip        = $_POST['user_ip'];
    $memo			= 'Form submitted from: ' . $current_page . "\n" . 'IP Address: ' . $user_ip;


    if($valid == false) { echo $failed_msg; }

    if($valid == true) {

        $contact_table_name = $wpdb->prefix . "website_contacts_manager";
        $sql = $wpdb->prepare("
        INSERT INTO ".$contact_table_name."
        (fname, lname, phone, interests, company_name, email, source, utm_source, utm_medium, utm_campaign, utm_content, memo, inserted)
        VALUES ( %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, now())",
        $fname, $lname, $phone, $eventtype, $company, $email, $source, $utm_source, $utm_medium, $utm_campaign, $utm_content, $memo );
        $wpdb->query($sql);
        $contact_id = $wpdb->insert_id;
        $wpdb->flush();

        define("to",$email_to);
        define("bcc",'pat@cmdsonline.com, clientemails@cmdsonline.com');
//        define("bcc",'walter@cmdsonline.com,temi@cmdsonline.com,ani@cmdsonline.com');
        define("from",$email_from);
        define("subject",$email_subject);
        $headers = "From: ". constant("from") . "\r\n";
        $headers .= "BCC: ". constant("bcc") . "\r\n";
        $email_msg   = "Contact Details:\n\n";
        $email_msg  .= "First Name: ".$fname."\n";
        $email_msg  .= "Last Name: ".$lname."\n";
        $email_msg  .= "Phone: ".$phone."\n";
        $email_msg  .= "Event Type: ".$eventtype."\n";
        $email_msg  .= "Company: ".$company."\n";
        $email_msg  .= "Email: ".$email."\n";
        $email_msg  .= "Source: ".$source."\n";
        $email_msg  .= "UTM Source: ".$utm_source."\n\n";
        $email_msg  .= "UTM Medium: ".$utm_medium."\n\n";
        $email_msg  .= "UTM Campaign: ".$utm_campaign."\n\n";
        $email_msg  .= "UTM Content: ".$utm_content."\n\n";
        $email_msg  .= "Form submitted from: " . $current_page."\n\n";
        $email_msg  .= "Source IP Address: ".$user_ip."\n\n";
        @mail(constant("to"),constant("subject"),$email_msg,$headers);

        $fname 		= '';
        $lname 		= '';
        $phone 		= '';
        $eventtype  = '';
        $company 	= '';
        $email 		= '';
        $user_ip    = '';

        if (isset($formAction) && $formAction != '' && $formAction != NULL):

            echo '<h2 class="my-4">Thank You! Please wait while we redirect you to the booking site...</h2>';

            echo '<meta http-equiv="refresh" content="0; url=' . $formAction . '" />';

        else:




            echo '<h2 class="mt-4 mb-2">Thank you for your interest in hosting your event at The Event Center. We will reach out to you via email to get the process started.</h2> <p class="mb-4">If you have any immediate questions please call us at ' . $_POST['phone_to_call'] . (!empty($_POST['extension']) ? ' ext.&nbsp;' . $_POST['extension'] : '') . '</p>';

        endif;

    }//if valid

    wp_die(); // this is required to return a proper result
}