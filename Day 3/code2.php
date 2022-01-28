<!DOCTYPE html>
<html>
<body>
<?php
//Finding primes from 1 to 100

for($i=1;$i<=500;$i++)
{
	$check=0;
	for($j=1;$j<=$i;$j++)
    {
    	if($i%$j==0)
        {
        	//echo $i."D ";
        	$check++;
            //echo $check;
        }
    }

     if($check==2)
     {
        echo $i." ";
     }
}

?>
</body>
</html>
