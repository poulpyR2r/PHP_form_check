
<form action="" method="POST">
    <input type="text" name="name" id="" placeholder="name"></input>
    <input type="text" name="mail" id="" placeholder="mail"></input>
    <input type="text" name="message" id="" placeholder="message"></input>
    <input type="submit" name="check" id=""></input>

</form>


<?php

if (!isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['mail'];
    $message = $_POST['message'];
    $name = htmlspecialchars($name);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($message);
    $error = NULL;




    if (empty($name)){
      $error = "Le champ nom n'est pas rempli";
      echo $error;
   }else{
      
      if (strlen($name) < 3) {
        $error = "Le nom doit comporter au moins 3 caractères";
        echo $error;
      }

      if (strlen($name) > 100){
        $error = "Le nom est trop grand";
        echo $error;
      }

      if (empty($email)){
        $error = "le champ mail n'est pas rempli";
        echo $error;
    
       }else{
    
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
          $error= "Adresse email non valide";
          echo $error;
       } else {
        if(empty($message)) {
          $error = "Le champ message n'est pas rempli";
          echo $error;
        }
       }
      
      
    }
    
    
   
   }



}
?>