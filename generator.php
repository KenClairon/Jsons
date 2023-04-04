<?php
header('Access-Control-Allow-Origin: *');
$ice_creams = array(
    array(
        "name" => "Chocolate,",
        "brand" => "Baskin Robbins",
        "location" => "USA",
        "price" => "$5",
        "nutrition" => array("Calories" => "33", "fat" => "15", "saturated" => "8g", "cholesterol" => "12g", "sodium" => "50mg")
       
    ),

    array(
        "name" => "Classic Vanilla",
        "brand" => "Bourbon Vanilla",
        "location" => "USA",
        "price" => "$24",
        "nutrition" => array("Calories" => "3.3g", "fat" => "2.3g", "saturated" => "2.1", "cholesterol" => "12g", "sodium" => "50mg")
      
    ),

    array(
        "name" => "Butter pecan",
        "brand" => "Haagen dazs",
        "location" => "USA",
        "price" => "13",
        "nutrition" => array("Calories" => "244", "fat" => "18%", "saturated" => "35%", "cholesterol" => "25mg%", "sodium" => "115mg")
     
    ),

    array(
        "name" => "Classic Chocolate",
        "brand" => "Nestle",
        "location" => "USA",
        "price" => "$24",
        "nutrition" => array("Calories" => "110g", "fat" => "12g", "saturated" => "15mg", "cholesterol" => "120cal", "sodium" => "50mg")
     
    ),

    array(
        "name" => "Classic Vanilla",
        "brand" => "Tillamok",
        "location" => "USA",
        "price" => "$8",
        "nutrition" => array("Calories" => "120calg", "fat" => "12g", "saturated" => "95%", "cholesterol" => "110cal", "sodium" => "50mg")
    ),
);

echo json_encode(array("ice_creams" => $ice_creams));
?>