<?php

function generateScannedInfo($fieldsChecked)
{
    if (count($fieldsChecked) >= 4) {
        return implode(', ', array_slice($fieldsChecked, 0, 3)) . ' ו' . $fieldsChecked[3] . ' ועוד.';
    } else {
        $lastItem = end($fieldsChecked);
        array_pop($fieldsChecked);
        return implode(', ', $fieldsChecked) . ' ו' . $lastItem . '.';
    }
}