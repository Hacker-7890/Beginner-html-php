<?php
echo sys_get_temp_dir();
echo sleep(1);

$dir= sys_get_temp_dir();

$filesw= scandir($dir);

foreach($filesw as $file){
echo("<p>"."$file"."</p>"."<br>");
};
?>
