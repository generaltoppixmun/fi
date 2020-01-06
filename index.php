<?php
$GLOBALS['_ta_campaign_key'] = 'b4139e33d506890472044baad2d293a7';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=b4139e33d506890472044baad2d293a7' parameter

require 'bootloader.php';

$campaign_id = '4b98cg';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>


<!DOCTYPE html>
<html data-scrapbook-source="https://asmnbok.godaddysites.com/" data-scrapbook-create="20200106142227184" lang="en-US">
<head>
<meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><title>asmnbok</title><meta name="author" content="asmnbok"><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"><link rel="apple-touch-icon" sizes="57x57" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"><link rel="apple-touch-icon" sizes="60x60" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"><link rel="apple-touch-icon" sizes="72x72" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"><link rel="apple-touch-icon" sizes="114x114" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"><link rel="apple-touch-icon" sizes="120x120" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"><link rel="apple-touch-icon" sizes="144x144" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"><link rel="apple-touch-icon" sizes="152x152" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"><link rel="apple-touch-icon" sizes="180x180" href="https://img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"><meta property="og:url" content="https://asmnbok.appspot.com/">
<meta property="og:site_name" content="asmnbok">
<meta property="og:title" content="Live the Music">
<meta property="og:description" content="Check out my latest music and upcoming events!">
<meta property="og:type" content="website">
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/101798">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="asmnbok">
<meta name="twitter:description" content="Live the Music">
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/101798">
<meta name="twitter:image:alt" content="asmnbok">
<meta name="theme-color" content="#C50E6D">




<style type="text/css">/*
Copyright 2016 The Cabin Project Authors (impallari@gmail.com)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* vietnamese */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  src: local('Cabin Bold'), local('Cabin-Bold'), url("") format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  src: local('Cabin Bold'), local('Cabin-Bold'), url("") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  src: local('Cabin Bold'), local('Cabin-Bold'), url("") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright (c) 2010-2011 by tyPoland Lukasz Dziedzic (team@latofonts.com) with Reserved Font Name "Lato". Licensed under the SIL Open Font License, Version 1.1.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 400;
  src: local('Lato Italic'), local('Lato-Italic'), url("") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 400;
  src: local('Lato Italic'), local('Lato-Italic'), url("") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 700;
  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url("") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 700;
  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url("") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  src: local('Lato Hairline'), local('Lato-Hairline'), url("") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  src: local('Lato Hairline'), local('Lato-Hairline'), url("") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url("") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url("") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url("") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url("") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url("") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url("") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  src: local('Lato Black'), local('Lato-Black'), url("") format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  src: local('Lato Black'), local('Lato-Black'), url("") format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="styles.css">
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="styles-1.css"><style type="text/css" data-glamor="cxs-default-sheet">.x .c2-1 { letter-spacing: normal; }
.x .c2-2 { text-transform: none; }
.x .c2-3 { font-family: Lato, arial, sans-serif; }
.x .c2-4 { font-size: 14px; }
.x .c2-9 { letter-spacing: 1px; }
.x .c2-a { text-transform: uppercase; }
.x .c2-b { overflow-wrap: break-word; }
.x .c2-c { overflow-wrap: break-word; }
.x .c2-d { line-height: 1.2; }
.x .c2-e { margin-left: 0px; }
.x .c2-f { margin-right: 0px; }
.x .c2-g { margin-top: 0px; }
.x .c2-h { margin-bottom: 0px; }
.x .c2-i { max-width: 100%; }
.x .c2-j { font-family: "Cabin", arial, sans-serif; }
.x .c2-k { font-size: 20px; }
.x .c2-l { color: rgb(247, 247, 247); }
.x .c2-m { font-weight: 700; }
.x .c2-r { display: inline-block; }
.x .c2-s { width: 100%; }
.x .c2-t { font-size: 22px; }
.x .c2-y { letter-spacing: 0.063em; }
.x .c2-z { padding-top: 16px; }
.x .c2-10 { padding-bottom: 16px; }
.x .c2-11 { padding-left: 32px; }
.x .c2-12 { padding-right: 32px; }
.x .c2-13 { background-color: rgb(197, 14, 109); }
.x .c2-14 { border-style: none; }
.x .c2-15 { text-align: center; }
.x .c2-16 { text-decoration: none; }
.x .c2-17 { cursor: pointer; }
.x .c2-18 { border-radius: 0px; }
.x .c2-19 { transition: all 0.3s ease 0s; }
.x .c2-1a { transition-property: background-color; }
.x .c2-1b { transition-duration: 0.3s; }
.x .c2-1c { transition-timing-function: ease-in-out; }
.x .c2-1d { margin-top: 16px; }
.x .c2-1e { margin-bottom: 16px; }
.x .c2-1f { color: rgb(255, 255, 255); }
.x .c2-1g { text-shadow: none; }
.x .c2-1h:hover { background-color: rgb(220, 17, 122); }
.x .c2-1i:focus { outline: currentcolor none medium; }
.x .c2-1j:active { background-color: rgb(153, 8, 84); }
.x .c2-1v { display: flex; }
.x .c2-1w { box-sizing: border-box; }
.x .c2-1x { flex-direction: row; }
.x .c2-1y { flex-wrap: wrap; }
.x .c2-1z { margin-right: -12px; }
.x .c2-20 { margin-left: -12px; }
.x .c2-25 { flex-grow: 1; }
.x .c2-26 { flex-shrink: 1; }
.x .c2-27 { flex-basis: 0%; }
.x .c2-28 { padding-top: 0px; }
.x .c2-29 { padding-right: 12px; }
.x .c2-2a { padding-bottom: 0px; }
.x .c2-2b { padding-left: 12px; }
.x .c2-2m { line-height: 1.5; }
.x .c2-2n { color: rgb(164, 164, 164); }
.x .c2-2o { font-weight: 400; }
.x .c2-2p { flex-direction: column; }
.x .c2-2q { justify-content: center; }
.x .c2-2r { align-items: center; }
.x .c2-2t { margin-bottom: 24px; }
.x .c2-2y { position: relative; }
.x .c2-2z { background-color: rgba(22, 22, 22, 0); }
.x .c2-30 { border-color: rgba(255, 255, 255, 0.7); }
.x .c2-31 { border-top-width: 1px; }
.x .c2-32 { border-right-width: 1px; }
.x .c2-33 { border-bottom-width: 1px; }
.x .c2-34 { border-left-width: 1px; }
.x .c2-35 { border-style: solid; }
.x .c2-36 { padding-top: 23px; }
.x .c2-37 { padding-bottom: 8px; }
.x .c2-38 { padding-left: 16px; }
.x .c2-39 { padding-right: 16px; }
.x .c2-3a { color: rgb(191, 191, 191); }
.x .c2-3b::placeholder { color: inherit; }
.x .c2-3c:focus + label { font-size: 12px; }
.x .c2-3d:focus + label { top: 8px; }
.x .c2-3e:focus + label { color: rgb(240, 26, 140); }
.x .c2-3f:not([value=""]) + label { font-size: 12px; }
.x .c2-3g:not([value=""]) + label { top: 8px; }
.x .c2-3h:not([value=""]) + label { color: rgb(240, 26, 140); }
.x .c2-3i::-webkit-input-placeholder { color: inherit; }
.x .c2-3k { position: absolute; }
.x .c2-3l { top: 30%; }
.x .c2-3m { left: 16px; }
.x .c2-3n { transition: all 0.15s ease 0s; }
.x .c2-3o { pointer-events: none; }
.x .c2-3p { background-color: transparent; }
.x .c2-3s { margin-left: auto; }
.x .c2-3t { margin-right: auto; }
.x .c2-3u { padding-left: 24px; }
.x .c2-3v { padding-right: 24px; }
.x .c2-3w { padding: 0px !important; }
.x .c2-3x { flex-basis: 33.3333%; }
.x .c2-3y { max-width: 33.3333%; }
.x .c2-3z { padding-right: 0px; }
.x .c2-40 { padding-left: 0px; }
.x .c2-41 { height: 130px; }
.x .c2-42 { overflow: hidden; }
.x .c2-47 { height: 100%; }
.x .c2-4b { background-position: center center; }
.x .c2-4c { background-size: auto, cover; }
.x .c2-4d { background-blend-mode: normal; }
.x .c2-4e { background-repeat: no-repeat; }
.x .c2-4f { text-shadow: rgba(0, 0, 0, 0.12) 0px 2px 30px; }
.x .c2-4g { transition: transform 0.5s ease 0s; }
.x .c2-4h { background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url(""); }
.x .c2-4i { background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url(""); }
.x .c2-4j { background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url(""); }
.x .c2-4k { background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url(""); }
.x .c2-4l { background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url(""); }
.x .c2-4m { background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url(""); }
.x .c2-4n { background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url("cr=w_460,h_300,a_cc.webp"); }
.x .c2-4o { background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url("cr=w_460,h_300,a_cc-1.webp"); }
.x .c2-4p { background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url("cr=w_460,h_300,a_cc-2.webp"); }
.x .c2-4q { background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url("cr=w_460,h_300,a_cc-3.webp"); }
.x .c2-4r { background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url("cr=w_460,h_300,a_cc-4.webp"); }
.x .c2-4s { background-image: linear-gradient(rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%), url("cr=w_460,h_300,a_cc-5.webp"); }</style>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px) {
  .x .c1-n { padding-top: 32px; }
}
@media (max-width: 767px) {
  .x .c1-o { padding-bottom: 32px; }
}
@media (max-width: 767px) {
  .x .c1-1u { position: relative; }
}
@media (max-width: 767px) {
  .x .c1-2t { width: 100%; }
}
@media (max-width: 767px) {
  .x .c1-4x { max-width: 100%; }
}
@media (max-width: 767px) {
  .x .c1-4y { margin-bottom: 8px; }
}
@media (max-width: 767px) {
  .x .c1-4z { overflow-wrap: break-word; }
}
@media (max-width: 767px) {
  .x .c1-50 { overflow-wrap: break-word; }
}
@media (max-width: 767px) {
  .x .c1-5u { width: auto !important; }
}
@media (max-width: 767px) {
  .x .c1-64 > :nth-child(n) { margin-bottom: 24px; }
}
@media (max-width: 767px) {
  .x .c1-65 > :last-child { margin-bottom: 0px !important; }
}
@media (max-width: 767px) {
  .x .c1-8i { padding-top: 0px; }
}
@media (max-width: 767px) {
  .x .c1-8j { padding-bottom: 0px; }
}
@media (max-width: 767px) {
  .x .c1-9e { display: flex; }
}
@media (max-width: 767px) {
  .x .c1-9f { flex-direction: column; }
}
@media (max-width: 767px) {
  .x .c2-1k { width: auto !important; }
}
@media (max-width: 767px) {
  .x .c2-3q { padding-top: 0px; }
}
@media (max-width: 767px) {
  .x .c2-3r { padding-bottom: 0px; }
}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="styles-2.css"><style type="text/css" data-glamor="cxs-sm-sheet">@media (min-width: 768px) {
  .x .c2-5 { font-size: 14px; }
}
@media (min-width: 768px) {
  .x .c2-n { font-size: 20px; }
}
@media (min-width: 768px) {
  .x .c2-u { font-size: 22px; }
}
@media (min-width: 768px) {
  .x .c2-1l { width: auto; }
}
@media (min-width: 768px) {
  .x .c2-21 { margin-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-22 { margin-right: -24px; }
}
@media (min-width: 768px) {
  .x .c2-23 { margin-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-24 { margin-left: -24px; }
}
@media (min-width: 768px) {
  .x .c2-2c { margin-left: 8.33333%; }
}
@media (min-width: 768px) {
  .x .c2-2d { flex-basis: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-2e { max-width: 83.3333%; }
}
@media (min-width: 768px) {
  .x .c2-2f { padding-top: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2g { padding-right: 24px; }
}
@media (min-width: 768px) {
  .x .c2-2h { padding-bottom: 0px; }
}
@media (min-width: 768px) {
  .x .c2-2i { padding-left: 24px; }
}
@media (min-width: 768px) {
  .x .c2-43 { height: 200px; }
}</style>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="styles-3.css"><style type="text/css" data-glamor="cxs-md-sheet">@media (min-width: 1024px) {
  .x .c2-6 { font-size: 14px; }
}
@media (min-width: 1024px) {
  .x .c2-o { font-size: 20px; }
}
@media (min-width: 1024px) {
  .x .c2-v { font-size: 22px; }
}
@media (min-width: 1024px) {
  .x .c2-1m { padding-top: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-1n { padding-bottom: 16px; }
}
@media (min-width: 1024px) {
  .x .c2-1o { padding-left: 48px; }
}
@media (min-width: 1024px) {
  .x .c2-1p { padding-right: 48px; }
}
@media (min-width: 1024px) {
  .x .c2-1q { background-color: rgb(197, 14, 109); }
}
@media (min-width: 1024px) {
  .x .c2-1r { margin-bottom: 8px; }
}
@media (min-width: 1024px) {
  .x .c2-1s:hover { box-shadow: 0px 0px 0px 2px inset; }
}
@media (min-width: 1024px) {
  .x .c2-1t:hover { color: rgb(240, 26, 140); }
}
@media (min-width: 1024px) {
  .x .c2-1u:hover { background-color: transparent; }
}
@media (min-width: 1024px) {
  .x .c2-2j { margin-left: 16.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-2k { flex-basis: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-2l { max-width: 66.6667%; }
}
@media (min-width: 1024px) {
  .x .c2-2s { flex-direction: row; }
}
@media (min-width: 1024px) {
  .x .c2-2u { flex-grow: 1; }
}
@media (min-width: 1024px) {
  .x .c2-2v { width: auto; }
}
@media (min-width: 1024px) {
  .x .c2-2w { margin-right: 24px; }
}
@media (min-width: 1024px) {
  .x .c2-2x { margin-bottom: 0px; }
}
@media (min-width: 1024px) {
  .x .c2-44 { height: 300px; }
}
@media (min-width: 1024px) {
  .x .c2-45:hover .dim { background-color: rgba(255, 255, 255, 0.1); }
}
@media (min-width: 1024px) {
  .x .c2-46:hover .image { transform: scale(1.05); }
}
@media (min-width: 1024px) {
  .x .c2-48 { background-color: rgba(0, 0, 0, 0.1); }
}
@media (min-width: 1024px) {
  .x .c2-49 { transition: background-color 0.5s ease 0s; }
}
@media (min-width: 1024px) {
  .x .c2-4a { z-index: 1; }
}</style>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px) {
  .x .c1-f { font-size: 14px; }
}
@media (min-width: 1280px) {
  .x .c1-16 { width: 1160px; }
}
@media (min-width: 1280px) {
  .x .c1-3g { font-size: 20px; }
}
@media (min-width: 1280px) {
  .x .c1-3l { font-size: 22px; }
}
@media (min-width: 1280px) {
  .x .c1-54 { font-size: 56px; }
}
@media (min-width: 1280px) {
  .x .c1-74 { font-size: 29px; }
}
@media (min-width: 1280px) {
  .x .c1-7e { font-size: 40px; }
}
@media (min-width: 1280px) {
  .x .c1-99 { font-size: 13px; }
}
@media (min-width: 1280px) {
  .x .c2-7 { font-size: 14px; }
}
@media (min-width: 1280px) {
  .x .c2-p { font-size: 20px; }
}
@media (min-width: 1280px) {
  .x .c2-w { font-size: 22px; }
}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px) {
  .x .c1-g { font-size: 16px; }
}
@media (min-width: 1536px) {
  .x .c1-17 { width: 1280px; }
}
@media (min-width: 1536px) {
  .x .c1-3h { font-size: 22px; }
}
@media (min-width: 1536px) {
  .x .c1-3m { font-size: 24px; }
}
@media (min-width: 1536px) {
  .x .c1-55 { font-size: 63px; }
}
@media (min-width: 1536px) {
  .x .c1-75 { font-size: 32px; }
}
@media (min-width: 1536px) {
  .x .c1-7f { font-size: 43px; }
}
@media (min-width: 1536px) {
  .x .c1-9a { font-size: 14px; }
}
@media (min-width: 1536px) {
  .x .c2-8 { font-size: 16px; }
}
@media (min-width: 1536px) {
  .x .c2-q { font-size: 22px; }
}
@media (min-width: 1536px) {
  .x .c2-x { font-size: 24px; }
}</style>
<style type="text/css">.page-inner { background-color: rgb(22, 22, 22); min-height: 100vh; }</style>
</head>
<body class="x  x-fonts-cabin" context="[object Object]"><div id="layout-3-b-93278-b-b-36-d-4512-b-517-5-c-49-af-2-b-6-f-5-c" class="layout layout-layout layout-layout-layout-17 locale-en-US lang-en"><div data-ux="Page" id="page-11820" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="8f767218-764d-4dd5-801e-8d87cb9f6d2d" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-i c1-j c1-k c1-l c1-m c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-q c1-e c1-f c1-g x-d-ux"></div><div data-ux="PromoBanner" data-aid="BANNER_RENDERED" class="x-el x-el-div c1-1 c1-2 c1-r c1-s c1-t c1-u c1-v c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="PromoBannerContainer" class="x-el x-el-div c1-1 c1-2 c1-w c1-x c1-y c1-z c1-10 c1-11 c1-12 c1-13 c1-b c1-c c1-14 c1-d c1-15 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><p typography="BodyAlpha" data-ux="PromoBannerText" data-route="promoBanner/message" data-aid="BANNER_TEXT_RENDERED" class="x-el x-el-p c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-b c1-1e c1-c c1-1f c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-aid">LIVE MUSIC EVERY FRIDAY &amp; SATURDAY</p></div></div><div data-ux="Block" id="header_parallax11823" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux" style="position: relative; top: 0px;"><div id="bs-1"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"></span></div><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg11824" role="img" data-guac-image="loaded" data-ux="Background" data-route="hasMedia:mediaData" data-aid="BACKGROUND_IMAGE_RENDERED" aria-label="" overlay="category" treatment="Fill" data-ht="Fill" treatmentdata="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-1g c1-1h c1-1i c1-1j c1-1k c1-11 c1-1l c1-1m c1-1n c1-1o c1-1p c1-b c1-c c1-d c1-1q c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-route x-d-aid x-d-ht" style="background-image: linear-gradient(rgba(22, 22, 22, 0.25) 0%, rgba(22, 22, 22, 0.25) 100%), url(&quot;cr=w_1380,h_540,a_cc.webp&quot;); opacity: 1;"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1r c1-4 c1-b c1-c c1-d c1-1s c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-u c1-v c1-4 c1-1t c1-b c1-c c1-1u c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1v c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-u c1-1w c1-1x c1-1y c1-1t c1-b c1-c c1-d c1-1z c1-20 c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-w c1-x c1-y c1-z c1-10 c1-21 c1-22 c1-b c1-c c1-14 c1-d c1-15 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-11 c1-23 c1-24 c1-25 c1-1b c1-26 c1-1c c1-27 c1-13 c1-12 c1-b c1-c c1-28 c1-29 c1-2a c1-2b c1-d c1-2c c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-23 c1-2d c1-2e c1-2f c1-10 c1-2g c1-2h c1-2i c1-2j c1-11 c1-1d c1-2k c1-b c1-c c1-2l c1-2m c1-2n c1-2o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2p c1-2q c1-2r c1-2s c1-10 c1-c c1-2t c1-2u c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="af872456-783c-43d6-8723-04c7e07ba4b7" title="asmnbok" href="" class="x-el x-el-a c1-2v c1-2w c1-2x c1-18 c1-19 c1-2y c1-2z c1-30 c1-31 c1-32 c1-33 c1-b c1-34 c1-c c1-35 c1-36 c1-37 c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Fill.Link.Default.11827.click,click"><div id="bs-2"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingBeta" data-ux="LogoHeading" id="logo-container-1" logotext="asmnbok" class="x-el x-el-h3 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p c2-q x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-9 c2-a c2-r c2-s c2-j c2-t c2-u c2-v c2-w c2-x x-d-ux x-d-aid x-d-route">asmnbok</span></h3></span></div></a></div></div></div><div data-ux="Grid" id="n-1182111830-navBarId" class="x-el x-el-div c1-1 c1-2 c1-3n c1-23 c1-24 c1-3o c1-1b c1-26 c1-1c c1-27 c1-b c1-c c1-28 c1-29 c1-2a c1-2b c1-d c1-3p c1-3q c1-3r c1-3s c1-3t c1-3u c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-23 c1-3v c1-2e c1-3w c1-3x c1-2g c1-2h c1-2i c1-2j c1-11 c1-12 c1-13 c1-1d c1-b c1-c c1-2l c1-2m c1-2n c1-2o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2p c1-2q c1-2r c1-2s c1-10 c1-c c1-2t c1-2u c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="af872456-783c-43d6-8723-04c7e07ba4b7" title="asmnbok" href="" class="x-el x-el-a c1-2v c1-2w c1-2x c1-18 c1-19 c1-2y c1-2z c1-30 c1-31 c1-32 c1-33 c1-b c1-34 c1-c c1-35 c1-36 c1-37 c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Fill.Link.Default.11831.click,click"><div id="bs-3"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><h3 typography="HeadingBeta" data-ux="LogoHeading" id="logo-container-2" logotext="asmnbok" class="x-el x-el-h3 c2-9 c2-a c2-b c2-c c2-d c2-e c2-f c2-g c2-h c2-i c2-j c2-k c2-l c2-m c2-n c2-o c2-p c2-q x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c2-9 c2-a c2-r c2-s c2-j c2-t c2-u c2-v c2-w c2-x x-d-ux x-d-aid x-d-route">asmnbok</span></h3></span></div></a></div></div></div></div></nav></div></div></div><div data-ux="Block" id="header_parallax11833" class="x-el x-el-div c1-1 c1-2 c1-4 c1-2d c1-3n c1-3y c1-1l c1-13 c1-1b c1-1c c1-2g c1-b c1-c c1-d c1-3z c1-40 c1-3p c1-e c1-f c1-g x-d-ux" style="transform: none; opacity: 1;"><div id="bs-4"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"></span></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-39 c1-3a c1-y c1-z c1-10 c1-b c1-c c1-14 c1-d c1-15 c1-3p c1-41 c1-42 c1-43 c1-44 c1-45 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-46 c1-b c1-c c1-47 c1-48 c1-49 c1-4a c1-4b c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-w c1-x c1-4c c1-4d c1-10 c1-u c1-4e c1-4 c1-b c1-c c1-14 c1-47 c1-48 c1-4f c1-49 c1-4a c1-4b c1-4g c1-4h c1-d c1-15 c1-4i c1-4j c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-2l c1-2n c1-d c1-4k c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-4e c1-4l c1-4m c1-2i c1-b c1-c c1-4n c1-2n c1-4o c1-4p c1-4q c1-4r c1-4s c1-d c1-44 c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-2p c1-2q c1-18 c1-19 c1-38 c1-39 c1-3a c1-1b c1-1c c1-4t c1-4u c1-4v c1-2i c1-2s c1-3c c1-4w c1-3d c1-4x c1-4y c1-4z c1-50 c1-51 c1-2n c1-52 c1-53 c1-54 c1-55 x-d-ux x-d-aid x-d-route">Live the Music</h1><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-56 c1-57 c1-58 c1-59 c1-b c1-3c c1-3b c1-1f c1-3e c1-3f c1-3g c1-3h x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Check out my latest music and upcoming events!</span></p></div><div id="bs-5" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#" target="" data-tccl="ux2.header.cta_button.click,click" class="x-el x-el-a c2-y c2-2 c2-z c2-10 c2-11 c2-12 c2-13 c2-14 c2-r c2-15 c2-16 c2-17 c2-c c2-b c2-i c2-s c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-1e c2-3 c2-1f c2-m c2-1g c2-4 c2-1h c2-1i c2-1j c2-1k c2-1l c2-5 c2-1m c2-1n c2-1o c2-1p c2-1q c2-1r c2-6 c2-1s c2-1t c2-1u c2-7 c2-8 x-d-ux x-d-aid x-d-tccl">Events</a></span></div></div></div></div></div></div></div><div data-ux="Block" id="header_parallax11834" class="x-el x-el-div c1-1 c1-2 c1-4 c1-2d c1-11 c1-3y c1-1l c1-13 c1-1b c1-1c c1-2g c1-b c1-c c1-d c1-3z c1-40 c1-2c c1-e c1-f c1-g x-d-ux" style="transform: none; opacity: 1;"><div id="bs-6"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"></span></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-39 c1-3a c1-y c1-z c1-10 c1-b c1-c c1-14 c1-d c1-15 c1-3p c1-41 c1-42 c1-43 c1-44 c1-45 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-46 c1-b c1-c c1-47 c1-48 c1-49 c1-4a c1-4b c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-w c1-x c1-4c c1-4d c1-10 c1-u c1-4e c1-4 c1-b c1-c c1-14 c1-47 c1-48 c1-4f c1-49 c1-4a c1-4b c1-4g c1-4h c1-d c1-15 c1-4i c1-4j c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-2l c1-2n c1-d c1-4k c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-4e c1-4l c1-4m c1-2i c1-b c1-c c1-4n c1-2n c1-4o c1-4p c1-4q c1-4r c1-4s c1-d c1-44 c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-2p c1-2q c1-18 c1-19 c1-38 c1-39 c1-3a c1-1b c1-1c c1-4t c1-4u c1-4v c1-2i c1-2s c1-3c c1-4w c1-3d c1-4x c1-4y c1-4z c1-50 c1-51 c1-2n c1-52 c1-53 c1-54 c1-55 x-d-ux x-d-aid x-d-route">Live the Music</h1><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-56 c1-57 c1-58 c1-59 c1-b c1-3c c1-3b c1-1f c1-3e c1-3f c1-3g c1-3h x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Check out my latest music and upcoming events!</span></p></div><div id="bs-7" style="max-width:100%"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><a tccltracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#" target="" data-tccl="ux2.header.cta_button.click,click" class="x-el x-el-a c2-y c2-2 c2-z c2-10 c2-11 c2-12 c2-13 c2-14 c2-r c2-15 c2-16 c2-17 c2-c c2-b c2-i c2-s c2-18 c2-19 c2-1a c2-1b c2-1c c2-1d c2-1e c2-3 c2-1f c2-m c2-1g c2-4 c2-1h c2-1i c2-1j c2-1k c2-1l c2-5 c2-1m c2-1n c2-1o c2-1p c2-1q c2-1r c2-6 c2-1s c2-1t c2-1u c2-7 c2-8 x-d-ux x-d-aid x-d-tccl">Events</a></span></div></div></div></div></div></div></div></div></div></div></section> </div></div></div></div><div id="631658e5-de22-4cbd-b23d-89c1f4d057ae" class="widget widget-about widget-about-about-4"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-i c1-j c1-k c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-w c1-x c1-y c1-z c1-10 c1-b c1-c c1-14 c1-d c1-15 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><div data-ux="ContentCards" class="x-el x-el-div x-el c1-1 c1-2 c1-1d c1-1n c1-63 c1-39 c1-3a c1-b c1-c c1-64 c1-65 c1-66 c1-67 c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-11 c1-23 c1-24 c1-3o c1-1b c1-26 c1-68 c1-27 c1-b c1-c c1-28 c1-29 c1-69 c1-2b c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-23 c1-2d c1-2e c1-6a c1-10 c1-2g c1-2h c1-2i c1-2j c1-11 c1-6b c1-63 c1-b c1-c c1-6c c1-6d c1-2l c1-6e c1-2n c1-4f c1-d c1-6f c1-6g c1-e c1-f c1-g x-d-ux"><div id="guacBg11835" role="img" data-guac-image="loaded" data-ux="ContentCard" overlay="accent" alt="" data-aid="ABOUT_IMAGE_RENDERED0" data-route="cards.imageProperties" data-field-route="/card/0" data-field-id="cards" index="0" treatmentdata="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-11 c1-1l c1-12 c1-1d c1-13 c1-4 c1-6h c1-6i c1-4m c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-4u c1-6q c1-6r c1-2d c1-b c1-c c1-64 c1-65 c1-d c1-6s c1-6t c1-6u c1-6v c1-6w c1-e c1-f c1-g x-d-aid x-d-route x-d-field-route x-d-ux x-d-field-id c1-1 c1-2 c1-6x c1-1h c1-1i c1-1j c1-6y c1-1o c1-6z c1-b c1-c c1-d c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-aid x-d-route x-d-field-route x-d-field-id" style="background-image: linear-gradient(rgba(22, 22, 22, 0.24) 0%, rgba(22, 22, 22, 0.24) 100%), url(&quot;cr=w_380,h_420,a_cc.webp&quot;); opacity: 1;"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h3 c1-1 c1-2 c1-18 c1-19 c1-70 c1-39 c1-3a c1-1b c1-1c c1-b c1-1e c1-71 c1-1f c1-72 c1-73 c1-74 c1-75 x-d-ux x-d-aid x-d-route x-d-field-route">Embrace Your Passion</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-18 c1-19 c1-70 c1-1b c1-1c c1-2d c1-76 c1-b c1-1e c1-3b c1-1f c1-3e c1-3f c1-3g c1-3h x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>I uncovered my passion for music during my first guitar lesson with my dad. From that point on, I was involved in choir, musicals, and song writing.</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-23 c1-2d c1-2e c1-6a c1-10 c1-2g c1-2h c1-2i c1-2j c1-11 c1-6b c1-63 c1-b c1-c c1-6c c1-6d c1-2l c1-6e c1-2n c1-4f c1-d c1-6f c1-6g c1-e c1-f c1-g x-d-ux"><div id="guacBg11836" role="img" data-guac-image="loaded" data-ux="ContentCard" overlay="accent" alt="" data-aid="ABOUT_IMAGE_RENDERED1" data-route="cards.imageProperties" data-field-route="/card/1" data-field-id="cards" index="1" treatmentdata="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-11 c1-1l c1-12 c1-1d c1-13 c1-4 c1-6h c1-6i c1-4m c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-4u c1-6q c1-6r c1-2d c1-b c1-c c1-64 c1-65 c1-d c1-6s c1-6t c1-6u c1-6v c1-6w c1-e c1-f c1-g x-d-aid x-d-route x-d-field-route x-d-ux x-d-field-id c1-1 c1-2 c1-6x c1-1h c1-1i c1-1j c1-6y c1-1o c1-77 c1-b c1-c c1-d c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-aid x-d-route x-d-field-route x-d-field-id" style="background-image: linear-gradient(rgba(22, 22, 22, 0.24) 0%, rgba(22, 22, 22, 0.24) 100%), url(&quot;cr=w_380,h_420,a_cc-1.webp&quot;); opacity: 1;"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h3 c1-1 c1-2 c1-18 c1-19 c1-70 c1-39 c1-3a c1-1b c1-1c c1-b c1-1e c1-71 c1-1f c1-72 c1-73 c1-74 c1-75 x-d-ux x-d-aid x-d-route x-d-field-route">Live Life in Song</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-18 c1-19 c1-70 c1-1b c1-1c c1-2d c1-76 c1-b c1-1e c1-3b c1-1f c1-3e c1-3f c1-3g c1-3h x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>I followed my dream to California and graduated from college with a degree in music production. I write my lyrics and produce my songs in my home studio.&nbsp;</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-23 c1-2d c1-2e c1-6a c1-10 c1-2g c1-2h c1-2i c1-2j c1-11 c1-6b c1-63 c1-b c1-c c1-6c c1-6d c1-2l c1-6e c1-2n c1-4f c1-d c1-6f c1-6g c1-e c1-f c1-g x-d-ux"><div id="guacBg11837" role="img" data-guac-image="loaded" data-ux="ContentCard" overlay="accent" alt="" data-aid="ABOUT_IMAGE_RENDERED2" data-route="cards.imageProperties" data-field-route="/card/2" data-field-id="cards" index="2" treatmentdata="[object Object]" class="x-el x-el-div x-el c1-1 c1-2 c1-11 c1-1l c1-12 c1-1d c1-13 c1-4 c1-6h c1-6i c1-4m c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-4u c1-6q c1-6r c1-2d c1-b c1-c c1-64 c1-65 c1-d c1-6s c1-6t c1-6u c1-6v c1-6w c1-e c1-f c1-g x-d-aid x-d-route x-d-field-route x-d-ux x-d-field-id c1-1 c1-2 c1-6x c1-1h c1-1i c1-1j c1-6y c1-1o c1-78 c1-b c1-c c1-d c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-aid x-d-route x-d-field-route x-d-field-id" style="background-image: linear-gradient(rgba(22, 22, 22, 0.24) 0%, rgba(22, 22, 22, 0.24) 100%), url(&quot;cr=w_380,h_420,a_cc-2.webp&quot;); opacity: 1;"><h3 typography="HeadingGamma" data-ux="ContentOverlayCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h3 c1-1 c1-2 c1-18 c1-19 c1-70 c1-39 c1-3a c1-1b c1-1c c1-b c1-1e c1-71 c1-1f c1-72 c1-73 c1-74 c1-75 x-d-ux x-d-aid x-d-route x-d-field-route">Be Inspired by Everything</h3><div typography="BodyBeta" data-ux="ContentOverlayCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-18 c1-19 c1-70 c1-1b c1-1c c1-2d c1-76 c1-b c1-1e c1-3b c1-1f c1-3e c1-3f c1-3g c1-3h x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span>I find inspiration all around me. &nbsp;I try to make my music representative of myself and my generation. I love the places that most people don't give a second glance.</span></p></div></div></div></div></div></section> </div></div></div><div id="dce5d9e7-95e2-4590-ad87-5c6b2bc6561a" class="widget widget-subscribe widget-subscribe-subscribe-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-i c1-j c1-k c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-w c1-x c1-y c1-z c1-10 c1-b c1-c c1-14 c1-d c1-15 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><h2 typography="HeadingEpsilon" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-2p c1-2q c1-18 c1-19 c1-70 c1-39 c1-3a c1-79 c1-7a c1-1d c1-2s c1-3c c1-7b c1-3d c1-7c c1-3z c1-7d c1-7e c1-7f x-d-ux x-d-aid x-d-route">Subscribe</h2><div><div id="dce5d9e7-95e2-4590-ad87-5c6b2bc6561a-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c2-1 c2-2 c2-1v c2-1w c2-1x c2-1y c2-g c2-1z c2-h c2-20 c2-3 c2-4 c2-21 c2-22 c2-23 c2-24 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1w c2-25 c2-26 c2-27 c2-i c2-28 c2-29 c2-2a c2-2b c2-3 c2-4 c2-2c c2-2d c2-2e c2-2f c2-2g c2-2h c2-2i c2-5 c2-2j c2-2k c2-2l c2-6 c2-7 c2-8 x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c2-1 c2-2 c2-b c2-c c2-2m c2-g c2-1e c2-15 c2-3 c2-2n c2-4 c2-2o c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid x-d-route">Sign up to hear upcoming shows, albums, and events.</p><form data-ux="Form" class="x-el x-el-form c2-1 c2-2 c2-h c2-1v c2-2p c2-2q c2-2r c2-15 c2-1g c2-3 c2-4 c2-5 c2-2s c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c2-1 c2-2 c2-2t c2-s c2-3 c2-4 c2-5 c2-2u c2-2v c2-2w c2-2x c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2y c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c2-1 c2-2 c2-2y c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid"><input typography="InputAlpha" type="text" data-ux="InputFloatLabel" id="input3" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c2-1 c2-2 c2-2z c2-30 c2-s c2-31 c2-32 c2-33 c2-34 c2-18 c2-35 c2-36 c2-37 c2-38 c2-39 c2-3 c2-3a c2-4 c2-2o c2-3b c2-1i c2-3c c2-3d c2-3e c2-3f c2-3g c2-3h c2-3i c2-3j c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" value=""><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input3" class="x-el x-el-label c2-1 c2-2 c2-b c2-c c2-3k c2-3l c2-3m c2-3n c2-3o c2-3 c2-3a c2-4 c2-2o c2-5 c2-6 c2-7 c2-8 x-d-ux">Email Address</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c2-1 c2-2 c2-s c2-3 c2-4 c2-5 c2-2v c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c2-1 c2-2 c2-2y c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><button tccltracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c2-y c2-2 c2-z c2-10 c2-11 c2-12 c2-13 c2-14 c2-r c2-15 c2-16 c2-17 c2-c c2-b c2-i c2-s c2-18 c2-19 c2-1a c2-1b c2-1c c2-3 c2-1f c2-m c2-1g c2-4 c2-1h c2-1i c2-1j c2-1l c2-5 c2-1m c2-1n c2-1o c2-1p c2-1q c2-6 c2-1s c2-1t c2-1u c2-7 c2-8 x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></span></div></div></div></section> </div></div></div><div id="6a805410-58ff-4fd2-9a5b-7f51adbf4711" class="widget widget-gallery widget-gallery-gallery-2"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="bs-8"><span data-ux="Element" class="x-el x-el-span c2-1 c2-2 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div><section data-ux="SectionBanner" class="x-el x-el-section c2-1 c2-2 c2-3p c2-28 c2-2a c2-3 c2-4 c2-3q c2-3r c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Container" class="x-el x-el-div c2-1 c2-2 c2-3s c2-3t c2-3u c2-3v c2-i c2-3w c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux"><div data-ux="Grid" data-route="" class="x-el x-el-div c2-1 c2-2 c2-1v c2-1w c2-1x c2-1y c2-g c2-f c2-h c2-e c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1w c2-25 c2-26 c2-3x c2-3y c2-28 c2-3z c2-2a c2-40 c2-s c2-41 c2-42 c2-2y c2-17 c2-3 c2-4 c2-43 c2-5 c2-44 c2-6 c2-45 c2-46 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div dim c2-1 c2-2 c2-3k c2-47 c2-s c2-3 c2-4 c2-5 c2-48 c2-49 c2-4a c2-6 c2-7 c2-8 x-d-ux"></div><div id="guacBg4" role="img" data-ux="Background" data-aid="GALLERY_IMAGE0_RENDERED" treatmentdata="[object Object]" class="x-el x-el-div image c2-1 c2-2 c2-4b c2-4c c2-4d c2-4e c2-4f c2-47 c2-s c2-4g c2-4n c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" data-guac-image="loaded"></div></div><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1w c2-25 c2-26 c2-3x c2-3y c2-28 c2-3z c2-2a c2-40 c2-s c2-41 c2-42 c2-2y c2-17 c2-3 c2-4 c2-43 c2-5 c2-44 c2-6 c2-45 c2-46 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div dim c2-1 c2-2 c2-3k c2-47 c2-s c2-3 c2-4 c2-5 c2-48 c2-49 c2-4a c2-6 c2-7 c2-8 x-d-ux"></div><div id="guacBg5" role="img" data-ux="Background" data-aid="GALLERY_IMAGE1_RENDERED" treatmentdata="[object Object]" class="x-el x-el-div image c2-1 c2-2 c2-4b c2-4c c2-4d c2-4e c2-4f c2-47 c2-s c2-4g c2-4o c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" data-guac-image="loaded"></div></div><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1w c2-25 c2-26 c2-3x c2-3y c2-28 c2-3z c2-2a c2-40 c2-s c2-41 c2-42 c2-2y c2-17 c2-3 c2-4 c2-43 c2-5 c2-44 c2-6 c2-45 c2-46 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div dim c2-1 c2-2 c2-3k c2-47 c2-s c2-3 c2-4 c2-5 c2-48 c2-49 c2-4a c2-6 c2-7 c2-8 x-d-ux"></div><div id="guacBg6" role="img" data-ux="Background" data-aid="GALLERY_IMAGE2_RENDERED" treatmentdata="[object Object]" class="x-el x-el-div image c2-1 c2-2 c2-4b c2-4c c2-4d c2-4e c2-4f c2-47 c2-s c2-4g c2-4r c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" data-guac-image="loaded"></div></div></div><div data-ux="Grid" data-route="" class="x-el x-el-div c2-1 c2-2 c2-1v c2-1w c2-1x c2-1y c2-g c2-f c2-h c2-e c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-route"><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1w c2-25 c2-26 c2-3x c2-3y c2-28 c2-3z c2-2a c2-40 c2-s c2-41 c2-42 c2-2y c2-17 c2-3 c2-4 c2-43 c2-5 c2-44 c2-6 c2-45 c2-46 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div dim c2-1 c2-2 c2-3k c2-47 c2-s c2-3 c2-4 c2-5 c2-48 c2-49 c2-4a c2-6 c2-7 c2-8 x-d-ux"></div><div id="guacBg7" role="img" data-ux="Background" data-aid="GALLERY_IMAGE3_RENDERED" treatmentdata="[object Object]" class="x-el x-el-div image c2-1 c2-2 c2-4b c2-4c c2-4d c2-4e c2-4f c2-47 c2-s c2-4g c2-4p c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" data-guac-image="loaded"></div></div><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1w c2-25 c2-26 c2-3x c2-3y c2-28 c2-3z c2-2a c2-40 c2-s c2-41 c2-42 c2-2y c2-17 c2-3 c2-4 c2-43 c2-5 c2-44 c2-6 c2-45 c2-46 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div dim c2-1 c2-2 c2-3k c2-47 c2-s c2-3 c2-4 c2-5 c2-48 c2-49 c2-4a c2-6 c2-7 c2-8 x-d-ux"></div><div id="guacBg8" role="img" data-ux="Background" data-aid="GALLERY_IMAGE4_RENDERED" treatmentdata="[object Object]" class="x-el x-el-div image c2-1 c2-2 c2-4b c2-4c c2-4d c2-4e c2-4f c2-47 c2-s c2-4g c2-4q c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" data-guac-image="loaded"></div></div><div data-ux="GridCell" class="x-el x-el-div c2-1 c2-2 c2-1w c2-25 c2-26 c2-3x c2-3y c2-28 c2-3z c2-2a c2-40 c2-s c2-41 c2-42 c2-2y c2-17 c2-3 c2-4 c2-43 c2-5 c2-44 c2-6 c2-45 c2-46 c2-7 c2-8 x-d-ux"><div data-ux="Block" class="x-el x-el-div dim c2-1 c2-2 c2-3k c2-47 c2-s c2-3 c2-4 c2-5 c2-48 c2-49 c2-4a c2-6 c2-7 c2-8 x-d-ux"></div><div id="guacBg9" role="img" data-ux="Background" data-aid="GALLERY_IMAGE5_RENDERED" treatmentdata="[object Object]" class="x-el x-el-div image c2-1 c2-2 c2-4b c2-4c c2-4d c2-4e c2-4f c2-47 c2-s c2-4g c2-4s c2-3 c2-4 c2-5 c2-6 c2-7 c2-8 x-d-ux x-d-aid" data-guac-image="loaded"></div></div></div></div></section></div></span></div> </div></div></div><div id="f0f15b5e-09bc-4c74-bc41-8af7e0d8104f" class="widget widget-footer widget-footer-footer-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-i c1-93 c1-94 c1-b c1-c c1-n c1-o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-w c1-x c1-y c1-z c1-10 c1-b c1-c c1-14 c1-d c1-15 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-1d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-7p c1-b c1-95 c1-96 c1-1f c1-97 c1-98 c1-99 c1-9a x-d-ux x-d-aid x-d-route">Copyright © 2020 asmnbok - All Rights Reserved.</p><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-w c1-x c1-y c1-z c1-10 c1-1d c1-9b c1-b c1-c c1-14 c1-d c1-15 c1-e c1-16 c1-f c1-17 c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-9c c1-2g c1-8m c1-2i c1-8n c1-1b c1-3a c1-1c c1-39 c1-9d c1-b c1-c c1-9e c1-9f c1-d c1-e c1-f c1-g x-d-ux"></ul></div><hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-9g c1-6q c1-7y c1-1b c1-7p c1-9h c1-w c1-x c1-j c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-18 c1-19 c1-1a c1-1b c1-1c c1-b c1-95 c1-96 c1-1f c1-97 c1-98 c1-99 c1-9a x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-2v c1-2w c1-2x c1-18 c1-19 c1-2y c1-2z c1-b c1-34 c1-96 c1-35 c1-36 c1-37 c1-97 c1-98 c1-99 c1-9a x-d-ux" data-tccl="ux2.FOOTER.footer1.Layout.Default.Link.Default.11845.click,click">Website Builder</a></span></p></div></div></section> </div></div></div></div></div></div>





















</body>
</html>
