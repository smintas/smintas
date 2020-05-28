<?php
 error_reporting(0); 

$numbr=$_POST['numbr'];$sayi=15;
	if($numbr%2==0)
	{
		echo "number >" . $numbr . "<br>even";
	}
	else
	{
		echo "number >" . $numbr . "<br>odd";
	}
	?>


	<form name="form" method="post">               
  <p>
    <label for="numbr"></label>
    <input type="text" name="numbr" pattern="\d*" placeholder="number" >
  </p>
  
    <input type="submit" value="sent"  >
                   
    </form>
