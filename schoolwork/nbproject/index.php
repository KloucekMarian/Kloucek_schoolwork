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
echo "<hr>";

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

$MarianKloucek1 = 1;
$MarianKloucek2 = 5;
if($MarianKloucek1==5){
    echo "you're dump ass";
} else {
    echo 'Marian Kloucek';
}
echo "<br>";
if($MarianKloucek2>3){
    echo 'Marian';
}elseif ($MarianKloucek2<3) {
    echo 'Kloucek';
} else {
    echo '3';
}
echo "<br>";
if($MarianKloucek1=1){
    if($MarianKloucek2<=5){
        echo 'Marian Kloucek';
    }
} else {
    echo 'nothing';
}
echo "<hr>";
     
 $student = array('Jerry' => array('Class' => '3rd', 'Credit' => 320),
                  'Rychard' => array('Class' => '1st', 'Credit' => 140),
                  'Danny' => array('Class' => '4th', 'Credit' => 420),
                  'Garry' => array('Class' => '2nd', 'Credit' => 225),
                  'Sam' => array('Class' => '2nd', 'Credit' => 278),
                  'Rapunzel' => array('Class' => '1st', 'Credit' => 165));

 echo "<table border='1'>";
     echo "<thead><b><th>Name</th><th>Class</th><th>Credits</th></b></thead>";
     
     foreach ($student as $name => $info) {
         echo "<tr><td>$name</td>";
         foreach ($info as $type => $value) {
                      echo "<td>$value</td>";
     }
         echo "</tr>";
    }
?>
