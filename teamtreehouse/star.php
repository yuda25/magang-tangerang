<?php
function numb($num)
{
 for($h=1;$h<=$num;$h++){
    for($d=1;$d<=$h;$d++){
    
        echo " ";
    }
        echo $h;
        echo "\n";
    
    }
}
    numb(6);
//============================
function kym($wk)
{
    for($g=$wk;$g>=1;$g--){
        for($d=1;$d<=$g;$d++){
               if($g==$d)
               {
                   echo $g;
               }else{
                   echo " ";
               }
                    }
                    echo "\n";
}
}
    kym(4);
    // ==========================
for($a=1;$a<=30;$a++)
{
    for($b=1;$b<=30;$b+=7)
    {
        if($a==$b)
        {
            echo "\n";
        }
    }
    echo "$a \t";
}    

