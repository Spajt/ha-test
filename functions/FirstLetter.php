<?php

namespace Challenge;

function getThreeUpperletters($string) : string {
    if (empty($string)) {
        throw new \Exception('String is too low to be handled');
    }

    $stringSplit = str_split($string);
    $output = "";
    $upperOver = false;
    
    while (strlen($output) < 3) {
        foreach ($stringSplit as $char) {
            if (!$upperOver && ctype_upper($char)) {
                $output .= $char;
            } elseif ($upperOver) {
                $output .= $char;
            }

            if (strlen($output) === 3) {
                break 2;
            }
        }
        $upperOver = true;
    }

    return strtoupper($output);
}