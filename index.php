<?php 

$data = json_decode(file_get_contents('data/data.json'));

$productIdList  = array_map(function($p){ return $p->id; },$data->arrayOfProducts);
$attributeNames = array_map(function($p){ return array_map(function($a){ return $a->name; },$p->attribute); },$data->arrayOfProducts);
$productPriceList = array_map(function($p){ return $p->price; }, $data->arrayOfProducts);



echo '<pre>';
echo "product id list array: ";
print_r($productIdList);
echo "\r\n";

echo "product attribute names: ";
print_r($attributeNames);
echo "\r\n";

echo "product price list: ";
print_r($productPriceList);
echo "\r\n";

echo "all price sum: ". array_sum($productPriceList);
echo "\r\n";

echo "product id list: ". implode(",", $productIdList);

echo "\r\n";
echo "array product id list before array_flip using: ";
print_r($productIdList);

echo "\r\n";
echo "array product id list after array_flip using: ";
$flipProductIdList = array_flip($productIdList);
print_r($flipProductIdList);




// print_r($data);
echo '</pre>';


// class Sample {

// }


?>