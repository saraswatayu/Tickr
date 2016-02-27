<?php

$stocks = array('TWTR', 'BAC', 'AAPL', 'GOOG', 'TSLA', 'YHOO');

$currentStock = 'AAPL';

function printTickerList() {
    global $stocks;
    
    foreach ($stocks as $stock) {
        echo "<tr>".
             "<td><label class='checkbox-inline'><input type='checkbox' value=''>".
             "$stock".
             "</label></td>".
             "<td class='right-text-align'><font color='green'>".
             "6.8%".
             "</font></td>".
             "</tr>";
    }
}

function printStockInformationList() {
    global $stocks;
    
    $index = 0;
    foreach ($stocks as $stock) {
        $index++;
        echo "<tr>".
             "<th>$index</th>".
             "<td>$stock</td>".
             "<td>Apple, Inc.</td>".
             "<td>20</td>".
             "<td>$102.00</td>".
             "<td><button type='button' class='btn btn-success'>Sell</button></td>".
             "</tr>";
    }
}

function printCurrentStockInformation() {
    global $currentStock;
    
    if ($currentStock == '') {
        echo "<div class='panel-body'>No stock selected.</div>";
    } else {
        $prev_close = 20;
        $open = 30;
        $volume = 500000;

        echo "<table class='table table-condensed'>".
             "<tr><th>Prev Close:</th><td class='right-text-align'>$" . prettyPrintNumber($prev_close) . "</td></tr>".
             "<tr><th>Open:</th><td class='right-text-align'>$" . prettyPrintNumber($open) . "</td></tr>".
             "<tr><th>Volume:</th><td class='right-text-align'>$volume</td></tr></table>";
    }
}

function prettyPrintNumber($number) {
    return number_format($number, 2, '.', ',');
}

?>