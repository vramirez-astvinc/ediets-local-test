<?php
xdebug_break();

$postdata = file_get_contents("php://input");

error_log($postdata);


if(!empty($postdata)){

    //error_log('Postdata '. date('m-d-y') . '-' . time() .':'.$postdata);

    if (!is_dir("webhooks/")) {    
        mkdir("webhooks/");
    }

    file_put_contents('webhooks/order-' . date('m-d-y') . '-' . time() . '.xml', $postdata, FILE_APPEND);


    // Use SimpleXML to get name, email, and product titles
    // SimpleXML allows you to use the $xml object to easily
    // retrieve the data ...
    // Please note, if hyphens are used in the xml node, you must
    // surround the call to that member with {'member-name'} as is
    // shown below when getting the billing-address name & the
    // line items
//    $xml = new SimpleXMLElement($postdata);
//
//    $name = trim($xml->{'billing-address'}->name);
//    $email = trim($xml->email);
//
//    $productTitles = array();
//    // Create productTitles array with titles from products
//    foreach ($xml->{'line-items'}->{'line-item'} as $lineItem) {
//      array_push($productTitles, trim($lineItem->title));
//      //error_log('Products: '.trim($lineItem->title));
//    }


    // Once you are done doing what you need to do, let Shopify know you have 
    // the data and all is well!
//    header('HTTP/1.0 200 OK');
//    exit();
    


}else{

    // If you want to tell Shopify to try sending the data again, i.e. something
    // failed with your processing and you want to try again later
//    header('HTTP/1.0 400 Bad request');
//    exit();
}