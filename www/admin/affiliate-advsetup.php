<?php

/*
+---------------------------------------------------------------------------+
| Openads v${RELEASE_MAJOR_MINOR}                                                              |
| ============                                                              |
|                                                                           |
| Copyright (c) 2003-2007 Openads Limited                                   |
| For contact details, see: http://www.openads.org/                         |
|                                                                           |
| Copyright (c) 2000-2003 the phpAdsNew developers                          |
| For contact details, see: http://www.phpadsnew.com/                       |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id: affiliate-channels.php 9558 2007-09-11 06:50:55Z aj.tarachanowicz@openads.org $
*/

//
// NOTE: This code has been copied/adapted from affiliate-channels.php
// The actual HTML that is relevant is at the bottom of the page. Feel
// free to refactor it into Smarty templates.

// Require the initialisation file
require_once '../../init.php';

// Required files
require_once MAX_PATH . '/www/admin/config.php';
require_once MAX_PATH . '/www/admin/lib-statistics.inc.php';
require_once MAX_PATH . '/lib/max/other/html.php';

// Register input variables
phpAds_registerGlobal ('acl', 'action', 'submit');


// Initialise some parameters
$pageName = basename($_SERVER['PHP_SELF']);
$tabindex = 1;
$agencyId = phpAds_getAgencyID();
$aEntities = array('affiliateid' => $affiliateid);

if (!MAX_checkPublisher($affiliateid)) {
    phpAds_Die($strAccessDenied, $strNotAdmin);
}

/*-------------------------------------------------------*/
/* HTML framework                                        */
/*-------------------------------------------------------*/

// Display navigation
$aOtherPublishers = Admin_DA::getPublishers(array('agency_id' => $agencyId));
MAX_displayNavigationPublisher($pageName, $aOtherPublishers, $aEntities);

/*-------------------------------------------------------*/
/* Main code                                             */
/*-------------------------------------------------------*/

?>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tbody>
   <tr><td height="25" colspan="3"><b>Advertiser Sign Up options</b></td></tr>
   <tr height="1">
   <td width="30"><img width="30" height="1" src="images/break.gif"/></td>
      <td width="200"><img width="200" height="1" src="images/break.gif"/></td>
      <td width="100%"><img width="100%" height="1" src="images/break.gif"/></td>
   </tr>
   <tr>
      <td height="10" colspan="3"></td>
   </tr>
   <tr>
      <td width="100%" colspan="3">
         To edit your Advertiser Sign Up options, follow to
         <a target="_blank" href="#">http://payment.openads.org/site=123</a>
      </td>
   </tr>
</tbody>
</table>

<table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 30px">
<tbody>
   <tr><td height="25" colspan="3"><b>Advertiser Sign Up link</b></td></tr>
   <tr height="1">
   <td width="30"><img width="30" height="1" src="images/break.gif"/></td>
      <td width="200"><img width="200" height="1" src="images/break.gif"/></td>
      <td width="100%"><img width="100%" height="1" src="images/break.gif"/></td>
   </tr>
   <tr>
      <td height="10" colspan="3"></td>
   </tr>
   <tr>
      <td width="100%" colspan="3">
         To add an Advertiser Sign Up link to your site, please copy the HTML below:
         <pre class="invocation-codes js">HTML code goes here...
HTML code goes here...</pre>
      </td>
   </tr>
</tbody>
</table>

<script><!--
  $('pre').bind('mouseover', selectElement);
//-->
</script>
<?php

phpAds_PageFooter();

?>
