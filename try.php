<style type="text/css">

.lucky
{
background-color:#EAF2D3;
}
.adarsh
{
margin-top:2cm;
margin-left:2cm;
margin-right:2cm;
}
#customers
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:50%;
border-collapse:collapse;
}
#customers td, #customers th 
{
font-size:1em;
border:1px solid #98bf21;
padding:3px 7px 2px 7px;
}
#customers th 
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#A7C942;
color:#ffffff;
}
#customers tr.alt td 
{
color:#000000;
background-color:#EAF2D3;
}
div.poo
{
margin-left:13cm;
}
div.shift
{
margin-left:3cm;
}
div.panel3,p.flip3
{
height:38px;
-moz-border-radius:6px;-webkit-border-radius:6px;
background-color:#EAF2D3;
margin:0px;
padding:5px;
border:solid 3px #EAF2D3 ;
}

div.panel3
{
padding-left:10px;
text-align:left;
padding-top:55px;
height:150px;
display:none;
background-color:#E7EBF2;
}
div.set
{
margin-top:3cm;
margin-left:10cm;
margin-right:10cm;
}
div.footer
{
	height:50px;
	width:100%;
	background-color:#EAF2D3;
	margin-bottom:0;
	
}
p.foot
{
	color:#000;
	padding-top:20px;
	padding-left:10px;
	
}



</style>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript"> 
$(document).ready(function(){
$(".flip3").click(function(){
    $(".panel3").slideToggle("slow");
  });
});
</script>
</script>

<?php
if(isset($_POST['submit']))
{
$cityfrom=$_POST['cityfrom'];
$cityto=$_POST['cityto'];

$delhi1=$_POST['delhi1'];$delhi2=$_POST['delhi2'];$delhi3=$_POST['delhi3'];$delhi4=$_POST['delhi4'];$delhi5=$_POST['delhi5'];
$chennai1=$_POST['chennai1'];$chennai2=$_POST['chennai2'];$chennai3=$_POST['chennai3'];$chennai4=$_POST['chennai4'];$chennai5=$_POST['chennai5'];
$kolkata1=$_POST['kolkata1'];$kolkata2=$_POST['kolkata2'];$kolkata3=$_POST['kolkata3'];$kolkata4=$_POST['kolkata4'];$kolkata5=$_POST['kolkata5'];
$lucknow1=$_POST['lucknow1'];$lucknow2=$_POST['lucknow2'];$lucknow3=$_POST['lucknow3'];$lucknow4=$_POST['lucknow4'];$lucknow5=$_POST['lucknow5'];
$pune1=$_POST['pune1'];$pune2=$_POST['pune2'];$pune3=$_POST['pune3'];$pune4=$_POST['pune4'];$pune5=$_POST['pune5'];
$path = array(
    array($delhi1,$delhi2,$delhi3,$delhi4,$delhi5),
    array($chennai1,$chennai2,$chennai3,$chennai4,$chennai5),
	array($kolkata1,$kolkata2,$kolkata3,$kolkata4,$kolkata5),
	array($lucknow1,$lucknow2,$lucknow3,$lucknow4,$lucknow5),
	array($pune1,$pune2,$pune3,$pune4,$pune5),
);

switch ($cityfrom) {
    case "delhi":
        $var=0;
        break;
    case "chennai":
        $var=1;
        break;
    case "kolkata":
        $var=2;
        break;
	case "lucknow":
        $var=3;
        break;
	case "pune":
        $var=4;
        break;
}
switch ($cityto) {
    case "delhi":
        $var1=0;
        break;
    case "chennai":
        $var1=1;
        break;
    case "kolkata":
        $var1=2;
        break;
	case "lucknow":
        $var1=3;
        break;
	case "pune":
        $var1=4;
        break;
}
for($k=0;$k<5;$k++)
for($i=0;$i<5;$i++)
for($j=0;$j<5;$j++)
{
$path[$i][$j]=min($path[$i][$j],$path[$i][$k]+$path[$k][$j]);

}
echo $path[$var][$var1];
/*for($i=0;$i<5;$i++)
{
for($j=0;$j<5;$j++)
{
echo $path[$i][$j];
}
?><br><?php
}*/




}
?>

<div class="main">
<div class="heading"><img src="image/jetflight.jpg" height="150px" width="380px"><img  src="image/jetlogo.jpg" height="150px" width="550px"><img  src="image/jetwelcome.jpg" height="150px" width="380px"></div>
</div>
<div class="set">
<p class="flip3" style="text-align:center">DIRECTIONS TO USE APPLICATION<br /><strong style="font-size:24px">CLICK ME!</strong></p>

<div class="panel3">
<p class="write"><strong>1=></strong>This application finds the minimum cost for going from one city to another using flight.<br />
<strong>2=></strong>Just write the cost from one city to another deleting the default.<br />
<strong>3=></strong>If the value is not known,leave as it is i.e<strong> dont delete default</strong>.<br />
<strong>4=></strong>Now, you are good to go.</p>
</div>
</div>

<?php 
if(!isset($_POST['submit']))
{
	?>
<form  name="form1" class="adarsh" method="post" action="try.php" >
<table border="2" align="center" cellpadding="7" cellspacing="7" id="customers">
<h1 align="center" class="lucky">COST ADJACENCY MATRIX</h1>
<tr class="alt">
<td><strong>CITY</strong></td>
<td><strong>DELHI</strong></td>
<td><strong>CHENNAI</strong></td>
<td><strong>KOLKATA</strong></td>
<td><strong>LUCKNOW</strong></td>
<td><strong>PUNE</strong></td>
</tr>

<tr>
<td><strong>DELHI</strong></td>
<td ><input type="text" name="delhi1" value="999999" > </td>
<td><input type="text" name="delhi2" value="999999"></td>
<td><input type="text" name="delhi3" value="999999"></td>
<td><input type="text" name="delhi4" value="999999"></td>
<td><input type="text" name="delhi5" value="999999"></td>

</tr>
<tr class="alt">
<td><strong>CHENNAI</strong></td>
<td><input type="text" name="chennai1" value="999999" align="middle"></td>
<td><input type="text" name="chennai2" value="999999"></td>
<td><input type="text" name="chennai3" value="999999"></td>
<td><input type="text" name="chennai4" value="999999"></td>
<td><input type="text" name="chennai5" value="999999"></td>

</tr>
<tr>
<td><strong>KOLKATA</strong></td>
<td><input type="text" name="kolkata1" value="999999"></td>
<td><input type="text" name="kolkata2" value="999999"></td>
<td><input type="text" name="kolkata3" value="999999"></td>
<td><input type="text" name="kolkata4" value="999999"></td>
<td><input type="text" name="kolkata5" value="999999"></td>

</tr>
<tr class="alt">
<td><strong>LUCKNOW</strong></td>
<td><input type="text" name="lucknow1" value="999999"></td>
<td><input type="text" name="lucknow2" value="999999"></td>
<td><input type="text" name="lucknow3" value="999999"></td>
<td><input type="text" name="lucknow4" value="999999"></td>
<td><input type="text" name="lucknow5" value="999999"></td>
</tr>
<tr>
<td><strong>PUNE</strong></td>
<td><input type="text" name="pune1" value="999999"></td>
<td><input type="text" name="pune2" value="999999"></td>
<td><input type="text" name="pune3" value="999999"></td>
<td><input type="text" name="pune4" value="999999"></td>
<td><input type="text" name="pune5" value="999999"></td>
</tr>

</table><br /><br />
<div class="shift">
<strong>FROM</strong><select name="cityfrom">
<option value="delhi">DELHI</option>
<option value="chennai">CHENNAI</option>
<option value="kolkata">KOLKATA</option>
<option value="lucknow">LUCKNOW</option>
<option value="pune">PUNE</option>
</select>
<strong>TO</strong><select name="cityto">
<option value="delhi">DELHI</option>
<option value="chennai">CHENNAI</option>
<option value="kolkata">KOLKATA</option>
<option value="lucknow">LUCKNOW</option>
<option value="pune">PUNE</option>
</select>
</div><br />
<br />

<div class="poo">
<input type="submit" name="submit" value="SUBMIT DETAILS" height="100px" style="font-weight:bold;padding:1em;background-color:#EAF2D3;
-moz-border-radius:6px;-webkit-border-radius:6px;border:1px solid gray;border-radius:6px;box-shadow:3px 3px 3px #000000;-moz-box-shadow:3px 3px 3px #000000; -webkit-box-shadow:3px 3px 3px #000000;background-image: -moz-linear-gradient(#EAF2D3, #fff);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#EAF2D3), to(#fff));">
</div>
</form>
<?php 
}
?>
<?php
if(isset($_POST['submit']))
{
?>
<table border="2" align="center" cellpadding="7" cellspacing="7" id="customers">
<h1 align="center" class="lucky" style="margin-left:10cm;margin-right:10cm;">RESULT</h1>
<tr class="alt">
<td><strong>CITY FROM</strong></td>
<td><strong><?php echo strtoupper($cityfrom);?></strong></td>
</tr>

<tr>
<td><strong>CITY TO</strong></td>
<td><strong><?php echo strtoupper($cityto);?></strong></td>
</tr>
<tr>
<td><strong>MINIMUM COST</strong></td>
<td><strong><?php 
if($path[$var][$var1]!=999999)
echo $path[$var][$var1]."Rs";
else
echo "SORRY! NO FLIGHT"
?></strong></td>
</tr>
</table>
<?php
}
?>
<div class="footer">
<p class="foot">GENERAL DISCLAIMER | COPYRIGHT 2009-2012 , JET AIRWAYS </p>
</div>
