

<?php
 error_reporting(0); 


if (isset($_POST['+']))
{
	$sonuc=$_POST['number1'] + $_POST['number2'];
}
elseif(isset($_POST['-']))
{
	$sonuc=$_POST['number1'] - $_POST['number2'];
}	

elseif(isset($_POST['*']))
{
	$sonuc=$_POST['number1'] * $_POST['number2'];
}

elseif(isset($_POST['/']))
{
	$sonuc=$_POST['number1'] / $_POST['number2'] ;
}
	
else 
	echo  "";  {
?>


<form name="form1" method="post" action="hesapmakinesi.php">

                <div  style="text-align: center; background-color:#3d4543;
height: 430px;
    width: 300px;
border-radius:10px;
position:relative;
">
<div>
 <br>
                    <p>
    <label for="number"></label>
    <input type="text" name="number1" placeholder="number1" class="box">
  </p>
  <p>
    <label for="number"></label>
    <input type="text" name="number2" placeholder="number2" class="box">
  </p>
   <p>
    <label for="number"></label>
      <input type="text" name="result" value=" <?php echo $sonuc; ?>"  class="box">
  </p>

   
                        <input type="submit" name="+" value="+"  class="islem" >
                        <input type="submit" name="-" value="-"  class="islem" >
                        <input type="submit" name="*" value="*"  class="islem" >
                        <input type="submit" name="/" value="/"  class="islem" >
                        <input type="reset"  name=""  value="C"  class="islem" >

                       <br>
                    
                       <input type="button" name="" value="1"  class="islem"  >
                        <input type="button" name="" value="2"  class="islem" >
                        <input type="button" name="" value="3"  class="islem" >                    
                        <input type="button" name="" value="4"  class="islem" >
                        <input type="button" name="" value="5"  class="islem" >
                        <input type="button" name="" value="6"  class="islem" >                    
                        <input type="button" name="" value="7"  class="islem" >
                        <input type="button" name="" value="8"  class="islem" >
                        <input type="button" name="" value="9"  class="islem" >                   
                        <input type="button" name="" value="0"  class="islem" >
                        <input type="button" name="" value="."  class="islem" >                       
                        <input type="button" name="" value="="  class="islem" >
                    </div>
                    
    


                </div>
                    
            </form>
<style type="text/css">
	
.islem{
	width: 50px; 
	height: 50px; 
	font-family: fantasy;
	font-size: 35px;
}
.box{
	position:relative;
	left:2px;
	top:2px;
	height:45px;
	color:black;
	background-color:#bccd95;
	font-size:21px;
	text-align:right;
}
</style>
<?php  } ?>



