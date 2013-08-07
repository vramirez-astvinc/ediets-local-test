<?php

require_once dirname(dirname(dirname(dirname(__FILE__)))).'/config.core.php';
require_once MODX_CORE_PATH.'config/'.MODX_CONFIG_KEY.'.inc.php';
require_once MODX_CONNECTORS_PATH.'index.php';
 
$corePath = $modx->getOption('modoauth.core_path',null,$modx->getOption('core_path').'components/modoauth/');
require_once $corePath.'model/modoauth/modoauth.class.php';
$modx->modoauth = new ModoAuth($modx);
 
$modx->lexicon->load('modoauth:default');
 
/* handle request */
$path = $modx->getOption('processorsPath',$modx->modoauth->config,$corePath.'processors/');
$modx->request->handleRequest(array(
    'processors_path' => $path,
    'location' => '',
));

?>
