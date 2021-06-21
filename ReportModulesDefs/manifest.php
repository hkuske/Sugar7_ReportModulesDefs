<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$manifest = array (
  'acceptable_sugar_versions' => 
  array (
    0 => '7.*.*',
    1 => '8.*.*',
    2 => '9.*.*',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => 'adds campaigntracers, targetlists and producttemplates to reporting',
  'key' => '',
  'author' => 'kuske',
  'description' => 'adds campaigntracers, targetlists and producttemplates to reporting',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'ReportModulesDefs',
  'published_date' => '2015-03-23 16:39:59',
  'type' => 'module',
  'version' => 201503230001,
  'remove_tables' => 'false',
);

$installdefs = array (
  'id' => 'ReportModulesDefs',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/custom/',
      'to' => 'custom/',
    ),
  ),
);