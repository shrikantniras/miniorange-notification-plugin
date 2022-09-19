<?php

use OTP\Helper\MoUtility;

$goBackURL 			= remove_query_arg( array('sms'), sanitize_text_field($_SERVER['REQUEST_URI'] ));
$smsSettings		= $notification_settings->getWcOrderProcessingNotif();
$enableDisableTag 	= $smsSettings->page.'_enable';
$textareaTag		= $smsSettings->page.'_smsbody';
$recipientTag		= $smsSettings->page.'_recipient';
$formOptions 		= $smsSettings->page.'_settings';

if(MoUtility::areFormOptionsBeingSaved($formOptions))
{
    $data = sanitize_post($_POST);
    $isEnabled = array_key_exists($enableDisableTag, $data) ? TRUE : FALSE;
        $sms = MoUtility::isBlank($data[$textareaTag]) ? $smsSettings->defaultSmsBody : MoUtility::sanitizeCheck($textareaTag,$data);

    $notification_settings->getWcOrderProcessingNotif()->setIsEnabled($isEnabled);
        $notification_settings->getWcOrderProcessingNotif()->setSmsBody($sms);

    update_wc_option('notification_settings',$notification_settings);
    $smsSettings	= $notification_settings->getWcOrderProcessingNotif();
}

$recipientValue		= $smsSettings->recipient;
$enableDisable 		= $smsSettings->isEnabled ? "checked" : "";

include MSN_DIR . '/views/smsnotifications/wc-customer-sms-template.php';