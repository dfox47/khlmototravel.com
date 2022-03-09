<?php

/******************************************************************************/
/******************************************************************************/

require_once('define.php');

/******************************************************************************/

require_once(PLUGIN_CRBS_CLASS_PATH.'CRBS.File.class.php');
require_once(PLUGIN_CRBS_CLASS_PATH.'CRBS.Include.class.php');
require_once(PLUGIN_CRBS_CLASS_PATH.'CRBS.Widget.class.php');

CRBSInclude::includeClass(PLUGIN_CRBS_LIBRARY_PATH.'/stripe/init.php',array('Stripe\Stripe'));
CRBSInclude::includeFileFromDir(PLUGIN_CRBS_CLASS_PATH);

/******************************************************************************/
/******************************************************************************/