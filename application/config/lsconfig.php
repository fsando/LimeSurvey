<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * LimeSurvey
 * Copyright (C) 2007 The LimeSurvey Project Team / Carsten Schmitz
 * All rights reserved.
 * License: GNU/GPL License v2 or later, see LICENSE.php
 * LimeSurvey is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 *
 * $Id: config-defaults.php 9854 2011-03-08 11:49:00Z c_schmitz $
 */

// CAUTION
// This file contains the default settings for LimeSurvey
// Do not edit this file as it may change in future revisions of the software.
// Correct procedure to setup LimeSurvey is the following:
// * copy the lines corresponding to the parameter you want to change
//   from this file to the config.php file
// * edit these lines in config.php


// FILE LOCATIONS

// $rooturl            =   "http://{$_SERVER['HTTP_HOST']}/limesurvey"; //The root web url for your limesurvey installation.

$config['rootdir']            =   getcwd(); //dirname(__FILE__); // This is the physical disk location for your limesurvey installation. Normally you don't have to touch this setting.
// If you use IIS then you MUST enter the complete rootdir e.g. : $rootDir="C:\Inetpub\wwwroot\limesurvey"!
// Some IIS installations also require to use forward slashes instead of backslashes, e.g.  $rootDir="C:/Inetpub/wwwroot/limesurvey"!
// If you use OS/2 this must be the complete rootdir with FORWARD slashes e.g.: $rootDir="c:/limesurvey";!

$config['rootsymlinked']      =   0;  // if your root document dir is symlinked LimeSurvey might have problems to find out the dir
// If you notice that labels are not being translated like "_ADMINISTRATION_" instead of "Administration"
// then try setting this to 1 .

// Site Info
$config['sitename']           =   'LimeSurvey';     // The official name of the site (appears in the Window title)
$config['scriptname']         =   'admin.php';      // The name of the admin script

$config['defaultuser']        =   'admin';          // This is the default username when LimeSurvey is installed
$config['defaultpass']        =   'password';       // This is the default password for the default user when LimeSurvey is installed

// If the user enters password incorrectly
$config['maxLoginAttempt']    =   3;                // Lock them out after 3 attempts
$config['timeOutTime']        =   60 * 30;          // Lock them out for 30 minutes.

// Site Settings
$config['lwcdropdowns']       =   'R';              // SHOW LISTS WITH COMMENT in Public Survey as Radio Buttons (R) or Dropdown List (L)
$config['dropdownthreshold']  =   '25';             // The number of answers to a list type question before it switches from Radio Buttons to List
// Only applicable, of course, if you have chosen 'R' for $dropdowns and/or $lwcdropdowns
$config['repeatheadings']     =   '25';             // The number of answers to show before repeating the headings in array (flexible) questions. Set to 0 to turn this feature off
$config['minrepeatheadings']  =   3;                // The minimum number of remaining answers that are required before repeating the headings in array (flexible) questions.
$config['defaultlang']        =   'en';             // The default language to use - the available languages are the directory names in the /locale dir - for example de = German

$config['timeadjust']         =   0;                // Number of hours to adjust between your webserver local time and your own local time (for datestamping responses)
$config['allowexportalldb']   =   1;                // 0 will only export prefixed tables when doing a database dump. If set to 1 ALL tables in the database will be exported
$config['allowmandbackwards'] =   1;                // Allow moving backwards (ie: << prev) through survey if a mandatory question
// has not been answered. 1=Allow, 0=Deny
$config['deletenonvalues']    =   1;                // By default, LimeSurvey does not save responses to conditional questions that haven't been answered/shown. To have LimeSurvey save these responses change this value to 0.
$config['stringcomparizonoperators']   =   0;                // By default, LimeSurvey assumes the numrical order for comparizon operators in conditions. If you need string comparizon operators, set this parameter to 1
$config['printanswershonorsconditions'] = 1;	      // Set to 1 if you want the participant printanswers feature to show only the questions that were displayed survey branching-logic
$config['shownoanswer']       =   1;                // Show 'no answer' for non mandatory questions ( 0 = no , 1 = yes , 2 = survey admin can choose )
$config['admintheme']         =  'default';         // This setting specifys the directory where the admin finds it theme/css style files, e.g. setting 'default' points to /admin/styles/default

$config['defaulttemplate']    =  'default';         // This setting specifys the default theme used for the 'public list' of surveys

$config['allowedtemplateuploads'] = 'gif,ico,jpg,png';  // File types allowed to be uploaded in the templates section.

$config['allowedresourcesuploads'] = '7z,aiff,asf,avi,bmp,csv,doc,fla,flv,gif,gz,gzip,ico,jpeg,jpg,mid,mov,mp3,mp4,mpc,mpeg,mpg,ods,odt,pdf,png,ppt,pxd,qt,ram,rar,rm,rmi,rmvb,rtf,sdc,sitd,swf,sxc,sxw,tar,tgz,tif,tiff,txt,vsd,wav,wma,wmv,xls,xml,zip,pstpl,css,js';   // File types allowed to be uploaded in the resources sections, and with the HTML Editor

$config['memorylimit']        =  '32M';   // This sets how much memory LimeSurvey can access. 32M is the minimum (M=mb) recommended - if you are using PDF functions up to 64M may be needed

$config['showpopups']         =   1;                // Show popup messages if mandatory or conditional questions have not been answered correctly.
// 1=Show popup message, 0=Show message on page instead.


// Session options

// $sessionlifetime sets how long until a survey session expires in seconds
//$sessionlifetime    =  3600;
// $sessionhandler can be either 'file' or 'db'. (default: 'file'). 
// Generally you don't want to change that unless you are using LimeSurvey on load-balanced servers   
//$sessionhandler     =  'file';   



// Support for Fancy URLs
//
// This new feature makes survey URLs more readable
// For example a normal survey that looks like this

//     http://example.com/limesurvey/index.php?sid=12345&lang=de

// will look like this

//      http://example.com/lime/survey/12345/lang-fr/tk-ertoiuy [^]

// If you want to have fancy URLs, set this to 1 AND
// rename htaccess.txt in the LimeSurvey root directory to .htaccess
//
// NOTE: You MUST have the Apache mod_rewrite module installed.
// If you don't know what this is better leave this setting alone.
$config['modrewrite']         =   0;

// Enable or Disable LDAP feature
$config['enableLdap'] = false;

// Experimental parameters, only change if you know what you're doing
//
// $filterout_incomplete_answers
//  * default behaviour of LimeS regarding answer records with no submitdate
//  * can be overwritten by module parameters choose one of the following://
//		* filter: 		Show only complete answers
//		* show: 		Show both complete and incomplete answers
//		* incomplete: 	Show only incomplete answers

$config['filterout_incomplete_answers'] = 'show';
//
// $stripQueryFromRefurl (default is false)
//  * default behaviour is to record the full referer url when requested
//  * set to true in order to remove the parameter part of the referrer url
//  $stripQueryFromRefurl = false;

// $defaulthtmleditormode
//  * sets the default mode for htmleditor: none, inline, popup
//    users without specific preference inherit this setup
//  * inline: inline replacement of fields by an HTML editor:
//     --> slow but convenient and user friendly
//  * popup: adds an icon that runs a popup with and html editor
//     --> faster, but html code is displayed on the form
//  * none: no html editor
$config['defaulthtmleditormode'] = 'inline';

// $surveyPreview_require_Auth
// Enforce Authentication to the LS system
// before beeing able to preview a survey (testing a non active survey)
// Default is true
$config['surveyPreview_require_Auth'] = true;


// $use_one_time_passwords
// Activate One time passwords
// The user can call the limesurvey login at /limesurvey/admin and pass username and
// a one time password which was previously written into the users table (column one_time_pw) by
// an external application.
// This setting has to be turned on to enable the usage of one time passwords (default = off).
$config['use_one_time_passwords'] = false;


// $display_user_password_in_html
// Option to tell LS to display the automatically generated user password in the html GUI or not
$config['display_user_password_in_html'] = false;


// $display_user_password_in_email
// Option to tell LS to display the automatically generated user password in the welcome email or not
$config['display_user_password_in_email'] = true;


// $useWebserverAuth
// Enable delegation of authentication to the webserver.
// If you set this parameter to true and set your webserver to authenticate
// users accessing the /admin subdirectory, then the username returned by
// the webserver will be trusted by LimeSurvey and used for authentication
// unless a username mapping is used see $userArrayMap below
//
// The user still needs to be defined in the limesurvey database in order to
// login and get his permissions (unless $WebserverAuth_autocreateUser is set to true)
$config['useWebserverAuth'] = false;

// $userArrayMap
// Enable username mapping
// This parameter is an array mapping username from the webserver to username
// defined in LimeSurvey
// Can be usefull if you have no way to add an 'admin' user to the database
// used by the webserver, then you could map your true loginame to admin with
// $userArrayMap = Array ('mylogin' => 'admin');
//
// $WebserverAuth_autocreateUser
// Enable this if you want to automatically create users authenticated by the
// webserver in LS
// Default is false (commenting this options also means false)
// $WebserverAuth_autocreateUser = false;
//
// $WebserverAuth_autouserprofile
// This parameter MUST be defined if you set $WebserverAuth_autocreateUser to true
// otherwise autocreateUser will be disabled.
// This is an array describing the default profile to use for auto-created users
// This profile will be the same for all users (unless you define the optionnal
// 'hook_get_autouserprofile' function).
//
//$WebserverAuth_autouserprofile = Array(
//					'full_name' => 'autouser',
//					'email' => $siteadminemail,
//					'lang' => 'en',
//					'htmleditormode' => $defaulthtmleditormode,
//					'templatelist' => 'default,basic',
//					'create_survey' => 1,
//					'create_user' => 0,
//					'delete_user' => 0,
//					'superadmin' => 0,
//					'configurator' =>0,
//					'manage_template' => 0,
//					'manage_label' => 0);
//
//
// The optionnal 'hook_get_autouserprofile' function
// is for advanced user usage only.
// It is used to customize the profile of the imported user
// If set, the this function will overwrite the $WebserverAuth_autouserprofile
// defined above by its return value
//
// You can use any external DB in order to fill the profile for the user_name
// passed as the first parameter
// A dummy example for the 'hook_get_autouserprofile' function is given
// below:
//function hook_get_autouserprofile($user_name)
//{
//	return Array(
//			'full_name' => '$user_name',
//			'email' => "$user_name@localdomain.org",
//			'lang' => 'en',
//			'htmleditormode' => 'inline',
//			'templatelist' => 'default,basic,MyOrgTemplate',
//			'create_survey' => 1,
//			'create_user' => 0,
//			'delete_user' => 0,
//			'superadmin' => 0,
//			'configurator' =>0,
//			'manage_template' => 0,
//			'manage_label' => 0);
//}


//$filterxsshtml
// Enables filtering of suspicious html tags in survey, group, questions
// and answer texts in the administration interface
// Only set this to false if you absolutely trust the users
// you created for the administration of  LimeSurvey and if you want to
// allow these users to be able to use Javascript etc. .
$config['filterxsshtml'] = true;

// $usercontrolSameGroupPolicy
// If this option is set to true, then limesurvey operators will only 'see'
// users that belong to at least one of their groups
// Otherwise they can see all operators defines in LimeSurvey
$config['usercontrolSameGroupPolicy'] = true;

// $addTitleToLinks
// If this option is set to true, then LimeSurvey will add 'title' html element
// to all links used in menus. This will help screen reader to analyse the
// menus. Only set this to true if you're using a screen reader because
// it overlaps with tooltips. This option shouldn't be required anymore
// for new releases of screen readers.
$config['addTitleToLinks'] = false;

// $demoModeOnly
// If this option is set to true, then LimeSurvey will go into demo mode.
// Demo mode disables the following things:
//
// * Disables changing of the admin user's details and password
// * Disables uploading files on the Template Editor
// * Disables sending email invitations and reminders
// * Disables doing a database dump
// * Disables the ability to save the following global settings: Site name, Default language, Default Htmleditor Mode, XSS filter

$config['demoModeOnly'] = false;

/** -----------------------------------------------------
 * Because columns are tricky things, in terms of balancing visual
 * layout against semantic markup. The choice has been left to the
 * system administrator or designer. (Who ever cares most.)
 *
 * $column_style defines how columns are rendered for survey answers.
 * There are four possible options:
 *     'css'   using one of the various CSS only methods for creating
 columns (see template style sheet for details).
 *     'ul'    using multiple floated unordered lists. (DEFAULT)
 *     'table' using conventional tables based layout.
 *     NULL    blocks the use of columns
 */
$config['column_style'] = 'ul';

/**
 * $hide_groupdescr_allinone.
 * This parameter 'hide_groupdescr_allinone' can be set to control
 * if the group description should be hidden if the group description of a group of questions
 * with all questions hidden by conditions is displayed in all-in-one survey mode.
 * hide_groupdescr_allinone can be set to true or false (default: true)
 */
$config['hide_groupdescr_allinone']=true;


/**
 * Use FireBug Lite for JavaScript and template development and testing.
 * This allows you to use all the features of Firebug in any browser.
 * see http://getfirebug.com/lite.html for more info.
 */
$config['use_firebug_lite'] = false;

/*
 * When activated there are additional values like arithmetic mean and standard deviation at statistics.
 * This only affects question types "A" (5 point array) and "5" (5 point choice).
 * Furthermore data is aggregated to get a faster overview.
 */
$config['showaggregateddata'] = 1;


/**
 * When this settings is true/1 (default) then the standard templates that are delivered with the
 * LimeSurvey installation package are read-only. If you want to modify a template just copy it first.
 * This prevents upgrade problems later because if you modify your standard templates you could accidenitally
 * overwrite these on a LimSurvey upgrade. Only set this to 0 if you know what you are doing.
 */
$config['standard_templates_readonly'] =  true;


/**
 * When this settings is true/1 (default = false/0) then the printable survey option will show a reference
 * to the "lime_survey_12345" table which stores the survey answers. 
 * It will show a code like "12345X22X333name":
 * 12345 = surveyID
 * 22 = groupID
 * 333 = questionID
 * name = answer code (only shown for certain question types
 * 
 * This code will be shown in front of each question and in front of each answer option at the printable survey.
 * It can be used as a data analysis code book for querying data from the main response table.
 */
$config['showsgqacode'] =  false;



/**
 *  PDF Export Settings
 *  This feature activates PDF export for printable survey and Print Answers
 *  The PDF export is totally experimental. The output is mostly ugly.
 *  At this point no support can be given - if you want to help to fix it please get in touch with us
 */

$config['usepdfexport']   = 0;                       //Set 0 to disable; 1 to enable
$config['pdfdefaultfont'] = 'freemono';              //Default font for the pdf Export
$config['pdffontsize']    = 9;                       //Fontsize for normal text; Surveytitle is +4; grouptitle is +2
$config['notsupportlanguages'] = array('zh-Hant-TW','zh-Hant-HK','zh-Hans','ja','th');
$config['pdforientation'] = 'P';                     // Set L for Landscape or P for portrait format



// RemoteControl Settings
/**
 * This value determines if the RemoteControl is enabled (true) or not (false)
 */
$config['enableLsrc'] = false;

/**
 * This value determines if you can save survey structures (as .csv) into your lsrc folder in export menu
 */
$config['export4lsrc'] = false;

// CAS Settings
/**
 * Please note that CAS functionality is very basic and you have to modify the client to your needs.
 * At least the hard work is done.
 * The Client is deployed in Limesurvey and a file login_check_cas.php does what login_check.php does in normal mode.
 *
 * $casEnabled determines if CAS should be used or not for Authentication.
 * $casAuthServer the servername of the cas Auth Server. Without http://
 * $casAuthPort CAS Server listening Port
 * $casAuthUri relative uri from $casAuthServer to cas workingdirectory
 */
$config['casEnabled'] = false;
$config['casAuthServer'] = 'localhost';
$config['casAuthPort'] = 8443;
$config['casAuthUri'] = '/cas-server/';


/**
 *  Statistics chart settings
 *  Different languages need different fonts to properly create charts - this is what the following settings are for
 */

/**
 *  $chartfontfile - set the font file name used to created the charts in statistics - this font must reside in <limesurvey root folder>/fonts
 *  Set this to specific font-file (for example 'vera.ttf') or set it to 'auto' and LimeSurvey tried to pick the best font depending on your survey base language
 */
$config['chartfontfile']='auto';

/**
 *  $chartfontsize - set the size of the font to created the charts in statistics
 */
$config['chartfontsize'] =10;


/**
 * $updatecheckperiod - sets how often LimeSurvey checks for updates - the number sets the number of days between updates.
 * Set to 0 to disable any update checks
 * Recommended: 7
 */
$config['updatecheckperiod']=7;

/**
 * @var $showXquestions string allows you to control whether or not
 * {THEREAREXQUESTIONS} is displayed (if it is included in a template)
 *	hide = always hide {THEREAREXQUESTIONS}
 *	show = always show {THEREAREXQUESTIONS}
 *	choose = allow survey admins to choose
 */
$config['showXquestions'] = 'choose';


/**
 * @var $showgroupinfo string allows you to control whether or not
 * {GROUPNAME} and/or {GROUPDESCRIPTION} are displayed (if they are
 * included in a template)
 *	none = always hide both title and description
 *	name = always {GROUPNAME} only
 *	description = always show {GROUPDESCRIPTION} only
 *	both = always show both {GROUPNAME} and {GROUPDESCRIPTION}
 *	choose = allow survey admins to choose
 */
$config['showgroupinfo'] = 'choose';


/**
 * @var $showqnumcode string allows you to control whether or not
 * {QUESTION_NUMBER} and/or {QUESTION_CODE} are displayed (if they
 * are included in a template)
 *	none = always hide both {QUESTION_NUMBER} and {QUESTION_CODE}
 *	code = always show {QUESTION_CODE} only
 *	number = always show {QUESTION_NUMBER} only
 *	both = always show both {QUESTION_NUMBER} and {QUESTION_CODE}
 *	choose = allow survey admins to choose
 */
$config['showqnumcode'] = 'choose';


/**
 * @var $force_ssl string - forces LimeSurvey to run through HTTPS or to block HTTPS
 * 	'on' =	force SSL/HTTPS to be on (This will cause LimeSurvey
 *		to fail in SSL is turned off)
 *	'off' =	block SSL/HTTPS (this prevents LimeSurvey from
 *		running through SSL)
 *	'' =	do nothing (default)
 *
 * DO NOT turn on secure unless you are sure SSL/HTTPS is working and
 * that you have a current, working, valid certificate. If you are
 * unsure whether your server has a valid certificate, just add 's'
 * to the http part of your normal LimeSurvey URL.
 *	e.g. https://your.domain.org/limesurvey/admin/admin.php
 * If LimeSurvey comes up as normal, then everything is fine. If you
 * get a page not found error or permission denied error then 
 */
$config['force_ssl'] = ''; // DO not turn on unless you are sure your server supports SSL/HTTPS


/**
 * @var $ssl_emergency_override boolean forces SSL off
 * if You've turned HTTPS/SSL on in the global settings but your
 * server doesn't have HTTPS enabled, the only way to turn it off is
 * by changing a value in the database directly. This allows you to
 * force HTTPS off while you change the global settings for Force Secure.
 * 
 *     false = do nothing;
 *     true = override $force_ssl=on;
 *
 * This should always be false except in emergencies where you change
 * it to true until you fix the problem.
 */
$config['ssl_emergency_override'] = false;


// Get your IP Info DB key from http://ipinfodb.com/
// If you have the API key, you can use it to get the approximate location of the user initially.

$config['ipInfoDbAPIKey'] = '';

// Google Maps API key. http://code.google.com/apis/maps/signup.html
// To have questions that require google Maps!

$config['googleMapsAPIKey'] = '';

//DO NOT EVER CHANGE THE FOLLOWING 5 LINES ---------------
//require_once(dirname(__FILE__).'/config.php');
//if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']!='' && $_SERVER['HTTPS']!='off')
//{
//       $rooturl=str_replace('http://', 'https://', $rooturl);
//}  
//-----------------------------------------------------

// === Advanced Setup
// The following parameters need information from config.php
// and thus are defined here (After reading your config.php file).
// This means that if you want to tweak these very advanced parameters
// you'll have to do this in this file and not in config.php
// In this case, don't forget to backup your config-defaults.php settings when upgrading LS
// and report them to the new config-defaults.php file (Do not simply overwrite the new
// config-defaults file with your old one

//The following url and dir locations do not need to be modified unless you have a non-standard
//LimeSurvey installation. Do not change unless you know what you are doing.

//Initialize URL Helper to get base_url();
get_instance()->load->helper('url');

$config['homeurl']                 = base_url()."admin";         // The website location (url) of the admin scripts
$config['publicurl']               = base_url();               // The public website location (url) of the public survey script
$config['tempurl']                 = base_url()."tmp";
$config['imageurl']                = base_url()."images";        // Location of button bar files for admin script
$config['uploadurl']               = base_url()."upload";
$config['standardtemplaterooturl'] = base_url()."templates";     // Location of the standard templates
$config['usertemplaterooturl']     = $config['uploadurl']."/templates";   // Location of the user templates


$config['homedir']                 = $config['rootdir'].DIRECTORY_SEPARATOR."admin";       // The directory path of the admin scripts
$config['publicdir']               = $config['rootdir'];                                   // The directory path of the public scripts
$config['tempdir']                 = $config['rootdir'].DIRECTORY_SEPARATOR."tmp";         // The directory path where LimeSurvey can store temporary files
$config['imagedir']                = $config['rootdir'].DIRECTORY_SEPARATOR."images";      // The directory path of the image directory
$config['uploaddir']               = $config['rootdir'].DIRECTORY_SEPARATOR."upload";
$config['standardtemplaterootdir'] = $config['rootdir'].DIRECTORY_SEPARATOR."templates";   // The directory path of the standard templates
$config['usertemplaterootdir']     = $config['rootdir'].DIRECTORY_SEPARATOR."templates"; // The directory path of the user templates    

//settings deleted