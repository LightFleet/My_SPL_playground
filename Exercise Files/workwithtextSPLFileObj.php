<?php

$docs = new FilesystemIterator('common/documents', FilesystemIterator::UNIX_PATHS);

foreach ($docs as $doc) {
    if($doc->getExtension() == 'txt'){
        $textfile = $doc->openFile();
        $textfile->setFlags(SplFileObject::SKIP_EMPTY | SplFileObject::READ_AHEAD | SplFileObject::DROP_NEW_LINE);

        echo '<h2>' . $textfile->getFilename() . '</h2>';

        foreach ($textfile as $line) {
            echo "$line<br>";
        }

        $textfile->seek(4);
        echo $textfile->current();
    }
}