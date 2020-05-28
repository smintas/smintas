<?php
 error_reporting(0); 

if(!filter_has_var(INPUT_POST, 'mail'))
{
  echo("");
}
else
{
  if (!filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL))
  {
   echo "EMail invalid.";
  }
  else
  {
   echo " EMail valid.";
  }
}
?>

<form name="form" method="post">               
  <p>
    <label for="numbr"></label>
    <input type="text" name="mail" >
  </p>
  
    <input type="submit" value="sent"  >
