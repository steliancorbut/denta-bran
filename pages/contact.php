<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mobila LUTSCH - magazin de mobila Sebes - Alba</title>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script>
        $(function(){
        $("#head").load("_head.html"); 
        $("#foot").load("_foot.html"); 
        });  
    </script>
</head>
<body>
<!-- include upper menu header and navigation -->
<div id="head"></div>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Lutsch Trans S.R.L.</h1>
        </div> <!-- /.col-lg-12 -->
    </div> <!-- /.row -->
    <div class="row">
        <div class="col-md-6">
            <p><strong>Adresa:</strong><br/>str. Horea, nr. 87 B<br/>515800, 
				SEBEŞ<br/>
				jud. ALBA<br/>ROMANIA</p>
				<p><strong>Orar:</strong><br/>
				Luni - Vineri: 8 - 17<br/>Sambata: 8 - 13<br/>Duminica: inchis</p>
				<p><strong>Telefon:</strong> +40 258 730 736</p>
				<p><strong>Mobil:</strong> +40 749 021 486 - Marius Suciu</p>
				<p><strong>Fax:</strong> +40 258 730 977</p>
				<p><strong>E-mail:</strong> 
				<a href="mailto:mobilalutsch@yahoo.ro">mobilalutsch [at] 
				yahoo.ro</a></p>
                </br>

                <div class="alert alert-<?php echo $_GET['alert']; ?>">
                    <h3> <?php echo $_GET['mes']; ?></h3>
                </div>
                    <form role="form" action="form-handler-nodb.php" method="POST">
                        <div class="row">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>                               
                                <input type="text" name="name" placeholder="Numele dvs." class="form-control"  minlength="2" required>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="email" name="email" placeholder="adresa email" class="form-control"  required>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                <input type="tel" name="phone" placeholder="numar de telefon" class="form-control" minlength="10" >
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">Text</span>
                                <textarea name="message" class="form-control" placeholder="mesajul dvs..." rows="6" minlength="5" required></textarea>
                            </div>
                            <div class="form-group">
                                <!--<input type="hidden" name="save" value="contact">-->
                                <button type="submit" class="btn btn-default form-control">Trimite mesajul</button>
                            </div>
                        </div>
                    </form>
        </div>
        <div class="col-md-6">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBLA7JdtgUqlMoh6aylj2h8fEm4dhpCSsg&q=strada+Horea+87B,+Sebes">
                </iframe>
	        </div>
        </div>
    </div> <!-- /.row -->


</div> <!-- / end page wrapper -->
        
<div id="foot"></div>

</body>
</html>
