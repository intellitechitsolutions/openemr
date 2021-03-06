<?php
/*
 * Generated configuration file
 * Generated by: phpMyAdmin 2.11.9.5 setup script
 * Date: Tue, 12 May 2009 00:50:16 GMT
 * 
 * Heavily customized for OpenEMR by Brady Miller.
 *
 */

/* OpenEMR Database Settings */
if (empty($_SESSION['site_id'])) die("phpMyAdmin has no session site ID!");
// This code is eval'd by phpmyadmin/libraries/Config.class.php
// and so __FILE__ is not what you might think.
$webserver_root = dirname(dirname(dirname(__FILE__)));
if (stripos(PHP_OS,'WIN') === 0) $webserver_root = str_replace("\\","/",$webserver_root); 
$GLOBALS['OE_SITE_DIR'] = "$webserver_root/sites/" . $_SESSION['site_id'];
require_once("../library/sqlconf.php");

// this is the acl check (note can't use globals.php)
$GLOBALS['phpmyadmin_acl_check'] = true;
require_once("../library/acl.inc");
if (! acl_check('admin', 'database')) {
  echo "You do not have access to this resource<br>";
  exit;
}

/* Servers configuration */
$i = 0;

/* Server localhost (config:openemr) [1] */
$i++;

//For standard OpenEMR database access
$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['host'] = $sqlconf['host'];
$cfg['Servers'][$i]['port'] = $sqlconf['port'];
$cfg['Servers'][$i]['user'] = $sqlconf['login'];
$cfg['Servers'][$i]['password'] = $sqlconf['pass'];
$cfg['Servers'][$i]['only_db'] = $sqlconf['dbase'];

//For control user access to use the relational
// database features provided by phpmyadmin
// in the OpenEMR database. Note that there is
// not full functionality because there is no
// designer_coords table. Also note that the
// sql bookmarks (pma_bookmarks) are currently
// utilized by OpenEMR itself to create custom
// reports at openemr/interface/reports/index.php
//
$cfg['Servers'][$i]['controluser']     = $sqlconf['login'];
$cfg['Servers'][$i]['controlpass']     = $sqlconf['pass'];
$cfg['Servers'][$i]['pmadb']           = $sqlconf['dbase'];
$cfg['Servers'][$i]['bookmarktable']   = 'pma_bookmark';
$cfg['Servers'][$i]['relation']        = 'pma_relation';
$cfg['Servers'][$i]['table_info']      = 'pma_table_info';
$cfg['Servers'][$i]['table_coords']    = 'pma_table_coords';
$cfg['Servers'][$i]['pdf_pages']       = 'pma_pdf_pages';
$cfg['Servers'][$i]['column_info']     = 'pma_column_info';
$cfg['Servers'][$i]['history']         = 'pma_history';
$cfg['Servers'][$i]['designer_coords'] = '';
$cfg['Servers'][$i]['verbose_check']   = TRUE;

/* End of servers configuration */


/* Other mods - BM 05-2009 */
$cfg['ShowCreateDb'] = false;
/* Other mods - BM 01-2012 */
$cfg['ShowPhpInfo'] = TRUE;
?>
