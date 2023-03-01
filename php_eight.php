

<?php

    // ======== switch case ===========
    $num = 30;
    $obj = match(true){
        $num >= 35 => "three" ,
        $num >= 30 => "two" ,
        $num >= 23 => "one" ,
        default => 'none'
    };
    echo "switch-case \r\n";
    print_r($obj);
    echo "\r\n";
    
    
    
    // ======= multiple constants =========
    $arr = [1,2,3,4,5,6];
    define('VARRIABLES', $arr);
    echo "constants \r\n";
    print_r(VARRIABLES);
    echo "\r\n";
    
    
    // ========== template string ========
    echo "Template String: {$obj}";
    
    
    
    
    // enum example 
    enum Method: string
    {
        case GET = 'GET';
        case POST = 'POST';
        case PUT = 'PUT';
        case PATCH = 'PATCH';
        case DELETE = 'DELETE';
    }
    
    echo Method::GET->value;
    
    
    

?>
