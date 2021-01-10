<?php
include_once 'Dancer.php';
$dancer1 = new Dancer('A','male');
$dancer2 = new Dancer('B','male');
$dancer3 = new Dancer('C','male');
$dancer4 = new Dancer('D','male');
$dancer5 = new Dancer('E','female');
$dancer6 = new Dancer('F','female');
$dancer7 = new Dancer('G','female');
$dancer8 = new Dancer('H','female');
$dancer9 = new Dancer('I','female');
$dancer10 = new Dancer('J','female');
$dancers = [$dancer1,$dancer2,$dancer3,$dancer4,$dancer5,$dancer6,$dancer7,$dancer8,$dancer9,$dancer10];
$male = new SplQueue();
$female = new SplQueue();
for ($i=0;$i<count($dancers);$i++){
    if ($dancers[$i]->gender == 'male'){
        $male->enqueue($dancers[$i]->name);
    } else {
        $female->enqueue($dancers[$i]->name);
    }
}
$count = 0;
while (!$female->isEmpty() && !$male->isEmpty()) {
    echo $male->dequeue() . ' - ' . $female->dequeue() . "<br>";
    $count++;
}
if ($female->isEmpty() || $male->isEmpty()){
    echo 'Còn ' . (count($dancers) - $count*2) . ' người đợi';
}





