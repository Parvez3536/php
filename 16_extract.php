<?php
$arr=array("name"=>"Parvez","age"=>20);
extract($arr);
echo $name . "<br>";
echo $age;
?>