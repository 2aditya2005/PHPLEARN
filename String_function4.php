<?php
$name = "Aditya";
echo $name;
echo "<br>";
//lenth of string
echo "the length of" . "my string is" . strlen($name);
echo "<br>";
//word count
echo str_word_count($name);
echo "<br>";
// reverse of string
echo strrev($name);
// position of latter,word
echo "<br>";
echo strpos($name,"a");
echo "<br>";
//repalce of string word,letter
echo str_replace("A","V",$name);

echo "<br>";
//repeat the string
echo str_repeat($name,4);
echo "<br>";

echo rtrim("          this is a good boy        ");
echo "<br>";
echo ltrim("          this is a good boy          ");
echo "</pre>";


?>
