<?php
  session_start();

  if (isset($_SESSION['username']))
  {
    $forename = $_SESSION['forename'];
    $surname  = $_SESSION['surname'];

    destroy_session_and_data();
	
    echo htmlspecialchars("Welcome back $forename.<br>
          Your full name is $forename $surname.");
  }
  else echo "Please <a href='authenticate.php'>click here</a> to log in.";

  function destroy_session_and_data()
  {
    $_SESSION = array();
    setcookie(session_name(), '', time() - 2592000, '/');
    session_destroy();
  }
?>
