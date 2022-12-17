<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'nystudio107/craft-vite' => 
  array (
    'class' => 'nystudio107\\vite\\Vite',
    'basePath' => $vendorDir . '/nystudio107/craft-vite/src',
    'handle' => 'vite',
    'aliases' => 
    array (
      '@nystudio107/vite' => $vendorDir . '/nystudio107/craft-vite/src',
    ),
    'name' => 'Vite',
    'version' => '4.0.3',
    'description' => 'Allows the use of the Vite.js next generation frontend tooling with Craft CMS',
    'developer' => 'nystudio107',
    'developerUrl' => 'https://nystudio107.com',
    'documentationUrl' => 'https://nystudio107.com/docs/vite/',
  ),
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '3.0.2',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/redactor/blob/v2/README.md',
  ),
);
