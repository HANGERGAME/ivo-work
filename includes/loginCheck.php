<?php
  if (isset($_SESSION['player_name'])) {

    echo'User: '.  $_SESSION['player_name'];
    var_dump($_SESSION);
  }
  else{
    //var_dump($_SESSION);
    //die();
 // header( "Location: index.php" ); 
      //exit;
  }
  ?>
  <button ><a href="index.php">Logout</a></butto>
  <button ><a href="profile.php">profile</a></button>