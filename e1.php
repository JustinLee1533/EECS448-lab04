<?php
  function multiply($x, $y)
  {
    $z = $x*$y;
    return($z);
  }

  function makeTable()
  {
    for($i = 0; $i<=100; $i++)
    {
      echo "<tr>";

      for($j=0; $j<=100; $j++)
      {
        echo "<td>";
        if(($i == 0)&&($j != 0))
        {
          echo "<b>".j."</b>";
        }else if($i==0)&&($j==0))
        {
          echo " ";
        }else if(($j==0)&&($i!=0))
        {
          echo "<b>".i."</b>";
        }else
        {
          echo multiply($i, $j);
        }
        echo "</td>";
      }
      echo "</tr>";
    }
  }
?>
