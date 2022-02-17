<?php
//arrays
$names = ["Mary","Musa","Mike","Moha","Mendi","Jack","Vin","Sam","Vee"];
$ages = [19,20,13,12,24,56,78,45,19,24,18,17,16,36,92,34,52,72,97,30];
echo $names[4];
echo "<hr>";
echo $ages[0];
echo "<hr>";
foreach ($names as $jina)
{
    echo "$jina <br>";
}
echo "<hr>";
echo sizeof($names);//count the # of names
echo "<hr>";
array_push($names,"Bush");
echo sizeof($names);
echo "<hr>";
var_dump($names);
echo "<hr>";
array_pop($names);
var_dump($names);
echo "<hr>";
rsort($ages);
foreach ($ages as $miaka);
{
    echo "$miaka<br>";
}
echo "<hr>";
echo array_sum($ages);

echo "<hr>";
//associative array
$person =["names"=>"Moha Musa","age"=>61,"color"=>"black"];
echo $person["names"];
echo "<hr>";
echo $person["age"];
echo "<hr>";
echo $person["color"];
echo "<hr>";











































































