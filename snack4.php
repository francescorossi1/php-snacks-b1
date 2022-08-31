<?php
$numbers = [];

while(count($numbers) < 15){
    $random_number = rand(1,100);
    if(!in_array($random_number,$numbers))$numbers[] = $random_number;
};


echo var_dump($numbers);
?>
