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
    'setup-options' => 'modoauth-1.0-beta8/setup-options.php',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => 'a9eaf255d76c6f077d4ca5f583d1e0b4',
      'native_key' => 'modoauth',
      'filename' => 'modNamespace/ddde3c9bf61fdcbdd50db0f11ec98f70.vehicle',
      'namespace' => 'modoauth',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'c2fda515d1157a3346b32a2f4953af33',
      'native_key' => 1,
      'filename' => 'modCategory/3c80dcf3975a8c1b672468bd5d7ed9a8.vehicle',
      'namespace' => 'modoauth',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => '4697188916fee4ee3f250ad796f0c284',
      'native_key' => 'modoauth',
      'filename' => 'modMenu/1cea61ce46be7891dd780aef7cbea09a.vehicle',
      'namespace' => 'modoauth',
    ),
  ),
);