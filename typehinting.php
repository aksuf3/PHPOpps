<?php
function fruits(array $names){
    foreach($names as $name){
echo $name. "<br>";
    }
}
$test=["Apple","Orange","Banana"];
fruits($test);
?>