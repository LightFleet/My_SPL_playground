<?php

$csvFile = new SplFileObject('common/data/cars.csv');

$csvFile->setFlags(SplFileObject::READ_CSV);
foreach ($csvFile as $line){
    $cars[] = $line;
}

echo '<pre>';
print_r($cars);
echo '</pre>';
