<?php
$inputScores = trim(fgets(STDIN));
$scoreArr = str_split($inputScores);
$totalScore = 0;

for($i = 0; $i < count($scoreArr); $i++){
    if($scoreArr[$i] == 'X'){
        $totalScore += 10;
    }else{
        $totalScore += $scoreArr[$i];
    }
}

echo $totalScore;