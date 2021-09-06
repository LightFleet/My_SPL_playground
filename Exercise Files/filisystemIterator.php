<?php
//$dir = new FilesystemIterator('common/images', FilesystemIterator::UNIX_PATHS);
$dir = new FilesystemIterator('common/images');

$dir->setFlags(FilesystemIterator::UNIX_PATHS | FilesystemIterator::KEY_AS_FILENAME);

foreach ($dir as $key => $file) {
    echo $key . ' >> ' . $file . '<br>';
    $files[] = $file;
}

echo $files[2];
