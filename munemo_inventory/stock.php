<?php require_once('include/session.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Munemo Inventory Project</title>

    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">

    <link href="assets/css/sb-admin.css" rel="stylesheet">

    <link href="assets/css/plugins/morris.css" rel="stylesheet">

    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">


</head>

<body>

    <div id="wrapper">

       
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Munemo Inventory Project</a>
            </div>
            
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrator<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
           
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></i> Home</a>
                    </li>
                    <li>
                        <a href="item.php"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Item List</a>
                    </li>
                    <li>
                        <a href="product.php"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Product Profile</a>
                    </li>
                    <li class="active">
                        <a href="stock.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Stocks</a>
                    </li>
                    <li>
                        <a href="expired.php"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Expired</a>
                    </li>
                    <li>
                        <a href="sales.php"><span class="glyphicon glyphicon-record" aria-hidden="true"></span> Sales</a>
                    </li>
                </ul>
            </div>
          
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
               
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        </h1>
                    </div>
                </div>
               
                <button class="btn btn-success btn-sm" id="stock-report">PRINT
                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                </button>
               <div id="all-stock"></div>

            </div>
          

        </div>
       

    </div>
   


<?php include_once('modal/confirmation.php'); ?>
<?php include_once('modal/message.php'); ?>

<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-1.12.3.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/regis.js"></script>


</body>

</html>
