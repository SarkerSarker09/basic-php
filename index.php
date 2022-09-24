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


    protected function getLastId() {
        if (Product::count() == 0) {
            return 0;
        } else 
            return  Product::max('product_id');
    }

   $l =  str_pad( $this->getLastId() + 1 , 7, "0", STR_PAD_LEFT )  ; 



   protected function hook() {
        try {
            $url = "https://jsonplaceholder.typicode.com/todos";
            $ch = curl_init();            
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);            
            curl_setopt($ch, CURLOPT_URL,$url);
            $result=curl_exec($ch);
            curl_close($ch);
            
            // Print the return data
            print_r(json_decode($result, true));
        } catch(\Exception $ex) {
            echo $ex->getMessage();
        }
    }






?>
