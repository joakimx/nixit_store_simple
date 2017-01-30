<?php
if($_POST){
  echo "POST";
} else {
  echo "GET";
}
$name = $_POST['name'];
$email = $_POST['email'];
$site = $_POST['web'];
$message = $_POST['message'];
$to = "xairhead.knight@gmail.com";
$subject = "New Message - *nixit";
mail($to, $subject, $message, "From: " . $name);
echo "Your message has been sent";
echo $_POST['name'];
echo $_POST['email'];
echo $_POST['web'];
echo $_POST['message'];
header("Location: index.html");
?>
