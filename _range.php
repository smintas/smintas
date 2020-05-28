<?php
 error_reporting(0); 

$login=$_POST['login'];
$int_options = array(
"options" => array(
 "min_range"=>20,
 "max_range"=>300
 )
);
if(filter_var($login,FILTER_VALIDATE_INT,$int_options)){
   echo "The number is the desired property";
}else{
   echo "The number is not at the desired property";
}
?>

<form name="form" method="post">               
    <p><input type="text" name="login"  placeholder="" ></p>  
    <p><input type="submit" value="send"  ></p>
</form>    