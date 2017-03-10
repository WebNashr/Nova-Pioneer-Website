<?php

// This file shouldn't be called directly from the browser
if ( !defined('NOVAP_REDIRECT_BASEDON_COUNTRY') )
{
    die();
}

function get_location()
{
    $ip_address = $_SERVER['REMOTE_ADDR'];

    $location_data = unserialize(
        file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip_address)
    );

    return $location_data;
}

function novap_redirect_basedon_country()
{
    $actual_link = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    $country = get_location()["geoplugin_countryName"];

    switch($country){
        case "Kenya":
            header("Location: ".$actual_link."kenya", true, 301);  exit;
            break;
        case "South Africa":
            header("Location: ".$actual_link."sa", true, 301); exit;
            break;
        default:
            // do nothing
            break;
    }
}

// Redirect if NOVAP_REDIRECT_BASEDON_COUNTRY is set to true
if( NOVAP_REDIRECT_BASEDON_COUNTRY )
{
    novap_redirect_basedon_country();
}
