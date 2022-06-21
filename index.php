<?php
$filename= "new.txt";
$f=fopen($filename, "r");
$files= filesize($filename);
$fr=fread($f,$files);
fclose($f);