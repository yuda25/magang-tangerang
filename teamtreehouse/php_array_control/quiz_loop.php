<?php
$facts = array(
    57=> "on heinz ketchup bottles represents the number of varieties of pickles the company once had.\n",
    2=>"is the approximate hours a day giraffes sleeps\n",
    18=>"is the average hours a python sleeps per day\n",
    98=>"kusuma\n"
);
for($a=1;$a<=100;$a++)
{
    if(isset($facts[$a]))
    {
        echo $a.$facts[$a];

    }else{
        echo $a."\n";
    }
}
$nama="yuda";
var_dump(isset($nama));

?>