<?php
  session_start();
  if($_GET["send"] == 1)
  echo "You have successfully sent a message to E-mail:" .$_SESSION["to"];
 ?>
