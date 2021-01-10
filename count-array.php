<?php
$numbers = [13,11,2001,13,3,2];
$value = 13;
$count = 0;
for ($i=0;$i<count($numbers);$i++){
    if ($value == $numbers[$i]){
        $count++;
    }
}
echo $count;
