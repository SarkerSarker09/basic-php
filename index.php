<?php 

$data = json_decode(file_get_contents('data/data.json'));

$productIdList  = array_map(function($p){ return $p->id; },$data->arrayOfProducts);
$attributeNames = array_map(function($p){ return array_map(function($a){ return $a->name; },$p->attribute); },$data->arrayOfProducts);
$productPriceList = array_map(function($p){ return $p->price; }, $data->arrayOfProducts);

echo '<pre>';
print_r($productIdList);
echo "\r\n";

print_r($attributeNames);
echo "\r\n";

print_r($productPriceList);
echo "\r\n";

echo array_sum($productPriceList);
echo "\r\n";

echo implode(",", $productIdList);


// print_r($data);
echo '</pre>';
// class Sample {

// }


?>