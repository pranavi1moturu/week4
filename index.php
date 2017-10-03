<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";
$tar = "2017/05/24";
$search=array('-');
$replace=array('/');
$date=str_replace($search,$replace,$date);
echo "New value of \$date:".$date."<br>";
echo "The value of \$tar: ".$tar."<br>";
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

strcmp($date,$tar);
if (strcmp($date, $tar)>0)
{
echo "the future";
}
else if(strcmp($date, $tar)<0)
{
echo "the past";
}
else
{
echo "Oops";
}
?>