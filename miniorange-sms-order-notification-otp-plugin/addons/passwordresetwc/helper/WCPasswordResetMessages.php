<?php

namespace OTP\Addons\passwordresetwc\Helper;

use OTP\Helper\MoUtility;
use OTP\Objects\BaseMessages;
use OTP\Traits\Instance;

/**
 * This class lists out all the messages that can be used across the AddOn.
 * Created a Base Class to handle all messages.
 */
final class WCPasswordResetMessages extends BaseMessages
{
    use Instance;

    private function __construct()
    {
        /** created an array instead of messages instead of constant variables for Translation reasons. */
        define("MO_WCPR_ADDON_MESSAGES", serialize( array(
            self::WCUSERNAME_MISMATCH => mo_(  'Username that the OTP was sent to and the username submitted do not match'),
            self::WCUSERNAME_NOT_EXIST=> mo_(  "We can't find an account registered with that address or ".
                                            "username or phone number"),
            self::WCRESET_LABEL       => mo_( "To reset your password, please enter your email address, username or phone number below"),
            self::WCRESET_LABEL_OP    => mo_( "To reset your password, please enter your registered phone number below"),
            self::WCRESET_LABEL_EMAIL_ONLY => mo_( "To reset your password, please enter your email address or username."),
            //woocommerce password reset addon
            self::WOO_RESET_ERROR_OTP               => mo_("Please enter a valid Phone Number only.")
        )));
    }


    /**
     * This function is used to fetch and process the Messages to
     * be shown to the user. It was created to mostly show dynamic
     * messages to the user.
     * @param string $messageKeys   message key or keys
     * @param array $data           key value of the data to be replaced in the message
     * @return string
     */
    public static function showMessage($messageKeys , $data=array())
    {
        $displayMessage = "";
        $messageKeys = explode(" ",$messageKeys);
        $messages = unserialize(MO_WCPR_ADDON_MESSAGES);
        $commonMessages = unserialize(MO_MESSAGES);
        $messages = array_merge($messages,$commonMessages);
        foreach ($messageKeys as $messageKey)
        {
            if(MoUtility::isBlank($messageKey)) return $displayMessage;
            $formatMessage = $messages[$messageKey];
            foreach($data as $key => $value)
            {
                $formatMessage = str_replace("{{" . $key . "}}", $value ,$formatMessage);
            }
            $displayMessage.=$formatMessage;
        }
        return $displayMessage;
    }
}