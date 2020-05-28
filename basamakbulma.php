<?php
 error_reporting(0);

$kutu=$_POST['kutu'];
{
$bir=$kutu%10;
$kutu=$kutu/10;
$iki=$kutu%10;
$kutu= $kutu/10;
$üc=$kutu%10;
$kutu=$kutu/10;


echo  $bir."=birinci basamak<br>".$iki."=ikinci basamak<br>" .$üc."=ücüncü basamak" ;

}

?>

<form name="form1" method="post">

               
  <p>
    <label for="kutu"></label>
    <input type="text" name="kutu" placeholder="number" class="box">
  </p>
  
 <input type="submit" name="sayac" value="gonder"  class="islem" >
                    </form>


     