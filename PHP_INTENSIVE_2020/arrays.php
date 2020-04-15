<?php
//echo("Arrays.php");

//$title_1 = "IP"

//$products = ["iPhone XR", "MacBook", "Apple Watch", "iMac",
//"MacBook Air"];



//for ($i=0; $i < count ($products); $i++) {
// echo ($products[$i]. "<br");
//}

/*echo ("<ol>");

foreach ($products as $item ) {
   echo("<li>$item. </li>");
}
echo ("</ol>");*/
$iphone = [
   "title" => "iPhone XR",
   "price" => 48000,
   "description" => "Телефон"
];

$iPad = [
   "title" => "iPad",
   "price" => 32000,
   "description" => "Планшет"
];

$macBook = [
   "title" => "MacBook PRO",
   "price" => 132000,
   "description" => "Телефон"
];

$products = [$iphone, $iPad, $macBook];

echo ("<pre>");
//print_r($products);
//echo("</pre>");*/

foreach ($products as $product) {
   echo ("<ul>");
   foreach ($product as $key => $value) {
      echo ("<li>$key => $value</li>");
   }
   echo ("</ul>");
}
