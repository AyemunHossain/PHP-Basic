<?php
//assume session is started before when login 

$email = $_SESSION['email']))

$msg ='Logout success fully '+$email;

// Unset all of the session variables.
$_SESSION = array();

// Finally, destroy the session.
session_destroy();

// Display the alert box  
echo '<script>alert('.$msg .')</script>'; 
  
?>