<?php include('nav.inc.php'); ?>
<?php if( !phpCAS::isSessionAuthenticated() ) {
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
	<head lang="en">
		<title>Four Year Plan</title>
        <!-- Boostrap/JQuery Includes -->
        <link href="css/bootstrap-journal.min.css" rel="stylesheet" media="screen">
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js' type='text/javascript'></script>
        <script src='js/bootstrap.min.js' type='text/javascript'></script>
        <script src='js/jit.js' type='text/javascript'></script>

 <style type="text/css">
             body {
                 padding-top: 80px;
                 padding-bottom: 40px;
             }
             .sidebar-nav {
                 padding: 9px 0;
             }
             .table th, .table td {
               text-align: center;
               vertical-align: top;
             }
             .table td {
               padding-top: 10px;
             }
         </style>

	</head>	

    <body>

    <?php printNavbar("home"); ?>

    <div class='container-fluid'>

        <!-- START: main page -->
        <div class='row-fluid'>
            <?php printNavlist("home"); ?>
            <div class='offset2 span6'>
            <h3><u><?php echo phpCAS::getUser(); ?>'s Settings</u></h3>
            </div>
        </div>
        <!-- END: main page -->

        <hr />

        <div class='footer'>
            <p>&copy; SchedShell 2013</p>
        </div>
    </div>

    </body>
</html>
