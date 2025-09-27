<?php
function calcAge(): int {
    $birthDate = new DateTime("2005-03-27");
    $today = new DateTime();
    return $today->diff($birthDate)->y;
}

function getCurrentYear(): int {
    return (int)date("Y");
}