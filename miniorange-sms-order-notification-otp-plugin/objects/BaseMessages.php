<?php

namespace OTP\Objects;

class BaseMessages
{
    const BLOCKED_COUNTRY ="BLOCKED_COUNTRY";
    const NEED_TO_REGISTER = "NEED_TO_REGISTER";
    const GLOBALLY_INVALID_PHONE_FORMAT = "GLOBALLY_INVALID_PHONE_FORMAT";
    const WPUSERNAME_MISMATCH  = "WPUSERNAME_MISMATCH";
    const WPUSERNAME_NOT_EXIST = "WPUSERNAME_NOT_EXIST";
    const WPRESET_LABEL = "WPRESET_LABEL";
    const WPRESET_LABEL_OP = "WPRESET_LABEL_OP";
    const WPRESET_LABEL_EMAIL_ONLY = "WPRESET_LABEL_EMAIL_ONLY";
    const WP_RESET_ERROR_OTP = "WP_RESET_ERROR_OTP";

    const INVALID_SCRIPTS = "INVALID_SCRIPTS";
    const OTP_SENT_PHONE = "OTP_SENT_PHONE";
    const OTP_SENT_EMAIL = "OTP_SENT_EMAIL";
    const ERROR_OTP_EMAIL = "ERROR_OTP_EMAIL";
    const ERROR_OTP_PHONE = "ERROR_OTP_PHONE";
    const ERROR_PHONE_FORMAT = "ERROR_PHONE_FORMAT";
    const ERROR_EMAIL_FORMAT = "ERROR_EMAIL_FORMAT";
    const CHOOSE_METHOD = "CHOOSE_METHOD";
    const PLEASE_VALIDATE = "PLEASE_VALIDATE";
    const REGISTER_WITH_US  = "REGISTER_WITH_US";
    const ACTIVATE_PLUGIN   = "ACTIVATE_PLUGIN";
    const CONFIG_GATEWAY  = "CONFIG_GATEWAY";
    const ERROR_PHONE_BLOCKED = "ERROR_PHONE_BLOCKED";
    const ERROR_EMAIL_BLOCKED = "ERROR_EMAIL_BLOCKED";
    const FORM_NOT_AVAIL_HEAD = "FORM_NOT_AVAIL_HEAD";
    const FORM_NOT_AVAIL_BODY = "FORM_NOT_AVAIL_BODY";
    const CHANGE_SENDER_ID_BODY = "CHANGE_SENDER_ID_BODY";
    const CHANGE_SENDER_ID_HEAD = "CHANGE_SENDER_ID_HEAD";
    const CHANGE_EMAIL_ID_BODY = "CHANGE_EMAIL_ID_BODY";
    const CHANGE_EMAIL_ID_HEAD = "CHANGE_EMAIL_ID_HEAD";
    const INFO_HEADER = "INFO_HEADER";
    const META_KEY_HEADER = "META_KEY_HEADER";
    const META_KEY_BODY = "META_KEY_BODY";
    const ENABLE_BOTH_BODY = "ENABLE_BOTH_BODY";
    const COUNTRY_CODE_HEAD = "COUNTRY_CODE_HEAD";
    const COUNTRY_CODE_BODY = "COUNTRY_CODE_BODY";
    const WC_GUEST_CHECKOUT_HEAD = "WC_GUEST_CHECKOUT_HEAD";
    const WC_GUEST_CHECKOUT_BODY = "WC_GUEST_CHECKOUT_BODY";
    const SUPPORT_FORM_VALUES = "SUPPORT_FORM_VALUES";
    const SUPPORT_FORM_SENT = "SUPPORT_FORM_SENT";
    const PREM_SUPPORT_FORM_SENT = "PREM_SUPPORT_FORM_SENT";
    const SUPPORT_FORM_ERROR = "SUPPORT_FORM_ERROR";
    const FEEDBACK_SENT = "FEEDBACK_SENT";
    const FEEDBACK_ERROR = "FEEDBACK_ERROR";
    const SETTINGS_SAVED = "SETTINGS_SAVED";
    const REG_ERROR = "REG_ERROR";
    const MSG_TEMPLATE_SAVED = "MSG_TEMPLATE_SAVED";
    const SMS_TEMPLATE_SAVED = "SMS_TEMPLATE_SAVED";
    const SMS_TEMPLATE_ERROR = "SMS_TEMPLATE_ERROR";
    const EMAIL_TEMPLATE_SAVED = "EMAIL_TEMPLATE_SAVED";
    const CUSTOM_MSG_SENT = "CUSTOM_MSG_SENT";
    const CUSTOM_MSG_SENT_FAIL = "CUSTOM_MSG_SENT_FAIL";
    const EXTRA_SETTINGS_SAVED = "EXTRA_SETTINGS_SAVED";
    const NINJA_FORM_FIELD_ERROR = "NINJA_FORM_FIELD_ERROR";
    const NINJA_CHOOSE = "NINJA_CHOOSE";
    const EMAIL_MISMATCH = "EMAIL_MISMATCH";
    const PHONE_MISMATCH = "PHONE_MISMATCH";
    const ENTER_PHONE = "ENTER_PHONE";
    const ENTER_EMAIL = "ENTER_EMAIL";
    const CF7_PROVIDE_EMAIL_KEY = "CF7_PROVIDE_EMAIL_KEY";
    const CF7_CHOOSE = "CF7_CHOOSE";
    const BP_PROVIDE_FIELD_KEY = "BP_PROVIDE_FIELD_KEY";
    const BP_CHOOSE = "BP_CHOOSE";
    const UM_CHOOSE = "UM_CHOOSE";
    const UM_PROFILE_CHOOSE = "UM_PROFILE_CHOOSE";
    const EVENT_CHOOSE = "EVENT_CHOOSE";
    const UULTRA_PROVIDE_FIELD = "UULTRA_PROVIDE_FIELD";
    const UULTRA_CHOOSE = "UULTRA_CHOOSE";
    const CRF_PROVIDE_PHONE_KEY = "CRF_PROVIDE_PHONE_KEY";
    const CRF_PROVIDE_EMAIL_KEY = "CRF_PROVIDE_EMAIL_KEY";
    const CRF_CHOOSE = "CRF_CHOOSE";
    const SMPLR_PROVIDE_FIELD = "SMPLR_PROVIDE_FIELD";
    const SIMPLR_CHOOSE = "SIMPLR_CHOOSE";
    const UPME_PROVIDE_PHONE_KEY = "UPME_PROVIDE_PHONE_KEY";
    const UPME_CHOOSE = "UPME_CHOOSE";
    const PB_PROVIDE_PHONE_KEY = "PB_PROVIDE_PHONE_KEY";
    const PB_CHOOSE = "PB_CHOOSE";
    const PIE_PROVIDE_PHONE_KEY = "PIE_PROVIDE_PHONE_KEY";
    const PIE_CHOOSE = "PIE_CHOOSE";
    const ENTER_PHONE_CODE = "ENTER_PHONE_CODE";
    const ENTER_EMAIL_CODE = "ENTER_EMAIL_CODE";
    const ENTER_VERIFY_CODE = "ENTER_VERIFY_CODE";
    const PHONE_VALIDATION_MSG = "PHONE_VALIDATION_MSG";
    const WC_CHOOSE_METHOD = "WC_CHOOSE_METHOD";
    const WC_CHECKOUT_CHOOSE = "WC_CHECKOUT_CHOOSE";
    const TMLM_CHOOSE = "TMLM_CHOOSE";
    const ENTER_PHONE_DEFAULT = "ENTER_PHONE_DEFAULT";
    const WP_CHOOSE_METHOD = "WP_CHOOSE_METHOD";
    const AUTO_ACTIVATE_HEAD = "AUTO_ACTIVATE_HEAD";
    const AUTO_ACTIVATE_BODY = "AUTO_ACTIVATE_BODY";
    const USERPRO_CHOOSE = "USERPRO_CHOOSE";
    const USERPRO_VERIFY = "USERPRO_VERIFY";
    const PASS_LENGTH = "PASS_LENGTH";
    const PASS_MISMATCH = "PASS_MISMATCH";
    const OTP_SENT = "OTP_SENT";
    const ERR_OTP = "ERR_OTP";
    const REG_SUCCESS = "REG_SUCCESS";
    const ACCOUNT_EXISTS = "ACCOUNT_EXISTS";
    const REG_COMPLETE = "REG_COMPLETE";
    const INVALID_OTP = "INVALID_OTP";
    const RESET_PASS = "RESET_PASS";
    const REQUIRED_FIELDS = "REQUIRED_FIELDS";
    const REQUIRED_OTP = "REQUIRED_OTP";
    const INVALID_SMS_OTP = "INVALID_SMS_OTP";
    const NEED_UPGRADE_MSG = "NEED_UPGRADE_MSG";
    const VERIFIED_LK = "VERIFIED_LK";
    const LK_IN_USE = "LK_IN_USE";
    const INVALID_LK = "INVALID_LK";
    const REG_REQUIRED = "REG_REQUIRED";
    const UNKNOWN_ERROR = "UNKNOWN_ERROR";
    const MO_REG_ENTER_PHONE = "MO_REG_ENTER_PHONE";
    const INVALID_OP = "INVALID_OP";
    const UPGRADE_MSG = "UPGRADE_MSG";
    const FREE_PLAN_MSG = "FREE_PLAN_MSG";
    const TRANS_LEFT_MSG = "TRANS_LEFT_MSG";
    const YOUR_GATEWAY_HEADER = "YOUR_GATEWAY_HEADER";
    const YOUR_GATEWAY_BODY = "YOUR_GATEWAY_BODY";
    const MO_GATEWAY_HEADER = "MO_GATEWAY_HEADER";
    const MO_GATEWAY_BODY = "MO_GATEWAY_BODY";
    const MO_PAYMENT     = "MO_PAYMENT";
    const GRAVITY_CHOOSE = "GRAVITY_CHOOSE";
    const PHONE_NOT_FOUND = "PHONE_NOT_FOUND";
    const REGISTER_PHONE_LOGIN = "REGISTER_PHONE_LOGIN";
    const WP_MEMBER_CHOOSE = "WP_MEMBER_CHOOSE";
    const UMPRO_VERIFY = "UMPRO_VERIFY";
    const UMPRO_CHOOSE = "UMPRO_CHOOSE";
    const CLASSIFY_THEME = "CLASSIFY_THEME";
    const REALES_THEME = "REALES_THEME";
    const LOGIN_MISSING_KEY = "LOGIN_MISSING_KEY";
    const PHONE_EXISTS = "PHONE_EXISTS";
    const WP_LOGIN_CHOOSE = "WP_LOGIN_CHOOSE";
    const WPCOMMNENT_CHOOSE = "WPCOMMNENT_CHOOSE";
    const WPCOMMNENT_PHONE_ENTER = "WPCOMMNENT_PHONE_ENTER";
    const WPCOMMNENT_VERIFY_ENTER = "WPCOMMNENT_VERIFY_ENTER";
    const FORMCRAFT_CHOOSE = "FORMCRAFT_CHOOSE";
    const FORMCRAFT_FIELD_ERROR = "FORMCRAFT_FIELD_ERROR";
    const WPEMEMBER_CHOOSE = "WPEMEMBER_CHOOSE";
    const DOC_DIRECT_VERIFY = "DOC_DIRECT_VERIFY";
    const DCD_ENTER_VERIFY_CODE = "DCD_ENTER_VERIFY_CODE";
    const DOC_DIRECT_CHOOSE = "DOC_DIRECT_CHOOSE";
    const WPFORM_FIELD_ERROR = "WPFORM_FIELD_ERROR";
    const CALDERA_FIELD_ERROR = "CALDERA_FIELD_ERROR";
    const INVALID_USERNAME = "INVALID_USERNAME";
    const UM_LOGIN_CHOOSE = "UM_LOGIN_CHOOSE";
    const MEMBERPRESS_CHOOSE = "MEMBERPRESS_CHOOSE";
    const REQUIRED_TAGS = "REQUIRED_TAGS";
    const TEMPLATE_SAVED = "TEMPLATE_SAVED";
    const DEFAULT_SMS_TEMPLATE = "DEFAULT_SMS_TEMPLATE";
    const EMAIL_SUBJECT = "EMAIL_SUBJECT";
    const DEFAULT_EMAIL_TEMPLATE = "DEFAULT_EMAIL_TEMPLATE";
    const ADD_ON_VERIFIED = "ADD_ON_VERIFIED";
    const INVALID_PHONE = "INVALID_PHONE";
    const ERROR_SENDING_SMS = "ERROR_SENDING_SMS";
    const SMS_SENT_SUCCESS = "SMS_SENT_SUCCESS";
    const OTP_LENGTH_HEADER = "OTP_LENGTH_HEADER";
    const OTP_LENGTH_BODY = "OTP_LENGTH_BODY";
    const OTP_VALIDITY_HEADER = "OTP_VALIDITY_HEADER";
    const OTP_VALIDITY_BODY = "OTP_VALIDITY_BODY";
    const DEFAULT_BOX_HEADER = "DEFAULT_BOX_HEADER";
    const GO_BACK = "GO_BACK";
    const RESEND_OTP = "RESEND_OTP";
    const VALIDATE_OTP = "VALIDATE_OTP";
    const VERIFY_CODE = "VERIFY_CODE";
    const SEND_OTP = "SEND_OTP";
    const VALIDATE_PHONE_NUMBER = "VALIDATE_PHONE_NUMBER";
    const VERIFY_CODE_DESC = "VERIFY_CODE_DESC";
    const WC_BUTTON_TEXT = "WC_BUTTON_TEXT";
    const WC_POPUP_BUTTON_TEXT = "WC_POPUP_BUTTON_TEXT";
    const WC_LINK_TEXT = "WC_LINK_TEXT";
    const WC_EMAIL_TTLE = "WC_EMAIL_TTLE";
    const WC_PHONE_TTLE = "WC_PHONE_TTLE";
    const VISUAL_FORM_CHOOSE = "VISUAL_FORM_CHOOSE";
    const FORMIDABLE_CHOOSE = "FORMIDABLE_CHOOSE";
    const FORMMAKER_CHOOSE = "FORMMAKER_CHOOSE";
    const WC_BILLING_CHOOSE = "WC_BILLING_CHOOSE";
    const EMAIL_EXISTS = "EMAIL_EXISTS";
    const INSTALL_PREMIUM_PLUGIN = 'INSTALL_PREMIUM_PLUGIN';

        const USERNAME_MISMATCH = "USERNAME_MISMATCH";
    const USERNAME_NOT_EXIST = "USERNAME_NOT_EXIST";
    const RESET_LABEL = "RESET_LABEL";
    const RESET_LABEL_OP = "RESET_LABEL_OP";

          const WCUSERNAME_MISMATCH = "WCUSERNAME_MISMATCH";
     const WCUSERNAME_NOT_EXIST = "WCUSERNAME_NOT_EXIST";
     const WCRESET_LABEL = "WCRESET_LABEL";
     const WCRESET_LABEL_OP = "WCRESET_LABEL_OP";
     const WOO_RESET_ERROR_OTP= 'WOO_RESET_ERROR_OTP';
     const WCRESET_LABEL_EMAIL_ONLY='WCRESET_LABEL_EMAIL_ONLY';

        const NEW_UM_CUSTOMER_NOTIF_HEADER = "NEW_UM_CUSTOMER_NOTIF_HEADER";
    const NEW_UM_CUSTOMER_NOTIF_BODY = "NEW_UM_CUSTOMER_NOTIF_BODY";
    const NEW_UM_CUSTOMER_SMS = "NEW_UM_CUSTOMER_SMS";
    const NEW_UM_CUSTOMER_ADMIN_NOTIF_BODY = "NEW_UM_CUSTOMER_ADMIN_NOTIF_BODY";
    const NEW_UM_CUSTOMER_ADMIN_SMS = "NEW_UM_CUSTOMER_ADMIN_SMS";

        const NEW_WP_CUSTOMER_NOTIF_HEADER = "NEW_WP_CUSTOMER_NOTIF_HEADER";
    const NEW_WP_CUSTOMER_NOTIF_BODY = "NEW_WP_CUSTOMER_NOTIF_BODY";
    const NEW_WP_CUSTOMER_SMS = "NEW_WP_CUSTOMER_SMS";
    const NEW_WP_CUSTOMER_ADMIN_NOTIF_BODY = "NEW_WP_CUSTOMER_ADMIN_NOTIF_BODY";
    const NEW_WP_CUSTOMER_ADMIN_SMS = "NEW_WP_CUSTOMER_ADMIN_SMS";
    const PHONE_ID_HEADER = "PHONE_HEADER";
    const PHONE_ID_BODY = "PHONE_ID_BODY";
        const NEW_WC_CUSTOMER_ADMIN_SMS ="NEW_WC_CUSTOMER_ADMIN_SMS";
    const NEW_CUSTOMER_ADMIN_NOTIF_BODY= "NEW_CUSTOMER_ADMIN_NOTIF_BODY";
    const NEW_CUSTOMER_NOTIF_HEADER = "NEW_CUSTOMER_NOTIF_HEADER";
    const NEW_CUSTOMER_NOTIF_BODY = "NEW_CUSTOMER_NOTIF_BODY";
    const NEW_CUSTOMER_SMS_WITH_PASS = "NEW_CUSTOMER_SMS_WITH_PASS";
    const NEW_CUSTOMER_SMS = "NEW_CUSTOMER_SMS";
    const CUSTOMER_NOTE_NOTIF_HEADER = "CUSTOMER_NOTE_NOTIF_HEADER";
    const CUSTOMER_NOTE_NOTIF_BODY = "CUSTOMER_NOTE_NOTIF_BODY";
    const CUSTOMER_NOTE_SMS = "CUSTOMER_NOTE_SMS";
    const NEW_ORDER_NOTIF_HEADER = "NEW_ORDER_NOTIF_HEADER";
    const NEW_ORDER_NOTIF_BODY = "NEW_ORDER_NOTIF_BODY";
    const ADMIN_STATUS_SMS = "ADMIN_STATUS_SMS";
    const ORDER_ON_HOLD_NOTIF_HEADER = "ORDER_ON_HOLD_NOTIF_HEADER";
    const ORDER_ON_HOLD_NOTIF_BODY = "ORDER_ON_HOLD_NOTIF_BODY";
    const ORDER_ON_HOLD_SMS = "ORDER_ON_HOLD_SMS";
    const ORDER_PROCESSING_NOTIF_HEADER = "ORDER_PROCESSING_NOTIF_HEADER";
    const ORDER_PROCESSING_NOTIF_BODY = "ORDER_PROCESSING_NOTIF_BODY";
    const PROCESSING_ORDER_SMS = "PROCESSING_ORDER_SMS";
    const ORDER_COMPLETED_NOTIF_HEADER = "ORDER_COMPLETED_NOTIF_HEADER";
    const ORDER_COMPLETED_NOTIF_BODY = "ORDER_COMPLETED_NOTIF_BODY";
    const ORDER_COMPLETED_SMS = "ORDER_COMPLETED_SMS";
    const ORDER_REFUNDED_NOTIF_HEADER = "ORDER_REFUNDED_NOTIF_HEADER";
    const ORDER_REUNDED_NOTIF_BODY = "ORDER_REUNDED_NOTIF_BODY";
    const ORDER_REFUNDED_SMS = "ORDER_REFUNDED_SMS";
    const ORDER_CANCELLED_NOTIF_HEADER = "ORDER_CANCELLED_NOTIF_HEADER";
    const ORDER_CANCELLED_NOTIF_BODY = "ORDER_CANCELLED_NOTIF_BODY";
    const ORDER_CANCELLED_SMS = "ORDER_CANCELLED_SMS";
    const ORDER_FAILED_NOTIF_HEADER = "ORDER_FAILED_NOTIF_HEADER";
    const ORDER_FAILED_NOTIF_BODY = "ORDER_FAILED_NOTIF_BODY";
    const ORDER_FAILED_SMS = "ORDER_FAILED_SMS";
    const ORDER_PENDING_NOTIF_HEADER = "ORDER_PENDING_NOTIF_HEADER";
    const ORDER_PENDING_NOTIF_BODY = "ORDER_PENDING_NOTIF_BODY";
    const ORDER_PENDING_SMS = "ORDER_PENDING_SMS";
    const FORGOT_PASSWORD_MESSAGE= "FORGOT_PASSWORD_MESSAGE";
    const ENTERPRIZE_EMAIL = "ENTERPRIZE_EMAIL";
    const REGISTRATION_ERROR ="REGISTRATION_ERROR";            
    const CUSTOM_CHOOSE =   "CUSTOM_CHOOSE";
    const GATEWAY_PARAM_NOTE = "GATEWAY_PARAM_NOTE";
    const CUSTOM_PACKS = "CUSTOM_PACKS";
    const REMAINING_TRANSACTION_MSG = "REMAINING_TRANSACTION_MSG";
    const CUSTOM_FORM_MESSAGE = 'CUSTOM_FORM_MESSAGE';
}