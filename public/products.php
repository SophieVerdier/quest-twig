<?php

require_once __DIR__ . '/../config/twig.php';

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];

echo $twig->render('products.html.twig', array(
    'instrument' => 'guitare',
    'products' => ['guitare','bass','bonjo'],
    'products2' => ['cithare','lyre','harpe']
    )
);