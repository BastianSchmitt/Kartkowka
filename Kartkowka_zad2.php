<meta charset="UTF-8">
<form method="POST" action="">
    Silnia<input name="s"></input><br> 
    FiB<input name="n"></input><br>
  <button type="submit" name="wyslij">wyslij</button>
</form>
<?php
if (isset($_POST['wyslij'])){
    $s = $_POST['s'];
    $n = $_POST['n'];  
    $s;    
    $silnia = 1;
    for ($i=1; $i<=$s; $i++) {
      $silnia *= $i;
    }
    echo ("Silnia wynosi: "."$n! = $silnia"."<br>");

if($n<=2) 
echo($n.'Element Fibonacciego to 1');
else{
$f1=1; 
$f2=1; 
$temp; 
for($i=3;$i<=$n;$i++){
$temp=$f1+$f2;
$f1=$f2;
$f2=$temp;
}
}
}
?>