<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TYPO3_CONF_VARS['SYS']['sitename'] = 'New TYPO3 site';

// Default password is "joh316" :
$TYPO3_CONF_VARS['BE']['installToolPassword'] = 'bacb98acf97e0b6112b1d1b650b84971';

$TYPO3_CONF_VARS['EXT']['extList'] = 'cms,lang,sv,em,fal,list,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,css_styled_content,t3skin,t3editor,reports,info,perm,func,filelist,about,cshmanual,opendocs,recycler,scheduler,linkvalidator,pagetree';

$typo_db_extTableDef_script = 'extTables.php';

$debian_config = '/etc/typo3-dummy/debian-db.php';
if(is_file($debian_config) && is_readable($debian_config)) {
  include_once($debian_config);

  $typo_db_username = $dbuser;
  $typo_db_password = $dbpass;
  $typo_db = $dbname;
  $typo_db_host = $dbserver;
  if(empty($typo_db_host)) $typo_db_host = 'localhost';
}

// Use the memcached server for speeding up TYPO3, set next line to '1' to enable the framework
$TYPO3_CONF_VARS['SYS']['useCachingFramework'] = '0';
$TYPO3_CONF_VARS['SYS']['caching']['cacheBackendAssignments'] = array(
    'cache_hash' => array(
        'backend' => 't3lib_cache_backend_File',
        'options' => array(
        )
    ),
    'cache_pages' => array(
        'backend' => 't3lib_cache_backend_Memcached',
        'options' => array(
            'servers' => array('localhost:11211'),
        )
    ),
    'cache_pagesection' => array(
        'backend' => 't3lib_cache_backend_Memcached',
        'options' => array(
            'servers' => array('localhost:11211'),
        )
#        'backend' => 't3lib_cache_backend_Db',
#        'options' => array(
#            'cacheTable' => 'cache_pagesection',
#        )
    )
);

## INSTALL SCRIPT EDIT POINT TOKEN - all lines after this points may be changed by the install script!

// encryption key. set is to a long unique string.
$TYPO3_CONF_VARS['SYS']['encryptionKey'] = 'd1d7e2456f987357aa7e847352b96570f84d195666b64b716bbe75d7a68e8d3058476da1578f122379e6eebc07d96fbe';
// Modified or inserted by TYPO3 Install Tool.

// If safe_mode is activated with TYPO3, disable use of
// external programs
// typo3-dummy provides links to the most important external programs in
// /var/lib/typo3-dummy/execdir, so exec() function is enabled by default.
$TYPO3_CONF_VARS["BE"]["disable_exec_function"] = '0';

// TYPO3 prefers the use of GIF-files and most likely your visitors on
// your website does too as not all browsers support PNG yet.
$TYPO3_CONF_VARS['GFX']['gdlib_png'] = '0';	// Modified or inserted by TYPO3 Install Tool.

// set this true to get some better results in GIFBUILDER
$TYPO3_CONF_VARS['GFX']['png_truecolor'] = '0';	// Modified or inserted by TYPO3 Install Tool.

// enabling the use of gdblib2 for image processing
$TYPO3_CONF_VARS["GFX"]["gdlib_2"] = '1';

// last versions of imagemagick renamed combine to composite. It will
// be set by basic configuration automatically.
$TYPO3_CONF_VARS["GFX"]["im_combine_filename"] = 'combine';

// This value should be set to 1 if imagemagick version is greater
// than 5.2
$TYPO3_CONF_VARS['GFX']['im_negate_mask'] = '1';	// Modified or inserted by TYPO3 Install Tool.

$TYPO3_CONF_VARS["GFX"]["im_imvMaskState"] = '1';

$TYPO3_CONF_VARS["GFX"]["im_mask_temp_ext_gif"] = '1';

// The value should be 0 if the version of imagemagick is greater than
// 5, otherwise the creation of effects is getting too slow
$TYPO3_CONF_VARS["GFX"]["im_no_effects"] = '1';

$TYPO3_CONF_VARS['GFX']['im_v5effects'] = '0';	// Modified or inserted by TYPO3 Install Tool.

// Path to the imagemagick manipulation tools like convert,
// composite and identify
$TYPO3_CONF_VARS["GFX"]["im_path"] = '/var/lib/typo3-dummy/execdir/';
$TYPO3_CONF_VARS['GFX']["im_path_lzw"] = '/var/lib/typo3-dummy/execdir/';

// Set Value to 1 if version of ImageMagick is greater than 4.9
$TYPO3_CONF_VARS['GFX']['im_version_5'] = 'IM6';	// Modified or inserted by TYPO3 Install Tool.

// This variable can be empty if ImageMagick is compiled with LZW.
// Otherwise you have to set the path to LZW
//$TYPO3_CONF_VARS["GFX"]["im_path_lzw"] = '';

// Image file formats that should be accepted by Typo3
$TYPO3_CONF_VARS["GFX"]["imagefile_ext"] = 'gif,jpg,jpeg,tif,bmp,pcx,tga,png,pdf';

$TYPO3_CONF_VARS['GFX']['im_noFramePrepended'] = '0';	// Modified or inserted by TYPO3 Install Tool.

// Enables the preview of images to make the choice more easy
$TYPO3_CONF_VARS["GFX"]["thumbnails"] = '1';

// Preview of images in png or gif format.
// Should be the same as "gdlib_png"
$TYPO3_CONF_VARS['GFX']['thumbnails_png'] = '0';	// Modified or inserted by TYPO3 Install Tool.

// Check freetype quicktest in the basic configuration if text is
// exceeding the image borders. If yes, you are using Freetype 2 and
// need to set TTFdpi to 96 dpi
$TYPO3_CONF_VARS['GFX']['TTFdpi'] = '72';	// Modified or inserted by TYPO3 Install Tool.

// set memory limit to 48 mb.
// You may want to set this limit higher to get the extension manager working.
$TYPO3_CONF_VARS['SYS']['setMemoryLimit'] = '0';	// Modified or inserted by TYPO3 Install Tool.

// Defines which of these PHP-features to use for various Charset conversing
// functions in t3lib_cs.
$TYPO3_CONF_VARS['SYS']['t3lib_cs_convMethod'] = '';	// Modified or inserted by TYPO3 Install Tool.

// Force TYPO3 to use utf-8 in frontend and backend
$TYPO3_CONF_VARS['BE']['forceCharset'] = 'utf-8';

// Let TYPO3 init mysql to use utf-8 connections
$TYPO3_CONF_VARS['SYS']['setDBinit'] = 'SET NAMES utf8;';

// The list of file extensions to be considered as images
$TYPO3_CONF_VARS['GFX']['imagefile_ext'] = 'gif,jpg,jpeg,tif,bmp,pcx,tga,png,swf,pdf,ai';

// Track images generated by imagemagick in the database (prevents double image rendering)
$TYPO3_CONF_VARS['GFX']['enable_typo3temp_db_tracking'] = '0';	// Modified or inserted by TYPO3 Install Tool.

// Set compat level to current version
$TYPO3_CONF_VARS['SYS']['compat_version'] = '4.5';

// disable the donate now! popup window
$TYPO3_CONF_VARS['BE']['allowDonateWindow'] = '0';

// define search path for binaries
$TYPO3_CONF_VARS['SYS']['binPath'] = '/var/lib/typo3-dummy/execdir/';

// disable logging of deprecated functions
$TYPO3_CONF_VARS['SYS']['enableDeprecationLog'] = '';

$TYPO3_CONF_VARS['EXT']['extList'] = 'extbase,css_styled_content,tsconfig_help,context_help,extra_page_cm_options,impexp,sys_note,tstemplate,tstemplate_ceditor,tstemplate_info,tstemplate_objbrowser,tstemplate_analyzer,func_wizards,wizard_crpages,wizard_sortpages,lowlevel,install,belog,beuser,aboutmodules,setup,taskcenter,info_pagetsconfig,viewpage,rtehtmlarea,t3skin,t3editor,reports,info,perm,func,filelist,about,cshmanual,opendocs,recycler,scheduler,linkvalidator,phpmyadmin,realurl,tt_news,version,static_info_tables,fluid,workspaces,dd_googlesitemap,flvplayer2,p2_realurl,templavoila,simulatestatic,fl_apti_youtube,newscalendar,ttnews_youtube,itaw_youtoubeembed,gkh_rss_import,kickstarter,tactic_listecours_simple,tactic_memoires_theses,extension_builder';	// Modified or inserted by TYPO3 Extension Manager. Modified or inserted by TYPO3 Core Update Manager. 
// Updated by TYPO3 Core Update Manager 09-05-13 22:43:43
/*$typo_db_username = 'mysql_522944215';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_password = ',0O4d,sx1QWihQ3h=m';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_host = 'localhost';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db = 'schema_03632802272424406';	//  Modified or inserted by TYPO3 Install Tool.*/

$typo_db_username = 'mysql_635273134';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_password = '+Vn?jn0OocZs4Z*FW2';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db_host = 'localhost';	//  Modified or inserted by TYPO3 Install Tool.
$typo_db = 'schema_69732118081705259';	//  Modified or inserted by TYPO3 Install Tool.

$TYPO3_CONF_VARS['BE']['versionNumberInFilename'] = '0';	//  Modified or inserted by TYPO3 Install Tool.
// Updated by TYPO3 Install Tool 09-05-13 22:45:53
$TYPO3_CONF_VARS['EXT']['extList_FE'] = 'extbase,css_styled_content,install,rtehtmlarea,t3skin,phpmyadmin,realurl,tt_news,version,static_info_tables,fluid,workspaces,dd_googlesitemap,flvplayer2,p2_realurl,templavoila,simulatestatic,fl_apti_youtube,newscalendar,ttnews_youtube,itaw_youtoubeembed,gkh_rss_import,kickstarter,tactic_listecours_simple,tactic_memoires_theses,extension_builder';	// Modified or inserted by TYPO3 Extension Manager.
// Modified or inserted by TYPO3 Extension Manager. 
$TYPO3_CONF_VARS['EXT']['extConf']['phpmyadmin'] = 'a:5:{s:12:"hideOtherDBs";s:1:"1";s:9:"uploadDir";s:21:"uploads/tx_phpmyadmin";s:10:"allowedIps";s:0:"";s:12:"useDevIpMask";s:1:"0";s:10:"ajaxEnable";s:1:"1";}';	//  Modified or inserted by TYPO3 Extension Manager.
$TYPO3_CONF_VARS['EXT']['extConf']['realurl'] = 'a:5:{s:10:"configFile";s:26:"typo3conf/realurl_conf.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}';	// Modified or inserted by TYPO3 Extension Manager. 
$TYPO3_CONF_VARS['EXT']['extConf']['tt_news'] = 'a:20:{s:13:"useStoragePid";s:1:"1";s:17:"requireCategories";s:1:"0";s:18:"useInternalCaching";s:1:"1";s:11:"cachingMode";s:6:"normal";s:13:"cacheLifetime";s:1:"0";s:13:"cachingEngine";s:8:"internal";s:11:"treeOrderBy";s:3:"uid";s:13:"prependAtCopy";s:1:"1";s:5:"label";s:5:"title";s:9:"label_alt";s:0:"";s:10:"label_alt2";s:0:"";s:15:"label_alt_force";s:1:"0";s:21:"categorySelectedWidth";s:1:"0";s:17:"categoryTreeWidth";s:1:"0";s:25:"l10n_mode_prefixLangTitle";s:1:"1";s:22:"l10n_mode_imageExclude";s:1:"1";s:20:"hideNewLocalizations";s:1:"0";s:24:"writeCachingInfoToDevlog";s:10:"disabled|0";s:23:"writeParseTimesToDevlog";s:1:"0";s:18:"parsetimeThreshold";s:3:"0.1";}';	//  Modified or inserted by TYPO3 Extension Manager.
$TYPO3_CONF_VARS['EXT']['extConf']['version'] = 'a:1:{s:18:"showDraftWorkspace";s:1:"0";}';	// Modified or inserted by TYPO3 Extension Manager. 
$TYPO3_CONF_VARS['EXT']['extConf']['static_info_tables'] = 'a:2:{s:7:"charset";s:5:"utf-8";s:12:"usePatch1822";s:1:"0";}';	// Modified or inserted by TYPO3 Extension Manager. 
$TYPO3_CONF_VARS['EXT']['extConf']['p2_realurl'] = 'a:2:{s:13:"language_uids";s:0:"";s:20:"default_language_uid";s:1:"1";}';	// Modified or inserted by TYPO3 Extension Manager. 
$TYPO3_CONF_VARS['EXT']['extConf']['templavoila'] = 'a:1:{s:7:"enable.";a:3:{s:13:"oldPageModule";s:1:"0";s:19:"selectDataStructure";s:1:"0";s:15:"renderFCEHeader";s:1:"0";}}';	//  Modified or inserted by TYPO3 Extension Manager.
$TYPO3_CONF_VARS['EXT']['extConf']['em'] = 'a:4:{s:17:"selectedLanguages";s:5:"fr,qc";s:14:"showOldModules";s:1:"1";s:14:"inlineToWindow";s:1:"1";s:19:"displayMyExtensions";s:1:"0";}';	// Modified or inserted by TYPO3 Extension Manager. 
// Updated by TYPO3 Extension Manager 25-09-13 10:47:41
$TYPO3_CONF_VARS['BE']['installToolPassword'] = 'ab8d9e0cd74e2cbcaacb1645f0e18287';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['SYS']['sitename'] = 'Faculté de Théologie';	// Modified or inserted by TYPO3 Install Tool. 
$TYPO3_CONF_VARS['SYS']['no_pconnect'] = '1';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['SYS']['UTF8filesystem'] = '1';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['BE']['lockIP'] = '2';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['BE']['maxFileSize'] = '50000';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['FE']['secureFormmail'] = '0';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['FE']['pageNotFound_handling'] = '/404/';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['FE']['addRootLineFields'] = ',tx_templavoila_ds,tx_templavoila_to,tx_templavoila_next_ds,tx_templavoila_next_to,tx_realurl_pathsegment,tx_realurl_exclude,tx_realurl_pathoverride,tx_realurl_pathsegment,alias,nav_title,title';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['MAIL']['transport'] = 'smtp';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['MAIL']['transport_smtp_server'] = 'smtp.ulaval.ca:25';	//  Modified or inserted by TYPO3 Install Tool.
$TYPO3_CONF_VARS['MAIL']['defaultMailFromAddress'] = 'apti@flsh.ulaval.ca';	//  Modified or inserted by TYPO3 Install Tool.
// Updated by TYPO3 Install Tool 02-10-13 14:11:18
$TYPO3_CONF_VARS['EXT']['extConf']['ttnews_youtube'] = 'a:2:{s:17:"videoDefaultWidth";s:3:"175";s:18:"videoDefaultHeight";s:3:"210";}';	//  Modified or inserted by TYPO3 Extension Manager.
$TYPO3_CONF_VARS['EXT']['extConf']['rtehtmlarea'] = 'a:13:{s:21:"noSpellCheckLanguages";s:23:"ja,km,ko,lo,th,zh,b5,gb";s:15:"AspellDirectory";s:15:"/usr/bin/aspell";s:17:"defaultDictionary";s:2:"fr";s:14:"dictionaryList";s:2:"fr";s:20:"defaultConfiguration";s:120:"Minimal (Most features disabled. Administrator needs to enable them using TypoScript. For advanced administrators only.)";s:12:"enableImages";s:1:"1";s:20:"enableInlineElements";s:1:"0";s:19:"allowStyleAttribute";s:1:"1";s:24:"enableAccessibilityIcons";s:1:"0";s:16:"enableDAMBrowser";s:1:"0";s:16:"forceCommandMode";s:1:"0";s:15:"enableDebugMode";s:1:"0";s:23:"enableCompressedScripts";s:1:"1";}';	// Modified or inserted by TYPO3 Extension Manager. 
$TYPO3_CONF_VARS['EXT']['extConf']['tactic_listecours_simple'] = 'a:3:{s:8:"username";s:0:"";s:8:"password";s:0:"";s:6:"schema";s:4:"SIDF";}';	//  Modified or inserted by TYPO3 Extension Manager.
$TYPO3_CONF_VARS['EXT']['extConf']['extension_builder'] = 'a:3:{s:15:"enableRoundtrip";s:1:"1";s:15:"backupExtension";s:1:"1";s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";}';	//  Modified or inserted by TYPO3 Extension Manager.
// Updated by TYPO3 Extension Manager 10-10-13 14:02:47
?>
