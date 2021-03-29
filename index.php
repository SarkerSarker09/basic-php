<?php 

$data = json_decode(file_get_contents('data/data.json'));

$productIdList  = array_map(function($p){ return $p->id; },$data->arrayOfProducts);
$attributeNames = array_map(function($p){ return array_map(function($a){ return $a->name; },$p->attribute); },$data->arrayOfProducts);
$productPriceList = array_map(function($p){ return $p->price; }, $data->arrayOfProducts);

// print_r($productIdList);
// print_r($attributeNames);
print_r($productPriceList);

echo array_sum($productPriceList);

echo '<pre>';
// print_r($data);
echo '</pre>';
// class Sample {

// }


?>