<?php
$food = 'burger';
$amount = 6;
$price = 3.623;
$fullprice = $price * $amount;
if ($amount>1){
     print "I ate $amount $food's.<br>";
} else {
    print "I ate $amount $food.<br>";
}
printf("one $food cost %5.2f\$.<br>", $price);
printf ("So i had to pay %5.2f\$.<br>", $fullprice);

if ($amount>1){
     echo "The $food's was delicious.";
} else {
     echo "The $food was delicious.";
}

//vkladani obrazku pomoci funkce
function img($url, $alt= null, $heit=null, $width= null){
    $html = '<img src="' . $url . '"';
    if (isset($alt)){
        $html .= ' alt="' . $alt . '"';
    }
    if (isset($heit)){
        $html .= ' heit="' . $heit . '"';
    }
    if (isset($width)){
        $html .= ' width="' . $width . '"';
    }
    $html .= '/>';
    return $html;
}

?>
