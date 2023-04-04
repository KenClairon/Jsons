<?php
header('Access-Control-Allow-Origin: *');
$ice_creams = array(
    array(
        "name" => "Chocolate",
        "brand" => "Baskin Robbins",
        "location" => "USA",
        "price" => "$5",
        "nutrition" => array("Calories" => "33", "fat" => "15", "saturated" => "8g", "cholesterol" => "12g", "sodium" => "50mg"),
        "image" => "https://www.havmor.com/sites/default/files/styles/502x375/public/gallery/Dark%20chocolate%20cone_0.webp"
    ),

    array(
        "name" => "Classic Vanilla",
        "brand" => "Bourbon Vanilla",
        "location" => "USA",
        "price" => "$24",
        "nutrition" => array("Calories" => "3.3g", "fat" => "2.3g", "saturated" => "2.1", "cholesterol" => "12g", "sodium" => "50mg"),
        "image" => "https://connoisseuricecream.com.au/wp-content/uploads/2021/06/classic-vanilla-tub.png"
    ),

    array(
        "name" => "Butter pecan",
        "brand" => "Haagen dazs",
        "location" => "USA",
        "price" => "13",
        "nutrition" => array("Calories" => "244", "fat" => "18%", "saturated" => "35%", "cholesterol" => "25mg%", "sodium" => "115mg"),
        "image" => "http://www.icecream.com/content/dam/dreyersgrandicecreaminc/us/en/haagen-dazs/products/pints/haagen-dazs-butter-pecan-ice-cream-pint-1500x1140.png"
    ),

    array(
        "name" => "Classic Chocolate",
        "brand" => "Nestle",
        "location" => "USA",
        "price" => "$24",
        "nutrition" => array("Calories" => "110g", "fat" => "12g", "saturated" => "15mg", "cholesterol" => "120cal", "sodium" => "50mg"),
        "image" => "https://cdn.shopify.com/s/files/1/0260/6877/9066/products/454615_b92adb32-5624-4828-b6b5-90b82d0281f4_700x700.jpg?v=1647010418"
    ),

    array(
        "name" => "Vanilla Oreo",
        "brand" => "Tillamok",
        "location" => "USA",
        "price" => "$8",
        "nutrition" => array("Calories" => "120calg", "fat" => "12g", "saturated" => "95%", "cholesterol" => "110cal", "sodium" => "50mg"),
        "image" => "https://d2t3trus7wwxyy.cloudfront.net/catalog/product/cache/d166c7ea81ddc4172de536322110c911/o/r/oreo_golden_vanilla_sandwhich_28.5g_9_s_front.jpg"
    ),
);

echo json_encode(array("ice_creams" => $ice_creams));
?>