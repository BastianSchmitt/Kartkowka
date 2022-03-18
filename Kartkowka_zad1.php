<meta charset="UTF-8">
<form action="" method="get">
Imie
<input type="text" name="Name"><br>
Nazwisko
<input type="text" name="Surname"><br>
Numer
<input type="text" name="Number"><br>

<input name="sub" type="submit" value="wyslij">
</form>

<?php
$name = $_GET['Name'];
$surname = $_GET['Surname'];
$number = $_GET['Number'];
$n;
$s;

$n=substr($name,$number);
$s=substr($surname,$number);

echo "$n <br> $s";
?>