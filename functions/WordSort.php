<?php

namespace Challenge;


function wordSort(string $string) : string {
    if (empty($string)) {
        return "";
    }

    $words = explode(' ', $string);
    $sortingVar = [];

    foreach ($words as $word) {
        $number = filter_var($word, FILTER_SANITIZE_NUMBER_INT);
        $sortingVar[$number] = $word;
    }

    ksort($sortingVar);

    return implode(' ', $sortingVar);

}