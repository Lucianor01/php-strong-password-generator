<?php

function generateRandomPassword($length, $characterRepeat, $includeLetters, $includeNumbers, $includeSymbols)
{
    $characters = '';
    if ($includeLetters) $characters = $characters . 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    if ($includeNumbers) $characters = $characters . '0123456789';
    if ($includeSymbols) $characters = $characters . '!@#$%^&*()';


    $password = '';
    $characterCount = strlen($characters);

    for ($i = 0; $i < $length; $i++) {
        if (!$characterRepeat && $i > 0) {
            $previousCharacter = $password[$i - 1];
            $characters = str_replace($previousCharacter, '', $characters);
            $characterCount = strlen($characters);
        }
        $randomIndex = rand(0, $characterCount - 1);
        $password = $password . $characters[$randomIndex];
    }

    return $password;
}
