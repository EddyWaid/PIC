<?php

  $conn = mysqli_connect('localhost','root','','PIC');

  if(!isset($conn)){
    return 'errCONN';
  }
  else{

    $query = 'SELECT * FROM user WHERE email = "'.$_POST['email'].'" AND psw = "'.$_POST['psw'].'" ';
    $result = mysqli_query($conn,$query);
    $row = mysqli_num_rows($result);

    if($row == 0){
      echo 'nope';
    }
    else {
      $check = mysqli_fetch_array($result);

      if(isset($check)){
        echo $check['nome'];
      }
    }
  }

?>
