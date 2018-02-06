<?php
/**
 * Created by PhpStorm.
 * User: spajt
 * Date: 06.02.18
 * Time: 21:21
 */
namespace Challenge;

function findUnique(array $strings) : string {
    $points = [];
    foreach ($strings as $string) {
        $points[$string] = 0;
        foreach ($strings as $matchString) {
            if ($matchString === $string) {
                continue;
            }
            $outSpacedString = str_replace(' ', '', $string);
            $outSpacedMatch  = str_replace(' ', '', $matchString);

            if (empty($outSpacedString)) {
                $points[$string] += 100;
            }
            if (empty($outSpacedMatch)) {
                $points[$string] += 100;
            }

            $points[$string] +=  similar_text($outSpacedString, $outSpacedMatch);
        }
    }
    uasort($points, function ($a, $b) {
        return $a - $b;
    });
    reset($points);
    return key($points);
}