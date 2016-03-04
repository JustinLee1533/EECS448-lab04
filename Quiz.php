<?php

    $i1 = $_POST["q1"];
    $i2 = $_POST["q2"];
    $i3 = $_POST["q3"];
    $i4 = $_POST["q4"];
    $i5 = $_POST["q5"];

    $count = 0;
    if($i1 =="blue")
    {
      echo "Answer 1 is correct"."<br>";
      $count++;
    }else
    {
      echo "Answer 1 is incorrect"."<br>";
      echo "You answered: ".$i1."<br>";
      echo "The correct answer is blue"."<br>";
    }
	echo "<br>-----------------------------<br>";

    if($i2 == "To seek the holy grail   ")
    {
      echo "Answer 2 is correct"."<br>";
      $count++;
    }else
    {
      echo "Answer 2 is incorrect"."<br>";
      echo "You answered: ".$i2."<br>";
      echo "The correct answer is:to seek the holy grail"."<br>";
    }

	echo "<br>-----------------------------<br>";
    if($i3 == "Nineveh")
    {
      echo "Answer 3 is correct"."<br>";
      $count++;

    }else
    {
      echo "Answer 3 is incorrect"."<br>";
      echo "You answered: ".$i3."<br>";
      echo "The correct answer is: Nineveh"."<br>";
    }

	echo "<br>-----------------------------<br>";
    if($i4 == "African or European?")
    {
      echo "Answer 4 is correct"."<br>";
      $count++;

    }else {
      echo "Answer 4 is incorrect"."<br>";
      echo "You answered: ".$i4."<br>";
      echo "The correct answer is: African or European?"."<br>";
    }

	echo "<br>-----------------------------<br>";
    if($i5 == "To keep the druids off the streets")
    {
      echo "Answer 5 is correct"."<br>";
      $count++;
    }else
    {
      echo "Answer 5 is incorrect"."<br>";
      echo "You answered: ".$i5."<br>";
      echo "The correct answer: To keep the druids off the streets"."<br>";
    }

	echo "<br>-----------------------------<br>";
    echo "You answered ".$count." questions correctly"."<br>";

    $percent = 0;
    if($count == 1){
      $percent = 20;
    }else if($count==2)
    {
      $percent = 40;
    }else if($count == 3)
    {
      $percent = 60;
    }else if($count ==4)
    {
      $percent = 80;
    }else if($count ==5)
    {
      $percent = 100;
    }
    echo "<br>"."You got a ".$percent."%";



?>
