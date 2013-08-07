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
    'setup-options' => 'modoauth-1.0-beta7/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '29cd8cfc20125d672fa57014783c913c',
      'native_key' => 'modoauth',
      'filename' => 'modNamespace/a87c15092a14e666052b14e27a0e3f16.vehicle',
      'namespace' => 'modoauth',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => '8bb088ad43aa0e86fb4261bc66e93245',
      'native_key' => 1,
      'filename' => 'modCategory/c779118f1e94b6c6ced966c712d667c2.vehicle',
      'namespace' => 'modoauth',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '8ab14688fe5688066e8544edc32e78fb',
      'native_key' => 'modoauth',
      'filename' => 'modMenu/240bdf92533d95aa5d9c852e0f36e9c1.vehicle',
      'namespace' => 'modoauth',
    ),
  ),
);