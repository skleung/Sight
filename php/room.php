
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Sign-in to your site</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/room.css" rel="stylesheet">
    <script type="text/javascript"
       src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIsbeJfT3wf3EvaVbycKn98Gc-k5Kf-Rw&sensor=true">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(37.4225, -122.16),
          zoom: 14
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
      <form class="form-signin" role="form" action="poproom.php">
        <h2 class="form-signin-heading">Sign in to your <strong>site</strong>:</h2>
        <input type="text" class="form-control" name = "name" placeholder="Name" required autofocus>
<!--         <input type="text" class="form-control" placeholder="Password" required>
 -->    </br>
</br>
</br>
 		<button class="btn btn-lg btn-primary btn-block sign-in-btn" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
    <div id = "map-canvas"></div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/roomscript.js"></script>
  </body>
</html>
