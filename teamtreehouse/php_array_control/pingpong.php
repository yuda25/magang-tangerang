<?php

$player1=0;
$player2=5;
$round=0;
// var_dump(abs($player1-$player2));
// var_dum($player2-$player1);

while (abs($player1-$player2)<2 || $player1<11 && $player2<11){
    $round++;
    echo "<h2>round $round</h2> \n";
    if (rand(0,1)){
        $player1++;
    }else{
        $player2++;
    }
    echo "player1 =$player1\n";
    echo "player2 =$player2\n";
}

echo "<h1>";
if ($player1>$player2){
    echo "$player1";
}else{
    echo "$player2";
}
echo "is the winner after $round round!</h1>\n";
// ============================================



?>