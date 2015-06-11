<?php
function stats(array $values){
$results=["min"=>($values),"max"=>max($values),
"average"=>array_sum($values)/count($values)];
return $results;

}
$values=[5,8,9];
$results=stats($values);
var_dump($result);
//Return more than one result
