<?php
for($i=0;$i<7;$i++)
{
    for($j=0;$j<=$i;$j++)
    {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

for($x=0;$x<4;$x++)
{
    for($y=1;$y<4-$x;$y++)
    {
        echo " ";
    }
    for($z=0;$z<=$x;$z++)
    {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";
for($j=2;$j<6;$j++)
{ 
  for($i=4;$i>=1;$i--)
    {
        if($j>$i)
        {
            echo "*";
        }
        echo " ";
    }
  echo "<br>";
}
?>