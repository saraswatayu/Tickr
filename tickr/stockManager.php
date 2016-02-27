<?php

$stocks = array('TWTR', 'BAC', 'AAPL', 'GOOG', 'TSLA', 'YHOO');

function printTickerList() {
    global $stocks;
    
    foreach ($stocks as $stock) {
        echo "<tr>".
             "<td><label class='checkbox-inline'><input type='checkbox' value=''>".
             "$stock".
             "</label></td>".
             "<td class='price-change'><font color='green'>".
             "6.8%".
             "</font></td>".
             "</tr>";
    }
}

function printStockInformationList() {
    global $stocks;
    
    foreach ($stocks as $stock) {
        echo "<tr>".
             "<td>$stock</td>".
             "<td>Apple, Inc.</td>".
             "<td>20</td>".
             "<td>$102.00</td>".
             "<td><button type='button' class='btn btn-success'>Sell</button></td>".
             "</tr>";
    }
}

?>