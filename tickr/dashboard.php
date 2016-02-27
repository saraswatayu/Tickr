<?php include('stockManager.php'); ?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tickr - Dashboard</title>
        
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="navigation/navigation.css" rel="stylesheet">
    </head>
    
    <body>
        
        <!--Navigation-->
        <div class="container">
            <?php include('navigation/navigation.php'); ?>
        </div>
        
        <!--Page Content-->
        <div class="container">
            <div class="row">
                <!--Stock Picker-->
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Stock Listing</h3>
                        </div>
                        
                        <div class="panel-body">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Filter...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                </span>
                            </div>
                            
                            <table class="table table-hover">
                                <?php printStockListing(); ?>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!--Center Content-->
                <div class="col-md-6">
                    <!--Graph-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Graph</h3>
                        </div>
                        
                        <div class="panel-body">
                            <div class="well">
                                graph goes here
                            </div>
                            
                            <div class="btn-group" role="group" aria-label="graph-span-picker">
                                <button type="button" class="btn btn-default">1 Day</button>
                                <button type="button" class="btn btn-default">5 Days</button>
                                <button type="button" class="btn btn-default">1 Month</button>
                                <button type="button" class="btn btn-default">3 Months</button>
                                <button type="button" class="btn btn-default">6 Months</button>
                                <button type="button" class="btn btn-default">All</button>
                            </div>
                        </div>
                    </div>

                    <!--Stock Listing-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Current Portfolio</h3>
                        </div>
                        
                        <table class="table table-default">
                            <?php printStockListing(); ?>
                        </table>
                    </div>
                </div>
                
                <!--Right Content-->
                <div class="col-md-3">
                    <!--Bank Information-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Bank Information</h3>
                        </div>
                        <div class="panel-body">
                            Current Balance: $10,000
                        </div>
                    </div>

                    <!--Stock Detailed Information-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Stock Information</h3>
                        </div>
                        <div class="panel-body">
                            No stock selected.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>