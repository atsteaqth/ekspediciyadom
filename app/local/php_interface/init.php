<?php

function pre($arr) {
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

function switchDate($date) {
    $objDate = new DateTimeImmutable($date);

    $intlFormatter = new IntlDateFormatter('ru_RU', IntlDateFormatter::SHORT, IntlDateFormatter::SHORT);
    $intlFormatter->setPattern("d\nMMM");

    $formatDate = $intlFormatter->format($objDate);

    $trimmed = rtrim($formatDate, '.');

    $str = mb_strtoupper($trimmed);

    return $str;
}

