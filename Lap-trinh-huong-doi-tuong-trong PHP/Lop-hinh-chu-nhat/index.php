<?php
include_once "Rectangle.php";


$rectangle= new Rectangle(10,10);


 echo "Diện tích hình chữ nhật = ". $rectangle->getAge();
 echo "<br>";
 echo "Chu vi hình chữ nhật = ".  $rectangle->getPerimeter();
echo "<br>";
echo  $rectangle->display();
?>