<?php
  
  $host="localhost";
  $user="root";
  $pass="";
  $dbname="steps";
  
  $dbcon = new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
  
  if($_POST) 
  {
      $name = strip_tags($_POST['username']);
      
	  $stmt=$dbcon->prepare("SELECT username FROM student WHERE username=:name");
	  $stmt->execute(array(':name'=>$name));
	  $count=$stmt->rowCount();
	  	  
	  if($count>0)
	  {
		  echo "<b><span style='color:red;'>Sorry username already taken !!!</span></b>";
	  }
	  else
	  {
		  echo "<span style='color:green;'>Username available !</span>";
	  }
  }
?>