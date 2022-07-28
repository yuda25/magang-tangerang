<?php
// function tes($nama)
// {
//     return $nama;
// }
// echo tes("kusuma yuda");
// 10 7 4 a a 1 a
for($c=10;$c>=0;$c--)
if($c<=3 && $c>1)
{
    echo "A";
}elseif($c<10 && $c>7)
{
    continue;
}elseif($c<7 && $c>4)
{
    continue;
}elseif($c==0)
{
   echo "A";
}
else
{
    echo $c;
}