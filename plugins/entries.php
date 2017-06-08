<?php
$dataFileName = getcwd() . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . 'mydata.txt';
$count = file_exists($dataFileName) ? COUNT(FILE($dataFileName)) : 0;

echo $count;
