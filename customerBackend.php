<?php
  echo "<link rel='stylesheet' type='text/css' href='style.css' />";
  $p = $_POST["password"];
  $q1 = $_POST["q1"];
  $q2 = $_POST["q2"];
  $q3 = $_POST["q3"];

  $s1 = 1.0*$q1;
  $s2 = 2.0*$q2;
  $s3 = 3.0*$q3;

  $shipping = $_POST["shipping"];
  $shipName ="";

  if($shipping == 0)
  {
    $shipName = "Free 7 day";
    $shipping = 0;
  }else if($shipping == 50)
  {
    $shipName = "$50.00 over night";
    $shipping = 50;
  }else
  {
    $shipName = "$5.00 3 day";
    $shipping = 5;
  }

  $t = $s1+$s2+$s3 + $shipping;

  echo "Welcome.  Processing order";
  echo "<br>"."password:".$p."<br>";
  echo "<table border="."1".">";
  echo "<tr>"."<th> </th>"."<th> Quantity</th>"."<th>Cost Per Item </th>"."<th> Sub Total</th>"."</tr>";
  echo "<tr>"."<th>Bacon</th>"."<td>".$q1."</td>"."<td>$1.00</td>"."<td>"."$".$s1."</td>"."</tr>";
  echo "<tr>"."<th> Cigarretes</th>"."<td>".$q2."</td>"."<td>$2.00</td>"."<td>"."$".$s2."</td>"."</tr>";
  echo "<tr>"."<th> Booze</th>"."<td>".$q3."</td>"."<td>$3.00</td>"."<td>"."$".$s3." </td>"."</tr>";
  echo "<tr>"."<th> Shipping </th>"."<td colspan="."2".">".$shipName."</td>"."<td>$$shipping</td>"."</tr>";
  echo "<tr>"."<th colspan="."3".">". "Total Cost</th>"."<th>$$t </th>"."</tr>";

  echo "</table>";
  //echo "<tr>"."<th></th>"."<th>Quantity</th>"."<th>Cost Per Item</th>"."<th>Sub Total</th>";

 ?>
