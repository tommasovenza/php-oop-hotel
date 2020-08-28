
<?php

require_once (__DIR__ . '/Stanza.php');

// echo $camera_del_vescovo->stampaStanza(2);

$array_stanze = [
    [
        'id stanza' => 1,
        'numero stanza' => '100',
        'piano' => 1,
        'numero posti disponibili' => 2,
    ],
    [
        'id stanza' => 2,
        'numero stanza' => '101',
        'piano' => 1,
        'numero posti disponibili' => 3,
    ],
    [
        'id stanza' => 3,
        'numero stanza' => '102',
        'piano' => 1,
        'numero posti disponibili' => 3,
    ],
    [
        'id stanza' => 4,
        'numero stanza' => '103',
        'piano' => 1,
        'numero posti disponibili' => 1,
    ],
    [
        'id stanza' => 5,
        'numero stanza' => '104',
        'piano' => 1,
        'numero posti disponibili' => 2,
    ],
    [
        'id stanza' => 6,
        'numero stanza' => '105',
        'piano' => 1,
        'numero posti disponibili' => 2,
    ],
    [
        'id stanza' => 7,
        'numero stanza' => '201',
        'piano' => 2,
        'numero posti disponibili' => 2,
    ],
    [
        'id stanza' => 8,
        'numero stanza' => '202',
        'piano' => 2,
        'numero posti disponibili' => 3,
    ],
    [
        'id stanza' => 9,
        'numero stanza' => '203',
        'piano' => 2,
        'numero posti disponibili' => 3,
    ],
    [
        'id stanza' => 10,
        'numero stanza' => '204',
        'piano' => 2,
        'numero posti disponibili' => 1,
    ],
    [
        'id stanza' => 11,
        'numero stanza' => '205',
        'piano' => 2,
        'numero posti disponibili' => 2,
    ],
    [
        'id stanza' => 12,
        'numero stanza' => '301',
        'piano' => 3,
        'numero posti disponibili' => 3,
    ],
    [
        'id stanza' => 13,
        'numero stanza' => '302',
        'piano' => 3,
        'numero posti disponibili' => 3,
    ],
    [
        'id stanza' => 14,
        'numero stanza' => '303',
        'piano' => 3,
        'numero posti disponibili' => 2,
    ],
    [
        'id stanza' => 15,
        'numero stanza' => '304',
        'piano' => 3,
        'numero posti disponibili' => 1,
    ],
];


// ciclo foreach

foreach ($array_stanze as $stanza) {
    
    $camera = new Stanza($stanza['id stanza'], $stanza['numero stanza'], $stanza['piano'], $stanza['numero posti disponibili']);

    echo $camera->stampaStanza();
}



?>