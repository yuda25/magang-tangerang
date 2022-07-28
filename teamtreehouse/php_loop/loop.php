    <?php
    function pertama()
    {
    // no 1
    for($y=1; $y<=10; $y++)
    {
    if ($y==4)
    {
        echo "";
    }elseif($y==5)
    {
        echo "";
    }elseif($y==6)
    {
        echo "";
    }elseif($y==7)
    {
        echo "";
    }else
    {
        echo $y;
    }
    }
    }
    pertama();
    // ==========================
    echo PHP_EOL;
    function kedua()
    {
    // no2
    for($k=5;$k>=1;$k--)
    if($k==2 || $k==1)
    {
        echo "*";
    }else
    {
        echo "$k \t";
    }
    }
    kedua();
    echo PHP_EOL;
    function ketiga()
    {
        // no 3
    for($a=1;$a<=4;$a++)
    if($a==1 || $a==3)
    {
        echo $a."a \t";
    }else
    {
        echo $a."b \t";
    }
    }
    ketiga();
    echo PHP_EOL;
    function keempat()
    {
    // no4
    for($m=1;$m<=7;$m++)
    {
        if($m==4)
        {
            echo "a";
        }elseif($m==5)
        {
            echo "a";
        }elseif($m==6)
        {
            echo "a";
        }else
        {
            echo $m;
        }
    }
    }
    keempat();
    echo PHP_EOL;
    function kelima()
    {
    // no 5
    for($i=4;$i>=0;$i--)
    {
        if($i==2)
        {
            echo "a";
        }elseif($i==0)
        {
            echo "a";
        }else
        {
            echo $i;
        }
    }
    }
    kelima();
    echo PHP_EOL;
    function keenam()
    {
    // no 6
    for($h=0;$h<=4;$h++)
    {
        if($h==0)
        {
            echo "a";
        }elseif($h==1)
        {
            echo "a";
        }else
        {
            echo $h;
        }
    }
    }
    keenam();
    // =========================
    echo PHP_EOL;
    for($i=0;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
        echo "\n";
    }

    echo"_________________________________";
    echo PHP_EOL;
    echo"|---______--------------______---|";
    echo PHP_EOL;
    echo"|--/ ____ \------------/ ____ \--|";
    echo PHP_EOL;
    echo"|--\_|__|_/------------\_|__|_/--|";
    echo PHP_EOL;
    echo"|-----------_________------------|";
    echo PHP_EOL;
    echo"|----------/         \-----------|";
    echo PHP_EOL;
    echo"|---------/           \----------|";
    echo PHP_EOL;
    echo"|---------\           /----------|";
    echo PHP_EOL;
    echo"|----------\_________/-----------|";
    echo PHP_EOL;
    echo"|--------------------------------|";
    echo PHP_EOL;
    echo"|________________________________|";
    // ========================================
    $currentyear = date("Y");
    $year = $currentyear -100;

    while($year<= $currentyear)
    {
        echo $year ."\n";
        $year++;
    }
    var_dump($currentyear);

    do{
        echo $year. "\n";
    }while(++$year <= $currentyear);
    // ===========================================
    $currentyear = date('Y');

    for($year=$currentyear -100;++$year<=$currentyear;){
        echo $year."\n";
    }
// ==================================================
$learn = array('conditional','arrays','loops');
$learn[] = 'build something awesome';
array_push($learn,'function','forms','objects');
array_unshift($learn,'HTML','CSS');
asort($learn);
sort($learn);

for ($i=0; $i<count($learn);$i++){
    echo $learn[$i]."\n";
}
