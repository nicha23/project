<?php
  session_start();
  // destroy the session
  session_destroy();

  echo "<script>setTimeout(\"location.href = 'login.php';\",500);</script>";
  exit;
 ?>