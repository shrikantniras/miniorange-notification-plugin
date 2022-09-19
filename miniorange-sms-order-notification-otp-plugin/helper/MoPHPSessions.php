<?php

namespace OTP\Helper;
use OTP\Objects\IMoSessions;

if(! defined( 'ABSPATH' )) exit;


class MoPHPSessions implements IMoSessions
{
    
    static function addSessionVar($key,$val)
    {
        switch(MOV_SESSION_TYPE)
        {
            case 'COOKIE'   :
                setcookie($key, maybe_serialize($val));
                break;
            case 'SESSION'  :
                self::checkSession();
                $_SESSION[$key] = maybe_serialize($val);
                break;
            case 'CACHE'    :
                if(!wp_cache_add($key,maybe_serialize($val))){
                    wp_cache_replace($key,maybe_serialize($val));
                }
                break;

        }
    }

    
    static function getSessionVar($key)
    {
        switch(MOV_SESSION_TYPE)
        {
            case 'COOKIE'   :
                return maybe_unserialize(sanitize_text_field($_COOKIE[$key]));
            case 'SESSION'  :
                self::checkSession();
                return maybe_unserialize(MoUtility::sanitizeCheck($key,$_SESSION));
            case 'CACHE'    :
                return maybe_unserialize(wp_cache_get($key));
        }
    }

    
    static function unsetSession($key)
    {
        switch(MOV_SESSION_TYPE)
        {
            case 'COOKIE'   :
                unset( $_COOKIE[$key] );
                setcookie( $key, '', time() - ( 15 * 60 ) );
                break;
            case 'SESSION'  :
                self::checkSession();
                unset($_SESSION[$key]);
                break;
            case 'CACHE'    :
                wp_cache_delete( $key );
                break;
            
        }
    }

    
    static function checkSession()
    {
        if(MOV_SESSION_TYPE == 'SESSION')
        {
            if (session_id() == '' || !isset($_SESSION)) {
                session_start();
            }
        }
    }
}