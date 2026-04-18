<?php
$arr=array("name"=>"parvez","age"=>20);
$result=array_change_key_case($arr,CASE_LOWER);
print_r($result);
?>