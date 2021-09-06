<?php

$dir = new DirectoryIterator('common/images');

foreach ($dir as $file) {
    if ($file->isFile()) {
        echo '<br>___<br><br>';

        echo $file->getBasename() . '<br>';
        echo $file->getExtension() . '<br>';
        echo $file->getFilename() . '<br>';
        echo $file->getLinkTarget() . '<br>';
        echo $file->getPath() . '<br>';
        echo $file->getPathname() . '<br>';

        echo '<br>___<br><br>';
    }
}