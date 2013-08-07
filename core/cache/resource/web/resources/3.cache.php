<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 3,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Member Dashboard',
    'longtitle' => '',
    'description' => '',
    'alias' => '',
    'link_attributes' => '',
    'published' => 0,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<h1>Member Dashboard</h1>


[[getMultipassAddToCart]]

[[getProducts]]


<a href="[[~1? &service=`logout`]]" title="Logout">Logout</a>',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 2,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1374523590,
    'editedby' => 1,
    'editedon' => 1374528048,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'mobile_template' => 
    array (
      0 => 'mobile_template',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    '_content' => '<html>
<head>
<title>MODX Revolution - Member Dashboard</title>
<base href="http://localhost:5000/ediets-live/" />
</head>
<body>
<h1>Member Dashboard</h1>


<a href="https://ediets.myshopify.com/account/login/multipass/rCZOCdl%2FZKqfCvyL78jwhsH9Dxyxdin846AlY2nEccLydv5f%2FoElDePN4e5TqchwGzryj%2FlAUb%2But5ptrvgwZaIy%2FNw2iQC6hT%2FtuIdvLFDJKsmH%2FZvh2uHDHivTLPrdLuwkZmOv9zGLPzjNdQGlG91Ug9mefE4HTk6mijCEc6vGVu1LRdUT5LCtXKIfya%2FwVLFcnrs27Nwjb1U7E5BLSMi9LQH%2F5Y5GqWiXWbAUhfqMBX9N%2F6E9H5BwKxW5VPTk">Multipass Link</a>


<h2>Products</h2>
<ul class="products">
  <li>
  <span class="vendor">eDiets Diet Plans</span> &ndash; <span class="title">eDiets Weight Loss Plan (TEST)</span>
  <div class="description">
    <p>eDiets Weight Loss Plan</p>
  </div>
  [[+images:notempty=`<div class="images">[[+images]]</div>`]]
  <form action="https://ediets.myshopify.com/cart/add" method="post" target="_blank">
    <select name="id"><option value="340855007">every 1 month - $9.95</option>
</select>
    <input type="submit" name="add" value="Buy" />
  </form>
</li>
<li>
  <span class="vendor">Bronson</span> &ndash; <span class="title">HM Chocolate Bar</span>
  <div class="description">
    <p>Delicious chocolate bar... Holly\'s favorite snack!</p>
  </div>
  <div class="images"><img src="http://cdn.shopify.com/s/files/1/0248/9734/products/rasins_on_tray_flowers.jpg?14" alt="HM Chocolate Bar" />
</div>
  <form action="https://ediets.myshopify.com/cart/add" method="post" target="_blank">
    <select name="id"><option value="338074592">HM Chocolate Bar - $6.99</option>
</select>
    <input type="submit" name="add" value="Buy" />
  </form>
</li>
<li>
  <span class="vendor">eDiets</span> &ndash; <span class="title">Holly Madison Diet Plan</span>
  <div class="description">
    <p>Lose weight the Hollywood\'s way!&nbsp;</p>
  </div>
  <div class="images"><img src="http://cdn.shopify.com/s/files/1/0248/9734/products/2390-692-lrg.jpg?14" alt="Holly Madison Diet Plan" />
</div>
  <form action="https://ediets.myshopify.com/cart/add" method="post" target="_blank">
    <select name="id"><option value="335423322">HM Diet Plan - $9.95</option>
</select>
    <input type="submit" name="add" value="Buy" />
  </form>
</li>

</ul>



<a href="index.php?id=1&amp;service=logout" title="Logout">Logout</a>
</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'resourceGroups' => 
  array (
    1 => 
    array (
      'id' => 1,
      'document_group' => 1,
      'document' => 3,
    ),
  ),
  'policyCache' => 
  array (
    'modAccessResourceGroup' => 
    array (
      1 => 
      array (
        0 => 
        array (
          'principal' => '1',
          'authority' => '9999',
          'policy' => 
          array (
            'add_children' => true,
            'create' => true,
            'copy' => true,
            'delete' => true,
            'list' => true,
            'load' => true,
            'move' => true,
            'publish' => true,
            'remove' => true,
            'save' => true,
            'steal_lock' => true,
            'undelete' => true,
            'unpublish' => true,
            'view' => true,
          ),
        ),
        1 => 
        array (
          'principal' => '2',
          'authority' => '9999',
          'policy' => 
          array (
            'add_children' => true,
            'create' => true,
            'copy' => true,
            'delete' => true,
            'list' => true,
            'load' => true,
            'move' => true,
            'publish' => true,
            'remove' => true,
            'save' => true,
            'steal_lock' => true,
            'undelete' => true,
            'unpublish' => true,
            'view' => true,
          ),
        ),
      ),
    ),
  ),
  'elementCache' => 
  array (
    '[[*pagetitle]]' => 'Member Dashboard',
    '[[getMultipassAddToCart]]' => '<a href="https://ediets.myshopify.com/account/login/multipass/rCZOCdl%2FZKqfCvyL78jwhsH9Dxyxdin846AlY2nEccLydv5f%2FoElDePN4e5TqchwGzryj%2FlAUb%2But5ptrvgwZaIy%2FNw2iQC6hT%2FtuIdvLFDJKsmH%2FZvh2uHDHivTLPrdLuwkZmOv9zGLPzjNdQGlG91Ug9mefE4HTk6mijCEc6vGVu1LRdUT5LCtXKIfya%2FwVLFcnrs27Nwjb1U7E5BLSMi9LQH%2F5Y5GqWiXWbAUhfqMBX9N%2F6E9H5BwKxW5VPTk">Multipass Link</a>
',
    '[[getProducts]]' => '<h2>Products</h2>
<ul class="products">
  <li>
  <span class="vendor">eDiets Diet Plans</span> &ndash; <span class="title">eDiets Weight Loss Plan (TEST)</span>
  <div class="description">
    <p>eDiets Weight Loss Plan</p>
  </div>
  [[+images:notempty=`<div class="images">[[+images]]</div>`]]
  <form action="https://ediets.myshopify.com/cart/add" method="post" target="_blank">
    <select name="id"><option value="340855007">every 1 month - $9.95</option>
</select>
    <input type="submit" name="add" value="Buy" />
  </form>
</li>
<li>
  <span class="vendor">Bronson</span> &ndash; <span class="title">HM Chocolate Bar</span>
  <div class="description">
    <p>Delicious chocolate bar... Holly\'s favorite snack!</p>
  </div>
  <div class="images"><img src="http://cdn.shopify.com/s/files/1/0248/9734/products/rasins_on_tray_flowers.jpg?14" alt="HM Chocolate Bar" />
</div>
  <form action="https://ediets.myshopify.com/cart/add" method="post" target="_blank">
    <select name="id"><option value="338074592">HM Chocolate Bar - $6.99</option>
</select>
    <input type="submit" name="add" value="Buy" />
  </form>
</li>
<li>
  <span class="vendor">eDiets</span> &ndash; <span class="title">Holly Madison Diet Plan</span>
  <div class="description">
    <p>Lose weight the Hollywood\'s way!&nbsp;</p>
  </div>
  <div class="images"><img src="http://cdn.shopify.com/s/files/1/0248/9734/products/2390-692-lrg.jpg?14" alt="Holly Madison Diet Plan" />
</div>
  <form action="https://ediets.myshopify.com/cart/add" method="post" target="_blank">
    <select name="id"><option value="335423322">HM Diet Plan - $9.95</option>
</select>
    <input type="submit" name="add" value="Buy" />
  </form>
</li>

</ul>
',
    '[[~1? &service=`logout`]]' => 'index.php?id=1&amp;service=logout',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
    ),
    'modSnippet' => 
    array (
      'getMultipassAddToCart' => 
      array (
        'fields' => 
        array (
          'id' => 13,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'getMultipassAddToCart',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => 'xdebug_break();

$store_link=\'https://ediets.myshopify.com\';
$return_to = isset($return_to) ? (string) $return_to : $store_link.\'/cart/338074592:1\';

$path = $modx->getOption(\'modshopify.core_path\', $config, $modx->getOption(\'core_path\').\'components/modshopify/\');
$ms = $modx->getService(\'modshopify\', \'ModShopify\', $path . \'model/\', $scriptProperties);
$token = $ms->getMultipassLogin($return_to);

error_log($token);

$link = $store_link.\'/account/login/multipass/\'.$token;
$output = $ms->getChunk(\'modShopifyProductMultipassLink\', array(link => $link));
return $output;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => true,
          'static_file' => 'core/components/modshopify/elements/snippets/getMultipassToken.snippet.php',
          'content' => 'xdebug_break();

$store_link=\'https://ediets.myshopify.com\';
$return_to = isset($return_to) ? (string) $return_to : $store_link.\'/cart/338074592:1\';

$path = $modx->getOption(\'modshopify.core_path\', $config, $modx->getOption(\'core_path\').\'components/modshopify/\');
$ms = $modx->getService(\'modshopify\', \'ModShopify\', $path . \'model/\', $scriptProperties);
$token = $ms->getMultipassLogin($return_to);

error_log($token);

$link = $store_link.\'/account/login/multipass/\'.$token;
$output = $ms->getChunk(\'modShopifyProductMultipassLink\', array(link => $link));
return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'getProducts' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'getProducts',
          'description' => 'Get a list of all products',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '$defaults = array(  
  \'limit\' => 50,
  \'page\' => 1,
  \'published_status\' => \'published\',
  
  \'containerTpl\' => \'modshopifyOuterTpl\',
  \'productTpl\' => \'modshopifyProductTpl\',
  \'productImgTpl\' => \'modshopifyProductImgTpl\',
  \'productVariantTpl\' => \'modshopifyProductVariantTpl\',
  
  \'thumbsWidth\' => 200,
  \'thumbsHeight\' => 200,
  \'thumbsArgs\' => \'&zc=1\'
);

$scriptProperties = array_merge($defaults,$scriptProperties);
$scriptProperties[\'thumbs_options\'] = "";
if (!empty($scriptProperties[\'thumbsWidth\'])) $scriptProperties[\'thumbs_options\'] .= "&w=" . $scriptProperties[\'thumbsWidth\'];
if (!empty($scriptProperties[\'thumbsHeight\'])) $scriptProperties[\'thumbs_options\'] .= "&h=" . $scriptProperties[\'thumbsHeight\'];
$scriptProperties[\'thumbs_options\'] .= $scriptProperties[\'thumbsArgs\'];
unset($scriptProperties[\'thumbsWidth\'], $scriptProperties[\'thumbsHeight\'], $scriptProperties[\'thumbsArgs\']);

$path = $modx->getOption(\'modshopify.core_path\', $config, $modx->getOption(\'core_path\').\'components/modshopify/\');
$ms = $modx->getService(\'modshopify\', \'ModShopify\', $path . \'model/\', $scriptProperties);

$output = array();
$shop = $ms->getShop();
if(empty($shop)) return;

$products = $ms->getProducts();
if(empty($products)) return;

foreach ($products as $product) {
  $variants = array();
  foreach ($product[\'variants\'] as $variant) {
    $variant[\'price\'] = preg_replace(\'/{{.*}}/\', $variant[\'price\'], $shop[\'money_format\']);
    $variants[] = $ms->getChunk($scriptProperties[\'productVariantTpl\'], $variant);

  }
  $product[\'variants\'] = implode($scriptProperties[\'variantSeparator\'], $variants);
  if (!empty($product[\'images\'])) {
    $images = array();
    foreach ($product[\'images\'] as $image) {
      $image[\'alt\'] = trim($product[\'title\'], "\'\\"");
      $images[] = $ms->getChunk($scriptProperties[\'productImgTpl\'], $image);
    }
    $product[\'images\'] = implode($scriptProperties[\'imageSeparator\'], $images);
  } else {
    unset ($product[\'images\']);
  }
  $product = array_merge(
    $product,
    array(
      \'domain\' => $shop[\'domain\']
    )
  );
  $output[] = $ms->getChunk($scriptProperties[\'productTpl\'], $product);
}
$output = implode($scriptProperties[\'productSeparator\'], $output);

$output = $ms->getChunk($scriptProperties[\'containerTpl\'], array(products => $output));

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'containerTpl' => 
            array (
              'name' => 'containerTpl',
              'desc' => 'modshopify.prop_desc.containerTpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'modshopifyOuterTpl',
              'lexicon' => 'modshopify:properties',
              'area' => '',
              'desc_trans' => 'modshopify.prop_desc.containerTpl',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'modshopify.prop_desc.limit',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '50',
              'lexicon' => 'modshopify:properties',
              'area' => '',
              'desc_trans' => 'modshopify.prop_desc.limit',
              'area_trans' => '',
            ),
            'page' => 
            array (
              'name' => 'page',
              'desc' => 'modshopify.prop_desc.page',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'modshopify:properties',
              'area' => '',
              'desc_trans' => 'modshopify.prop_desc.page',
              'area_trans' => '',
            ),
            'productImgTpl' => 
            array (
              'name' => 'productImgTpl',
              'desc' => 'modshopify.prop_desc.productImgTpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'modshopifyProductImgTpl',
              'lexicon' => 'modshopify:properties',
              'area' => '',
              'desc_trans' => 'modshopify.prop_desc.productImgTpl',
              'area_trans' => '',
            ),
            'productTpl' => 
            array (
              'name' => 'productTpl',
              'desc' => 'modshopify.prop_desc.productTpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'modshopifyProductTpl',
              'lexicon' => 'modshopify:properties',
              'area' => '',
              'desc_trans' => 'modshopify.prop_desc.productTpl',
              'area_trans' => '',
            ),
            'productVariantTpl' => 
            array (
              'name' => 'productVariantTpl',
              'desc' => 'modshopify.prop_desc.productVariantTpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'modshopifyProductVariantTpl',
              'lexicon' => 'modshopify:properties',
              'area' => '',
              'desc_trans' => 'modshopify.prop_desc.productVariantTpl',
              'area_trans' => '',
            ),
            'published_status' => 
            array (
              'name' => 'published_status',
              'desc' => 'modshopify.prop_desc.published_status',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'published',
              'lexicon' => 'modshopify:properties',
              'area' => '',
              'desc_trans' => 'modshopify.prop_desc.published_status',
              'area_trans' => '',
            ),
            'thumbsArgs' => 
            array (
              'name' => 'thumbsArgs',
              'desc' => 'modshopify.prop_desc.thumbsArgs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '&zc=1',
              'lexicon' => 'modshopify:properties',
              'area' => '',
              'desc_trans' => 'modshopify.prop_desc.thumbsArgs',
              'area_trans' => '',
            ),
            'thumbsHeight' => 
            array (
              'name' => 'thumbsHeight',
              'desc' => 'modshopify.prop_desc.thumbsHeight',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 200,
              'lexicon' => 'modshopify:properties',
              'area' => '',
              'desc_trans' => 'modshopify.prop_desc.thumbsHeight',
              'area_trans' => '',
            ),
            'thumbsWidth' => 
            array (
              'name' => 'thumbsWidth',
              'desc' => 'modshopify.prop_desc.thumbsWidth',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 200,
              'lexicon' => 'modshopify:properties',
              'area' => '',
              'desc_trans' => 'modshopify.prop_desc.thumbsWidth',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => true,
          'static_file' => 'core/components/modshopify/elements/snippets/getProducts.snippet.php',
          'content' => '$defaults = array(  
  \'limit\' => 50,
  \'page\' => 1,
  \'published_status\' => \'published\',
  
  \'containerTpl\' => \'modshopifyOuterTpl\',
  \'productTpl\' => \'modshopifyProductTpl\',
  \'productImgTpl\' => \'modshopifyProductImgTpl\',
  \'productVariantTpl\' => \'modshopifyProductVariantTpl\',
  
  \'thumbsWidth\' => 200,
  \'thumbsHeight\' => 200,
  \'thumbsArgs\' => \'&zc=1\'
);

$scriptProperties = array_merge($defaults,$scriptProperties);
$scriptProperties[\'thumbs_options\'] = "";
if (!empty($scriptProperties[\'thumbsWidth\'])) $scriptProperties[\'thumbs_options\'] .= "&w=" . $scriptProperties[\'thumbsWidth\'];
if (!empty($scriptProperties[\'thumbsHeight\'])) $scriptProperties[\'thumbs_options\'] .= "&h=" . $scriptProperties[\'thumbsHeight\'];
$scriptProperties[\'thumbs_options\'] .= $scriptProperties[\'thumbsArgs\'];
unset($scriptProperties[\'thumbsWidth\'], $scriptProperties[\'thumbsHeight\'], $scriptProperties[\'thumbsArgs\']);

$path = $modx->getOption(\'modshopify.core_path\', $config, $modx->getOption(\'core_path\').\'components/modshopify/\');
$ms = $modx->getService(\'modshopify\', \'ModShopify\', $path . \'model/\', $scriptProperties);

$output = array();
$shop = $ms->getShop();
if(empty($shop)) return;

$products = $ms->getProducts();
if(empty($products)) return;

foreach ($products as $product) {
  $variants = array();
  foreach ($product[\'variants\'] as $variant) {
    $variant[\'price\'] = preg_replace(\'/{{.*}}/\', $variant[\'price\'], $shop[\'money_format\']);
    $variants[] = $ms->getChunk($scriptProperties[\'productVariantTpl\'], $variant);

  }
  $product[\'variants\'] = implode($scriptProperties[\'variantSeparator\'], $variants);
  if (!empty($product[\'images\'])) {
    $images = array();
    foreach ($product[\'images\'] as $image) {
      $image[\'alt\'] = trim($product[\'title\'], "\'\\"");
      $images[] = $ms->getChunk($scriptProperties[\'productImgTpl\'], $image);
    }
    $product[\'images\'] = implode($scriptProperties[\'imageSeparator\'], $images);
  } else {
    unset ($product[\'images\']);
  }
  $product = array_merge(
    $product,
    array(
      \'domain\' => $shop[\'domain\']
    )
  );
  $output[] = $ms->getChunk($scriptProperties[\'productTpl\'], $product);
}
$output = implode($scriptProperties[\'productSeparator\'], $output);

$output = $ms->getChunk($scriptProperties[\'containerTpl\'], array(products => $output));

return $output;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
      'mobile_template' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'mobile_template',
          'caption' => '',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'maxLength' => '',
            'minLength' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);