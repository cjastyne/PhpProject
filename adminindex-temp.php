<?php
	
?>


<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HOLA|HOLIDAY</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
	
    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>




<body style="background-image:url('a.jpg'); background-repeat: no-repeat; background-attachment:fixed;">
	
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="adminindex.php"><font size="5" style="background:'whitesmoke'; font-family:'arial'" color="Whitesmoke">HOLA <font size="6" style="font-family:'arial';"><b>|</font> <font size="5" color="skyblue" style="font-family:'arial';"> HOLIDAY </b></font></font><font style=" font-family:'alex brush';" size="4"><b> have the holidays within your reach.</b></font></a>
            </div>
			
	
			<form class="navbar-form navbar-right">
				<div id="navbar" class="navbar-collapse collapse">
				
				<ul class="nav navbar-nav navbar-right">
				<li style="color:white; margin-top:15px;"><b>WELCOME </b></li>
				<li><a href="profile.php"><b><?php echo $_SESSION['user'];?></b></a></li>
				<li><a href="addholiday.php"><b style="size=30px">+ </b><b>Add Holidays</b></a></li>
				<li style="font-size:30px;"> | <div class="btn-group">
					  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Action <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu">
						<li><a href="aholidays.php">Holidays</a></li>
						<li><a href="users.php">Users</a></li>
						<li><a href="logs.php">Logs</a></li>
						<li><a href="aprofile.php">Edit Profile</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="logout.php">Logout</a></li>
					  </ul>
				</div>
				</li>

			  </ul> 
					
					
					

			
				
            </div>
			</form>	
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
		
    </nav>
		
	<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	
	
	</body>
</html>