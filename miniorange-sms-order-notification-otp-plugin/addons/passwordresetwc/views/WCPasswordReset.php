<?php

use OTP\Addons\passwordresetwc\Helper\WCPasswordResetMessages;
use OTP\Addons\passwordresetwc\Helper\WCPasswordResetUtility;

echo'	<div class="mo_registration_divided_layout mo-otp-full">
            <div class="mo_registration_table_layout mo-otp-center">';

            WCPasswordResetUtility::is_addon_activated();

echo'		    <table style="width:100%">
                    <form name="f" method="post" action="" id="mo_wc_pr_notif_settings">
                        <input type="hidden" id="error_message" name="error_message" value="">
                        <input type="hidden" name="option" value="'.esc_attr($formOption).'" />';

                        wp_nonce_field($nonce);

echo'			            <tr>
                                <td>
                                    <h2>'.mo_("WOOCOMMERCE PASSWORD RESET SETTINGS").'
                                        <span style="float:right;margin-top:-10px;">
                                            <a  href="'.esc_attr($addon).'" 
                                                id="goBack" 
                                                class="button button-primary button-large">
                                                '.mo_("Go Back").'
                                            </a>
                                            <input  type="submit" 
                                                    name="save" 
                                                    id="save" '.esc_attr($disabled).' 
                                                    class="button button-primary button-large" 
                                                    value="'.mo_('Save Settings').'">
                                        </span>
                                    </h2>
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>'.mo_("Enable or Disable Options for the Password Reset Form.").'</td>
                            </tr>
                            <tr>
                                <table class="wcpr-table-list" cellspacing="0" style="width:100%">
                                    <tr>
                                        <td>
                                            <div class="mo_otp_form" style="text-align: left;">
                                                <input  type="checkbox" '.esc_attr($disabled).' 
                                                        id="wc_pr" 
                                                        value="1"
                                                        data-toggle="wc_pr_options" 
                                                        class="app_enable" '.esc_attr($wcpr_enabled).' 
                                                        name="mo_customer_validation_wc_pr_enable" />
                                                <strong>'. mo_esc_string($form_name, "attr") . '</strong>
                                                <div    class="mo_registration_help_desc"  '.esc_attr($wcpr_hidden).' 
                                                        id="wc_pr_options">                                              
                                                    <p>
                                                        <input  type="radio" '.esc_attr($disabled).' 
                                                                id="wc_phone" 
                                                                name="mo_customer_validation_wc_pr_enable_type" 
                                                                data-toggle="wc_pr_phone_option" 
                                                                class="app_enable"
                                                                value="'.esc_attr($wcpr_type_phone).'" 
                                                                '.( $wcpr_enabled_type == $wcpr_type_phone ? "checked" : "").' />
                                                        <strong>'. mo_( "Enable Phone Verification" ).'</strong>
                                                    </p>
                                                    <div    '.($wcpr_enabled_type != $wcpr_type_phone ? "hidden" :"").'
                                                            class="mo_registration_help_desc" 
                                                            id="wc_pr_phone_option" 
                                                            '.esc_attr($disabled).'">
                                                        <p>'. mo_( "Enter the phone User Meta Key" );
                                                            mo_draw_tooltip(
                                                                WCPasswordResetMessages::showMessage(WcPasswordResetMessages::META_KEY_HEADER),
                                                                WcPasswordResetMessages::showMessage(WcPasswordResetMessages::META_KEY_BODY)
                                                            );

echo'							                            : <input    class="mo_registration_table_textbox"
                                                                        id="mo_customer_validation_wc_pr_phone_field_key"
                                                                        name="mo_customer_validation_wc_pr_phone_field_key"
                                                                        type="text" 
                                                                        style="width: 48%;"
                                                                        value="'.esc_attr($wcpr_field_key).'">
                                                            <div class="mo_otp_note">
                                                                '.mo_("If you don't know the metaKey against which".
                                                                        " the phone number is stored for all your users ".
                                                                        "then put the default value as phone." ).'
                                                            </div>
                                                        </p>

                                                        <input  type="checkbox" '.esc_attr($disabled).'
                                                                id="wc_pr_only_phone"
                                                                name="mo_customer_validation_wc_pr_only_phone"
                                                                value="1"
                                                                '.esc_attr($wcpr_only_phone).' />
                                                        <strong>'. mo_( "Use only Phone Number. Do not allow username or email to reset password." ).'</strong>

                                                    </div>
                                                    <p>
                                                        <input  type="radio" '.esc_attr($disabled).' 
                                                                id="wc_email" 
                                                                class="app_enable" 
                                                                name="mo_customer_validation_wc_pr_enable_type" 
                                                                value="'.esc_attr($wcpr_type_email).'"
                                                                '.( $wcpr_enabled_type == $wcpr_type_email ? "checked" : "").' />
                                                        <strong>'. mo_( "Enable Email Verification" ).'</strong>
                                                    </p>
                                                    <p>
                                                        <p>
                                                            <i><b>'.mo_("Verification Button text").':</b></i>
                                                            <input style="width: 59%;margin-left: 2%;"
                                                                   class="mo_registration_table_textbox" 
                                                                   name="mo_customer_validation_wc_pr_button_text" 
                                                                   type="text" 
                                                                   value="'.esc_attr($wcpr_button_text).'">
                                                        </p>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </tr>
                        </form>	
                    </table>
                </div>
            </div>';