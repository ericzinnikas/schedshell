<!-- -->
<!--nav.inc.php contains all the code for navigation buttons like the side bar and the top bar-->
<?php include('nav.inc.php'); ?>
<!DOCTYPE html>
<html>
	<head lang="en">
		<title>Check Course Prerequisites</title>
        <!-- Boostrap/JQuery Includes -->
        <link href="css/bootstrap-journal.min.css" rel="stylesheet" media="screen">
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js' type='text/javascript'></script>
        <script src='js/bootstrap.min.js' type='text/javascript'></script>
       <!-- Accessing the tree javascript -->
        <script src='js/jit.js' type='text/javascript'></script>
        
        <!-- Checks if user has entered a valid course into the text box, then includes tree stuff -->
        </script>

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
  <!-- will actually create the tree -->
  <body>
    <!--formatting navigation bar -->
  <?php
    printNavbar("pre");
  ?>
  <div class='container-fluid'>

        <!-- START: main page -->
        <div class='row-fluid'>

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
