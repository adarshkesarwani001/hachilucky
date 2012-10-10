<?php 
$path = array(
    array(7,5,999,999),
    array(7,999,999,2),
	array(999,3,999,999),
	array(4,999,1,999),
);
for($k=0;$k<4;$k++)
for($i=0;$i<4;$i++)
for($j=0;$j<4;$j++)
{
$path[$i][$j]=min($path[$i][$j],$path[$i][$k]+$path[$k][$j]);

}
for($i=0;$i<4;$i++)
{
for($j=0;$j<4;$j++)
{
echo $path[$i][$j];
}
?><br><?php
}

?>