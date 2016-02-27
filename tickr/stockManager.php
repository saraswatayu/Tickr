<?php

$stocks = array('TWTR', 'BAC', 'AAPL', 'GOOG', 'TSLA', 'YHOO');

function printStockListing() {
    global $stocks;
    
    foreach ($stocks as $stock) {
        echo "<tr>".
             "<td>".
             "<label class='checkbox-inline'>".
             "<input type='checkbox' value=''>".
             "$stock".
             "</label>".
             "</td>".
             "<td>".
             "<span class='label label-success'>6.8 %</span>".
             "</td>".
             "</tr>";
    }
}


?>