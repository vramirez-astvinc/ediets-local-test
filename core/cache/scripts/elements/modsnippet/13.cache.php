<?php  return 'function elements_modsnippet_13($scriptProperties= array()) {
global $modx;
if (is_array($scriptProperties)) {
extract($scriptProperties, EXTR_SKIP);
}
xdebug_break();

$store_link=\'https://ediets.myshopify.com\';
$return_to = isset($return_to) ? (string) $return_to : $store_link.\'/cart/338074592:1\';

$path = $modx->getOption(\'modshopify.core_path\', $config, $modx->getOption(\'core_path\').\'components/modshopify/\');
$ms = $modx->getService(\'modshopify\', \'ModShopify\', $path . \'model/\', $scriptProperties);
$token = $ms->getMultipassLogin($return_to);

error_log($token);

$link = $store_link.\'/account/login/multipass/\'.$token;
$output = $ms->getChunk(\'modShopifyProductMultipassLink\', array(link => $link));
return $output;
}
';