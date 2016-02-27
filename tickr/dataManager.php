<?php

$currentBalance = 10000;

function printCurrentBalance() {
    global $currentBalance;
    
    echo "$" . number_format($currentBalance, 0, '.', ',');
}

?>