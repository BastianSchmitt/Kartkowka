<html>
    <form action:"" method="Post">
        Podaj swoja wage
        <input name="Liczba"> <br>
        Mezcyzna M Kobieta K
        <input name="Plec"> <br>
        Podaj ile wypiles alkoholu (w ml) oraz ich % <br>
        <input name="alkohol1">
        <input name="procent1"> <br>
        <input name="alkohol2">
        <input name="procent2"> <br>
        <input name="alkohol3">
        <input name="procent3"> <br>
        <input type="submit" value="Submit">
</from>

</html>

<?php
$Waga=$_POST['Liczba'];
$alkohol1=$_POST['alkohol1'];
$procent1=$_POST['procent1'];
$alko1=$alkohol1*$procent1;

$alkohol2=$_POST['alkohol2'];
$procent2=$_POST['procent2'];
$alko2=$alkohol2*$procent2;

$alkohol3=$_POST['alkohol3'];
$procent3=$_POST['procent3'];
$alko3=$alkohol3*$procent3;

$Plec=$_POST['Plec'];
if($Plec=="M")
{
    $Plec=0.7;
}
else if($Plec="K")
{
    $Plec=0.6;
}
else{
    $Plec=1;
}
$alkomat=($alko1+$alko2+$alko3)/($Plec*$Waga)/100;
echo "<br>".$alkomat." promili";
?>