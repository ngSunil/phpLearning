<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
// Online PHP compiler to run PHP program online
// Print "Hello World!" message
echo "Hello World!";
$a = 5;
$b = $a * 2;
echo ($b);
$c = "hello";
echo ("\n$c, world");
echo $c."Sunil";
echo '<br>';
echo $c.$a;

if($a == 5) {
    echo("I am a 5");
}else {
    echo("I am not a Five");
}
$num1 = 3;
$num2 = 4;
echo("<br> the sum is ".($num1+$num2));
// for loop
$i=0;
for($i; $i<10; $i++) {
    echo $i;
}

// Arrray:
$a = ["ab", 1,2, "bcde"];
echo "<hr> Normal Array ";
echo $a[0];
echo count($a);
for ($i=0; $i< count($a); $i++){
    echo $a[$i]."<br>";
}
$a = array("ab", 1,2, "bcde");
echo "<hr> Normal Array ".$a[2];
echo "<hr> Associative array";
print_r($a);
echo "<br>";
echo '<pre>';
var_dump($a);

$x = array("ab" => "abc", 1 => "abcd", "vvv");
echo $x["ab"];
echo("<br>");

// find the sum of array:
echo("<hr>");
echo('The sum of an aray');
$nums = [3, 5, 7, 9, 11, 13];
$sum = 0;
for($i=0; $i<count($nums); $i++) {
    $sum+=$nums[$i];
}
echo("The sum is: ".$sum);
echo("<hr>");
echo('The PRODUCT of an aray');
$nums = [3, 5, 7, 9, 11, 13];
$product = 1;
for($i=0; $i<count($nums); $i++) {
    $product*=$nums[$i];
}
echo("The PRODUCT is: ".$product);
foreach($x as $k => $v){
    echo " $k $v \n";
    echo("<hr>");
}
foreach($x as $v) {
    echo "$v \n";
}

for($m=0; $m<30; $m++) {
    for($n=0; $n<$m+1; $n++) {
        echo("*");
    }
    echo("\n");
}
// ------------WHILE LOOP ------------------
$k = 0;
while($k<5) {
    echo($k."\n");
    if($k==10) {
        break;
    }
    $k++;
}

echo '</pre>';
// FIND THE SUM OF ARRAY ELEMENTS using do-while loop
$z = [1, 2, 3, 4, 5];
$sum = 0;
$i = 0;
do{
    $sum+=$z[$i];
    $i++;
}while($i<count($z));
echo("\n The sum using do-while loop is ".$sum);
$i=0;
$sum = 0;
while($i<count($z)) {
    $sum+=$z[$i];
    $i++;
}
echo("<br>");
echo("\n The sum using while loop is ".$sum);
echo("<br>");

// MULTIPDIMENSIONAL ARRAY
$multi_array = [[1, 2, 3],
                [3,4,5, 9],
                [5,6,7]];
for($i=0; $i<count($multi_array); $i++) {
    for($j=0; $j<count($multi_array[$i]); $j++) {
        echo $multi_array[$i][$j];
    }
    echo "<br>";
}
foreach($multi_array as $value) {
    foreach($value as $v) {
        echo $v;
    }
    echo "<br>";
}
echo "<br>";
foreach($multi_array as $k=>$value) {
    foreach($value as $key=>$v) {
        // echo $v;
        echo $multi_array[$k][$key];
    }
    echo "<br>";
}
if (2==3) {
    $msg ="Hi";
}elseif(5==3) {
    $msg="No";
}
echo $msg;
// SUPER GLOBAL VARIABLES
// print_r($_SERVER);
echo $_SERVER['SERVER_PORT'];
print_r($_GET);
echo($_GET['age']);
?>
</body>
</html>