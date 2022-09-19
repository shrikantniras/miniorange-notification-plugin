<?php

use OTP\Helper\MoUtility;

$goBackURL 			= remove_query_arg( array('sms'), sanitize_text_field($_SERVER['REQUEST_URI'] ));
$smsSettings		= $notification_settings->getWcOrderCompletedNotif();
$enableDisableTag 	= $smsSettings->page.'_enable';
$textareaTag		= $smsSettings->page.'_smsbody';
$recipientTag		= $smsSettings->page.'_recipient';
$formOptions 		= $smsSettings->page.'_settings';

if(MoUtility::areFormOptionsBeingSaved($formOptions))
{
	$sanitizedPost = MoUtility::sanitize_post($_POST);
    $isEnabled = array_key_exists($enableDisableTag, $sanitizedPost) ? TRUE : FALSE;
        $sms = MoUtility::isBlank($sanitizedPost[$textareaTag]) ? $smsSettings->defaultSmsBody : MoUtility::sanitizeCheck($textareaTag,$sanitizedPost);

    $notification_settings->getWcOrderCompletedNotif()->setIsEnabled($isEnabled);
        $notification_settings->getWcOrderCompletedNotif()->setSmsBody($sms);

    update_wc_option('notification_settings',$notification_settings);
    $smsSettings	= $notification_settings->getWcOrderCompletedNotif();
}

$recipientValue		= $smsSettings->recipient;
$enableDisable 		= $smsSettings->isEnabled ? "checked" : "";

include MSN_DIR . '/views/smsnotifications/wc-customer-sms-template.php';