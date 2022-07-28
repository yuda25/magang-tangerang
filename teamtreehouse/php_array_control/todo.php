<?php
include 'list.php'; 

$status = false;
$field='priority';
$filter=array();
foreach($list as $originalkey=>$item){
    if($status == 'all' || $item['complete'] == $status)
    {
        if(isset($field) && isset($item[$field])){
            $filter[$originalkey]=$item[$field];
        }else{
            $filter[$originalkey]=$item['priority']+12;
        }
    }
}
asort($filter);
// echo '<pre>';
// var_dump($status, boolval('all'), $status = 'all');
echo '</pre>';

echo '<table>';
echo '<tr>';
echo '<th>title</th>';
echo '<th>priority</th>';
echo '<th>due date</th>';
echo '<th>complete</th>';
echo '<tr>';

foreach($filter as $id=>$value)
{
    echo '<tr>';
    echo '<td>'. $list[$id]["title"] . "</td>\n";
    echo '<td>'. $list[$id]["priority"] . "</td>\n";
    echo '<td>'. $list[$id]["due"] . "</td>\n";
    echo '<td>';

    if($list[$id]["complete"])
    {
        echo "yes";
    }else{
        echo "no";
    }
    echo '</td>';
    echo '</tr>';
}
echo '</tr>';
echo '</table>';
// var_dump($list);
// echo $list[0]["title];
// ===================================
// echo PHP_EOL;
// $list[]=[
//     "title"=>"laundry",
//     "priority"=>2,
//     "due"=>"",
//     "complete"=>true,
// ];

// $list[]=[
//     "title"=>"clean out refrigerator",
//     "priority"=>3,
//     "due"=>"07/30/2016",
//     "complete"=>false,
// ];
// var_dump($list);
?>

