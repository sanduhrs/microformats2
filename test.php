#!/usr/bin/env php
<?php

namespace microformats2;

require __DIR__ . '/vendor/autoload.php';

use Mf2;

$mf = Mf2\fetch('http://vinculum.d/user/1');

//foreach ($mf['items'] as $microformat) {
//  echo "A {$microformat['type'][0]} called {$microformat['properties']['name'][0]}\n";
//}

//print print_r($mf['items'], TRUE);
print json_encode($mf['items'], JSON_PRETTY_PRINT);
