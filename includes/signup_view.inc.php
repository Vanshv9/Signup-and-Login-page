<?php


function signup_input(){

  if(isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])){
      echo' <input type="text" name = "username" placeholder = "Username" value = "' . $_SESSION["signup_data"]["username"] .' ">';
  }
  else{
    echo '<input type="text" name = "username" placeholder = "Username">';
  }
  echo '<input type="password" name = "pwd" placeholder = "password">';

  if(isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])){
    echo' <input type="text" name = "email" placeholder = "Email" value = "' . $_SESSION["signup_data"]["email"] .' ">';
    }
  else{
    echo '<input type="text" name = "email" placeholder = "Email">';
  }
}
function check_signup_errors(){
  if(isset($_SESSION['errors_signup'])){
    $errors = $_SESSION['errors_signup'];
      echo "<br>";
      foreach($errors as $error){
        echo $error;
      }


    unset($_SESSION['errors_signup']);
  }
  elseif(isset($_GET["signup"]) && $_GET["signup"] === "success"){
    echo '<br>';
    echo "Signup Success";
  }
}