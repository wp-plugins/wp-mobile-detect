<?php 
/*
Plugin Name: WP Mobile Detect
Version: 1.0
Plugin URI: http://jes.se.com/wp-mobile-detect
Description: A WordPress plugin based on the PHP Mobile Detect class (Original author Victor Stanciu now maintained by Serban Ghita) incorporates functions and shortcodes to empower User Admins to have better control of when content is served
Author: Jesse Friedman 
Author URI: http://jes.se.com
License: GPL v3

WP Mobile Detect
Copyright (C) 2012, Jesse Friedman - http://jes.se.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/



/********************************************//**
* PHP Mobile Detect class used to detect browser or device type
***********************************************/
require_once('mobile-detect.php');

$detect = new Mobile_Detect();



/********************************************//**
* Generates [notmobile][/notmobile] shortcode which shows content on desktops or tablets
***********************************************/
function jesse_notphone( $tats, $content="" ) {
	global $detect;
	if( ! $detect->isMobile() || $detect->isTablet() )return "{$content}";
}
add_shortcode( 'notphone', 'jesse_notphone' );



/********************************************//**
* Generates [nottab][/nottab] shortcode which shows content on desktops or phones
***********************************************/
function jesse_nottab( $tats, $content="" ) {
	global $detect;
	if( ! $detect->isTablet() )return "{$content}";
}
add_shortcode( 'nottab', 'jesse_nottab' );



/********************************************//**
* Generates [notdevice][/notdevice] shortcode which shows content on desktops only
***********************************************/
function jesse_notdevice( $tats, $content="" ) {
	global $detect;
	if( ! $detect->isMobile() && ! $detect->isTablet() ) return "{$content}";
}
add_shortcode( 'notdevice', 'jesse_notdevice' );



/********************************************//**
* Generates [phone][/phone] shortcode which shows content on phones ONLY
***********************************************/
function jesse_phone( $tats, $content="" ) {
	global $detect;
	if( $detect->isMobile() && ! $detect->isTablet() )return "{$content}";
}
add_shortcode( 'phone', 'jesse_phone' );



/********************************************//**
* Generates [tab][/tab] shortcode which shows content on Tablets ONLY
***********************************************/
function jesse_tab( $tats, $content="" ) {
	global $detect;
	if( $detect->isTablet() )return "{$content}";
}
add_shortcode( 'tab', 'jesse_tab' );



/********************************************//**
* Generates [device][/device] shortcode which shows content on phones or tablets but NOT destkop
***********************************************/
function jesse_device( $tats, $content="" ) {
	global $detect;
	if( $detect->isMobile() || $detect->isTablet() ) return "{$content}";
}
add_shortcode( 'device', 'jesse_device' );
