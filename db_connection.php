<?php

$con = new mysqli('localhost','root','') or die($con->error);  
      $con->select_db('project') or die("cannot select DB"); 

?>