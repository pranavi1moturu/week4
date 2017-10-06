<?php
$date =  date('Y-m-d', time());
echo "1. The value of \$date: ".$date."<br>";
$tar = "2017/05/24";

if ($date>$tar)
{
echo " the future </br>";
}
else if($date<$tar)
{
echo "3. the past </br>";
}
else
{
echo "Oops";
}
$search=array('-');
$replace=array('/');
$date=str_replace($search,$replace,$date);
echo "2. New value of \$date:".$date."<br>";
echo "The value of \$tar: ".$tar."<br>";
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo '</br>4.';
for($i=0; $i<substr_count($date,"/");$i++)
{
$t=$t+1;
$t=stripos($date,"/",$t);
echo ' </br> The position of / is: '. $t.' ';
echo '<br>';
}
echo '<br>';
        
$pos='/';
function strpos_all($date,$pos)
{
$offset=0;
$allpos=array();
while(($pos1=strpos($date,$pos,$offset))!==FALSE)
{
$offset=$pos1+1;
$allpos[]=$pos1;
}
return $allpos;
}
print_r(strpos_all($date,$pos));
echo "<br>";
$trans=array("/" => " ");
echo strstr($date,$trans) . "<br>";
print_r(str_word_count($date,1,'0..9'));
echo "<br>"; 

echo '</br>';
$sl=strlen($date);
echo '6. The length of the string is: '.$sl;
echo '<br>';
        
echo '</br>';
echo '7. The ascii value of the first character is '. ord($date);
echo '<br>';

echo '<br>';
echo '8. The last two characters of the date are: ';
$arr=str_split($date);
$a=count($arr);
for($i=0;$i<2;$i++)
{
$a=$a-1;
echo $arr[$a];
echo '  ';
}
echo '<br>';
        
echo '<br>';
echo '9. The separated date is: ';
$arr= (explode("/",($date)));
$a=count($arr);
for($i=0;$i<$a;$i++)
{
echo $arr[$i].' ';
}
        
echo '<br>';
foreach($year as $value)
{
echo '<br>';
for($i=0;$i<1;$i++)
{
switch(value)
{
case( ($value%4)==0 and ($value%100)!=0 or ($value%400)==0);
echo $value.'->'. 'True'.'<br>';
break;

default:
echo $value.'->'.'False'.'<br>';
}
}
}
?>