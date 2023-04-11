<?php
header("Access-Control-Allow-Origin: *");

$phones = array(
  array(
    "brand" => "Samsung",
    "model" => "Galaxy S20",
    "price" => "₱30,990",
    "release_year" => "2020",
    "specifications" => array(
      "display" => "6.2 inch Dynamic AMOLED, 3200 x 1440 pixels",
      "processor" => "Qualcomm Snapdragon 865",
      "memory" => "128GB or 512GB",
      "camera" => "12MP wide, 12MP ultra wide, and 64MP telephoto cameras, 8K video recording",
      "battery" => "4000 mAh",
      "image" => 
    )
  ),
  array(
    "brand" => "Apple",
    "model" => "iPhone 11",
    "price" => "₱47,990",
    "release_year" => "2019",
    "specifications" => array(
      "display" => "6.1 inch Liquid Retina HD, 1792 x 828 pixels",
      "processor" => "Apple A13 Bionic",
      "memory" => "64GB, 128GB, or 256GB",
      "camera" => "Dual 12MP ultra wide and wide cameras, 4K video recording",
      "battery" => "3110 mAh",
      "image" => 
  ),
  array(
    "brand" => "Google",
    "model" => "Pixel 4",
    "price" => "₱34,990",
    "release_year" => "2019",
    "specifications" => array(
      "display" => "5.7 inch P-OLED, 2280 x 1080 pixels",
      "processor" => "Qualcomm Snapdragon 855",
      "memory" => "64GB or 128GB",
      "camera" => "12.2MP dual-pixel camera, 4K video recording",
      "battery" => "2800 mAh",
      "image" => 
    )
  ),
  array(
    "brand" => "OnePlus",
    "model" => "9",
    "price" => "₱38,990",
    "release_year" => "2021",
    "specifications" => array(
      "display" => "6.55 inch Fluid AMOLED, 2400 x 1080 pixels",
      "processor" => "Qualcomm Snapdragon 888",
      "memory" => "128GB or 256GB",
      "camera" => array(
        "type" => "Triple camera system",
        "features" => "48MP main camera, 50MP ultra wide, 2MP monochrome",
        "video" => "8K video recording"
      ),
      "battery" => "4500 mAh",
      "image" => 
    )
  )
);

echo json_encode($phones);
?>