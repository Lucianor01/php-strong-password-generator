<?php

session_start();

$str = '';

$lunghezzaConFiltri = 0;

$qtyLetters = 0;

$password = '';

$qtyLetters = (isset($_GET['lunghezzaCaratteri'])) ? intval($_GET['lunghezzaCaratteri']) : '';

$ripetizioni = (isset($_GET['radioValue'])) ? $_GET['radioValue'] : '';

// var_dump($qtyLetters, $ripetizioni);

$arrayScelte = [
    [
        'type' => 'lettere',
        'arguments' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'active' => (isset($_GET['letters'])) ? true : false
    ],
    [
        'type' => 'numeri',
        'arguments' => '0123456789',
        'active' => (isset($_GET['numbers'])) ? true : false
    ],
    [
        'type' => 'simboli',
        'arguments' => '!"#$%&()*+,-./:;<=>?@[\]^_`{|}~',
        'active' => (isset($_GET['symbols'])) ? true : false
    ]
];

// var_dump($arrayScelte);

foreach ($arrayScelte as $elem) {
    if ($elem['active']) {
        $str .= $elem['arguments'];
        $lunghezzaConFiltri += strlen($elem['arguments']);
    }
}

// var_dump($str, $lunghezzaConFiltri);

function generateRandomPassword($qtyLetters, $password, $lunghezzaConFiltri, $str, $ripetizioni)
{

    if ($qtyLetters > 0 && $lunghezzaConFiltri > 0) {

        if ($ripetizioni == 'no') {

            for ($i = 0; strlen($password) < $qtyLetters; $i++) {
                $letteraRandom = $str[rand(0, strlen($str) - 1)];

                if (!preg_match('/$letteraRandom/', $password)) {
                    $password .= $letteraRandom;
                }
            }
        } else {

            for ($i = 0; strlen($password) < $qtyLetters; $i++) {
                $password .= $str[rand(0, strlen($str) - 1)];
            }
        }
    }

    return $password;
}

// var_dump(generateRandomPassword($qtyLetters, $password, $lunghezzaConFiltri, $str, $ripetizioni));

$_SESSION['password'] = generateRandomPassword($qtyLetters, $password, $lunghezzaConFiltri, $str, $ripetizioni);

// var_dump($_SESSION['password']);