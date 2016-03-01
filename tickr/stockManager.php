<?php

$stocks = array('TWTR', 'BAC', 'AAPL', 'GOOG', 'TSLA', 'YHOO', 'FREY');

$currentStock = 'AAPL';

function printWatchlist() {
    global $stocks;
    
    foreach ($stocks as $stock) {
        echo "<tr>".
             "<td>$stock</td>".
             "<td class='right-text-align'><label class='checkbox-inline'><input type='checkbox' value=''></label></td>".
             "</tr>";
    }
}

function printStockInformationList() {
    global $stocks;
    
    foreach ($stocks as $stock) {
        $quantity = 20;
        $currentPrice = 96.62;
        
        echo "<tr>".
             "<td>$stock</td>".
             "<td>Apple, Inc.</td>".
             "<td>$quantity</td>".
             "<td>$" . prettyPrintNumber($currentPrice) . "</td>".
             "<td class='right-text-align'><label class='checkbox-inline'><input type='checkbox' value=''></label></td>".
             "</tr>";
    }
}

function printCurrentStockInformation() {
    global $currentStock;
    
    if ($currentStock == '') {
        echo "<div class='panel-body'>No stock selected.</div>";
    } else {
        $quantity = 20;
        $currentPrice = 96.62;
        $percentChange = 8;
        $openingPrice = 112.1;

        echo "<table class='table'>".
             "<tr><th class='center-text-align' colspan='4'>$currentStock (Apple, Inc.)</th></tr>".
             "<tr>".
             "<th>Quantity</th><td class='right-text-align'>$quantity</td>".
             "<th>Current Price</th><td class='right-text-align'>$" . prettyPrintNumber($currentPrice) . "</td></tr>".
             "</tr>".
             "<tr>".
             "<th>Percent Change</th><td class='right-text-align'><font color='green'>" . prettyPrintNumber($percentChange) . "%</font></td>".
             "<th>Opening Price</th><td class='right-text-align'>$" . prettyPrintNumber($openingPrice) . "</td></tr>".
             "</tr></table>";
    }
}

function prettyPrintNumber($number) {
    return number_format($number, 2, '.', ',');
}

?>