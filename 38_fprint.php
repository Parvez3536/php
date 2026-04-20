<?php
$file =fopen("file.txt","w");
fprintf($file,"hello file");
fclose($file);
?>