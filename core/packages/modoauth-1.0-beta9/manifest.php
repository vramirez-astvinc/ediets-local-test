<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => '',
    'readme' => '--------------------
Extra: ModoAuth2
--------------------
Version: 1.0
 
A oAuth2 provider for MODx Revolution leveraging Brent Shaffer\'s  oauth2-server-php (https://github.com/bshaffer/oauth2-server-php).
',
    'changelog' => 'Changelog file for ModoAuth2 component.
 
ModoAuth 1.0
====================================
- oAuth2 provider in ModX that returns profile data once user is authenticated and access is granted to client.',
    'setup-options' => 'modoauth-1.0-beta9/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'a348dca534dc7046f0cac2b09b37ddb3',
      'native_key' => 'modoauth',
      'filename' => 'modNamespace/79c472cfdf96c52085efa7c2b8f4fd09.vehicle',
      'namespace' => 'modoauth',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '88163f5d948da3d3246c0c85a22cce04',
      'native_key' => 1,
      'filename' => 'modCategory/c46f7bfd75f6e57402de3c407ed8056b.vehicle',
      'namespace' => 'modoauth',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '3668aecc983ebb30d2497fe7adfc5382',
      'native_key' => 'modoauth',
      'filename' => 'modMenu/80406db5e7462131db72b873ccfc0d94.vehicle',
      'namespace' => 'modoauth',
    ),
  ),
);