<?php
$inputScore = trim(fgets(STDIN));
$scoreArr = str_split($inputScore);
$totalScore = 0;

for($i = 0; $i < count($scoreArr); $i++){
    if($scoreArr[$i] == 'X'){
        $totalScore += 10;
    }else{
        $totalScore += $scoreArr[$i];
    }
}

echo $totalScore;
