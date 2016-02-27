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
                    <div class="well">
                        <table class="table table-hover">
                            <?php printStockListing(); ?>
                        </table>
                    </div>
                </div>
                
                <!--Center Content-->
                <div class="col-md-6">
                    <!--Graph-->
                    <div class="well">
                        ...
                    </div>

                    <!--Stock Listing-->
                    <div class="well">
                        ...
                    </div>
                </div>
                
                <!--Right Content-->
                <div class="col-md-3">
                    <!--Bank Information-->
                    <div class="well">
                        ...
                    </div>

                    <!--Stock Detailed Information-->
                    <div class="well">
                        ...
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>