<?php  return 'function elements_modplugin_1($scriptProperties= array()) {
global $modx;
if (is_array($scriptProperties)) {
extract($scriptProperties, EXTR_SKIP);
}
require_once \'vendor/autoload.php\';

$modx->log(modX::LOG_LEVEL_DEBUG, \'[mobile Detect] started...\');

if ($modx->event->name == \'OnLoadWebDocument\'){
        $modx->log(modX::LOG_LEVEL_DEBUG, \'[mobile Detect] OnLoadWebDocument...\');
        
        $detect = new Mobile_Detect;
        $template=$modx->resource->get(\'template\');
        $mobile_template=$modx->resource->getTVValue(\'mobile_template\');
        $tablet_template=$modx->resource->getTVValue(\'tablet_template\');

        if ( $detect->isMobile() ) {
            $modx->log(modX::LOG_LEVEL_DEBUG, \'[mobile Detect] is mobile...\');
            $modx->resource->set(\'template\', $mobile_template);

        }else if( $detect->isTablet() ){
            $modx->log(modX::LOG_LEVEL_DEBUG, \'[mobile Detect] is tablet...\');
            $modx->resource->set(\'template\', $tablet_template);

        }else{
            $modx->log(modX::LOG_LEVEL_DEBUG, \'[mobile Detect] is desktop or something new...\'); 
            $modx->resource->set(\'template\', $template);
        }
        
}
}
';