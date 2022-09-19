<?php

use OTP\Helper\MoUtility;

$goBackURL 			= remove_query_arg( array('sms'), sanitize_text_field($_SERVER['REQUEST_URI'] ));
$smsSettings		= $notification_settings->getWcNewCustomerNotif();
$enableDisableTag 	= $smsSettings->page.'_enable';
$textareaTag		= $smsSettings->page.'_smsbody';
$recipientTag		= $smsSettings->page.'_recipient';
$formOptions 		= $smsSettings->page.'_settings';

if(MoUtility::areFormOptionsBeingSaved($formOptions))
{
    $data = array();
    foreach($_POST as $key=>$value){
        $data[$key] = sanitize_text_field($value);
    }
    $isEnabled = array_key_exists($enableDisableTag, $data) ? TRUE : FALSE;
        $sms = MoUtility::isBlank($data[$textareaTag]) ? $smsSettings->defaultSmsBody : MoUtility::sanitizeCheck($textareaTag,$data);

    $notification_settings->getWcNewCustomerNotif()->setIsEnabled($isEnabled);
        $notification_settings->getWcNewCustomerNotif()->setSmsBody($sms);

    update_wc_option('notification_settings',$notification_settings);
    $smsSettings	= $notification_settings->getWcNewCustomerNotif();
}

$recipientValue		= $smsSettings->recipient;
$enableDisable 		= $smsSettings->isEnabled ? "checked" : "";

include MSN_DIR . '/views/smsnotifications/wc-customer-sms-template.php';