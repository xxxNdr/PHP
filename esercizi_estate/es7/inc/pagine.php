<?php


$pagina = [
    'homepage' => [
        'body' => [
            'titolo' => 'Calcola distanza tragitto',
        ],
        'template' => 'tpl/main.html',
        'include' => 'lib/render.php'
    ]
];

$req = $_REQUEST['x'] ?? 'homepage';

if (!array_key_exists($req, $pagina)) {
    // prendi la chiave $req cioè 'homepgage'
    // controllo che esiste in $pagina
    // fallback su homepage se è una chiave
    $req = 'homepage';
}

$x = $pagina[$req];
// prendo i dati della pagina corrente


