<?php

$stocks = array('TWTR', 'BAC', 'AAPL', 'GOOG', 'TSLA', 'YHOO');

function printStockListing() {
    global $stocks;
    
    foreach ($stocks as $stock) {
        echo "<tr>".
             "<td><input type=\"checkbox\" aria-label=\"...\"></td>".
             "<td>$stock</td>".
             "</tr>";
    }
}


?>