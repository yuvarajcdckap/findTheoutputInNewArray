<?php
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);


$first=[];
foreach($keys as $val){
    array_push($first,$val);
}
$second=[];
foreach($values as $val2){
    array_push($second,$val2);
}

$keysAndValues=[];
for ($i=0; $i <count($first) ; $i++) { 
  
    $keysAndValues[$first[$i]]=$second[$i];
}
print_r($keysAndValues);

