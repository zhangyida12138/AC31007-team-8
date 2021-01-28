<?php
//Starts the session that's being used
  session_start();
  if($_SESSION["loggedIn"] != "true"){
    header('Location: http://oai-content.co.uk');
  }
?>

<html>
<head>
  <body>
    <?php
      echo "Welcome to the dashboard {$_SESSION["username"]}! \o/"
    ?>
  </body>
</head>
</html>
