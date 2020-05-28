
<?php
 error_reporting(0); 

$kutu=$_POST['kutu'];
$sayac = 1;
for($x=10;true;$x*=10)
{
if($kutu<$x)
	break;
else
	$sayac++;
}
echo $kutu."= number =>>" .$sayac. " digit";

?>
 
<form name="form1" method="post">
 
    <p><input type="text" name="kutu" placeholder="number"></p>  
    <p><input type="submit"  value="send"></p>
</form>
