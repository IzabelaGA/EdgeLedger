<?php
  if (isset($_POST['email']))  {
  
    //***Email information
    $admin_email = "is.contact@izabelasosnowska.pl";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    //***send email
    mail($admin_email, "New message from the EL form", $message . ' - ' . $phone, "From:" . $email);
    
    header('Location: http://www.elhambre.site/succes.html');
  }
  ?>

