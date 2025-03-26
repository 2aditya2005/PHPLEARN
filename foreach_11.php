<?php
//  foreach loops

echo "welcome to the world of foreach loops <br>";
$arr = array("bananas","apples","Harpic","Bread");


/*for ($i=0; $i < count($arr); $i++){
    echo $arr[$i];
    echo "<br>";

}*/

foreach($arr as $value){
    echo "$value <br>";

}
?>