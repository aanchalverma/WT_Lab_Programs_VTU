<?php
$states = "Mississippi Alabama Texas Massachusetts Kansas";
$states1 = explode(' ',$states);
echo "The original array is:<br>";
foreach($states1 as $i=>$value)
    echo("<br>States[$i]:".$value);
$statesArray=[];
foreach($states1 as $state)
{
    if(preg_match('/xas$/',$state))
        $statesArray[0]=$state;
}
foreach($states1 as $state)
{
    if(preg_match('/^k.*s$/i',$state))
        $statesArray[1]=$state;
}
foreach($states1 as $state)
{
    if(preg_match('/^M.*s$/',$state))
        $statesArray[2]=$state;
}
foreach($states1 as $state)
{
    if(preg_match('/a$/',$state))
        $statesArray[3]=$state;
}
echo "<br><br>The resultant array is :";
foreach($statesArray as $array=>$value)
    echo("<br>States[$array]:".$value);
?>