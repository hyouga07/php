<?php
function totalscore($score1,$score2,$score3)
{
    $total = $score1+$score2+$score3;

if($total>210){
    echo "合格点は"."210点"."なので合格です";
}
else{
    echo "合格点は"."210点"."なので不合格です";
}
}

echo totalscore(70,70,70);

