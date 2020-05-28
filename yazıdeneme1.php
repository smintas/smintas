<?php 

$yazi="benim Internet sitem https:sorunsuzscript.blogspot.com.tr";

echo " $yazi " ;
 
echo "<br>"; echo "<br>";

echo strtolower ($yazi);

//strtolower yazilari küçük harf yapar

echo "<br>";  echo "<br>";

echo strtoupper ($yazi);

//strtoupper yazilari büyük harf yapar


// gördüğünüz gibi strtolower harfleri küçük , strtoupper ise harfleri büyük yazar.


echo "<br>"; echo "<br>";

echo ucwords ($yazi);

//kelimelerin ilk harflerini büyük yazar 

echo "<br>";  echo "<br>";

echo ucfirst ($yazi);

//metnin ilk harfini büyük yazar 

echo "<br>";  echo "<br>";

echo strstr($yazi, "sitem"); 

//bunu anlatmasi zor örneğe bakarak anlayabilirsin :)

echo "<br>";  echo "<br>";  

echo str_replace("Internet" , "www" , $yazi );

//bunu anlatmasi zor örneğe bakarak anlayabilirsin :)

echo "<br>";  echo "<br>";  

echo substr($yazi,5,15);

//bunu anlatmasi zor örneğe bakarak anlayabilirsin :)


?>