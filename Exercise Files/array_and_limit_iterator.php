<?php

$langs = ['test', 'ru', 'en', 'uk'];

$langs = new ArrayIterator($langs);

$langs = new LimitIterator($langs, 2, 3);

foreach ($langs as $lang) {
    echo $lang . '<br>';
}