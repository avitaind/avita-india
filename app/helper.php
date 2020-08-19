<?php

function bytesToHuman($bytes, $precision = 2)
{
    $units = [' bytes', ' KB', ' MB', ' GB', ' TB'];

    for ($i = 0; $bytes > 1024; $i++) {
        $bytes /= 1024;
    }

    return round($bytes, $precision) . $units[$i];
}

function enabled_countries(  ) {

 	return ['in'];
}

function supported_language( $country ) {

    switch ( $country ) {
        case 'in':
            return ['en'];

        default:
            return ['en'];
    }

}

function facebookLinkForCountry( $country ) {

    switch ( $country ) {
        case 'in':  return 'https://www.facebook.com/AvitaIndia/';
        default:    return "";
    }
}

function instagramLinkForCountry( $country ) {

    switch ( $country ) {
        case 'in':  return 'https://www.instagram.com/avitaind/';
        default:    return "";
    }
}

function twitterLinkForCountry( $country ) {

    switch ( $country ) {
        case 'in':  return 'https://twitter.com/AvitaIndia';
        default:    return "";
    }
}

function whatsappLinkForCountry( $country ) {

    switch ( $country ) {
        case 'in':  return 'https://api.whatsapp.com/send?phone=917827845054';
             default:    return "";
    }
}


function youtubeLinkForCountry( $country ) {

    switch ( $country ) {
        case 'in':  return 'https://www.youtube.com/channel/UC57qf-v-MTtvJMVjejm-Khg';
             default:    return "";
    }
}


function metaKeywordByCountryAndLanguage( $country, $language ) {

    // Default
    $keyword = "AVITA LIBER 12.5\", Core i5 Intel CPU, Windows Hello, fingerprint, USB 3.0 ports, USB Type-C, USB-C";

    switch ( $country ) {
        case 'in':
            if ( $language == 'en') {
                $keyword = "AVITA LIBER 12.5\", Core i5 Intel CPU, Windows Hello, fingerprint, USB 3.0 ports, USB Type-C, USB-C";
            } else {
                $keyword = "AVITA LIBER 12.5\", Core i5 Intel CPU, Windows Hello, fingerprint, USB 3.0 ports, USB Type-C, USB-C";
            }
            break;

    }

    return $keyword;
}

function metaDescriptionByPage( $page ) {

    // Default
    $description = "AVITA is a US based smart technology firm which prides itself on its elegant and highly efficient catalog of gadgets which transcend various categories. These gadgets not only make your work life balance tenable but augment your personality as well.";

    if ( $page == 'home') {
                $description = "AVITA is a US based smart technology firm which prides itself on its elegant and highly efficient catalog of gadgets which transcend various categories. These gadgets not only make your work life balance tenable but augment your personality as well.";
            } 
            else if( $page == 'aboutus') {
                 $description = "About Us";
            }
            else if( $page == 'products') {
                $description = "Products";
            }
           else if( $page == 'contactus') {
                $description = "Contact Us";
            }
            else if( $page == 'terms') {
                $description = "Terms";
                }
            else if( $page == 'repairs') {
                $description = "Repairs";
            }
            else if( $page == 'privacy') {
                $description = "Privacy";
            }
            else if( $page == 'blogs') {
                $description = "Blogs";
            }
            else if( $page == 'events') {
                $description = "Events";
            }
            else if( $page == 'wheretobuy') {
                $description = "Where to Buy";
            }
            else if( $page == 'support') {
                $description = "Supports";
            }
            else if( $page == 'sales') {
                $description = "Sales Enquiry";
            }
            else if( $page == 'global') {
                $description = "AVITA Global";
            }
            else{
                
                $description = "AVITA is a US based smart technology firm which prides itself on its elegant and highly efficient catalog of gadgets which transcend various categories. These gadgets not only make your work life balance tenable but augment your personality as well.";

            }
            return $description;

}


function googleAnalyticCode( $country ) {

    switch ( $country ) {

        case 'in' : return "UA-133345635-5";

    }
    return 'UA-133345635-5'; 
}
function GoogleMap( $key ) {

    return 'AIzaSyB3wqCQ7o8SIe4vkDPqHTbCWrmelQKPwFQ';    // Default

}
function BaiduMap( $key ) {

    return '123';    // Default

}
