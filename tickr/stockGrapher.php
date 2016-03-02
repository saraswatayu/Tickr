<?php
use Ghunti\HighchartsPHP\Highchart;
use Ghunti\HighchartsPHP\HighchartJsExpr;

$chart = new Highchart();
$stocks = 0;

$chart->chart = array(
    'renderTo' => 'container',
    'type' => 'line',
    'marginRight' => 130,
    'marginBottom' => 25
);
$chart->title = array(
    'text' => 'Portfolio Graph',
    'x' => - 20
);
$chart->subtitle = array(
    'x' => - 20
);
$chart->legend = array(
    'layout' => 'vertical',
    'align' => 'right',
    'verticalAlign' => 'top',
    'x' => - 10,
    'y' => 100,
    'borderWidth' => 0
);

function addToGraph($data) {
	if($stocks == 0) {
		$chart->xAxis->categories = array();
		$chart->yAxis = array(
		    'title' => array(
		        'text' => 'Price ($)'
		    ),
		    'plotLines' => array(
		        array(
		            'value' => 0,
		            'width' => 1,
		            'color' => '#808080'
		        )
		    )
		);

		$chart->series[] = $chart->series[] = array(
		    'name' => 'New York',
		    'data' => $data
		);
	} else if($stocks == 3){

	} else {

	}
}
?>