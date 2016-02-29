<?php

$stocks = array('AAPL', 'RIC', 'TWTR', 'BAC', 'DIS');

echo '<tr><td>YO</td><td>HI</td><td>BAH</td><td>GAH</td></tr>';

function populateStocks() {
	foreach ($stock in $stocks) {
		echo "<tr>".
			 "<td>",$stock,"</td>".
			 "<td>$102.00</td>".
			 "<td>$92.00</td>".
			 "<td>Sell</td>".
			 "</tr>";
	}
}

?>