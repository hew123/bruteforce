<?php

  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username == 'joshua' && $password == "joshi95")
    echo "login successful";
  else {
    echo "failed attempt, you hacker!";
  }

 ?>
