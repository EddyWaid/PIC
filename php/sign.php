<?php
  $email = htmlspecialchars($_POST['email']);
  $psw = htmlspecialchars($_POST['psw']);
  $name = htmlspecialchars($_POST['name']);
  $cognome = htmlspecialchars($_POST['cognome']);

  $conn = mysqli_connect('localhost','root','','PIC');
  if (!isset($conn)) {
    echo "errCONN";
  }
  else {
    $query = 'SELECT * FROM user WHERE email = "'.$email.'" ';
    $result = mysqli_query($conn,$query);
    $row = mysqli_num_rows($result);

    if($row > 0)
    {
      echo "errES";
    }
    else {
      $query = 'INSERT INTO user (email,psw,nome,cognome) VALUES ("'.$email.'","'.$psw.'","'.$name.'","'.$cognome.'")';
      if(mysqli_query($conn,$query)){
        echo 'S';
      }
    }
  }


?>
