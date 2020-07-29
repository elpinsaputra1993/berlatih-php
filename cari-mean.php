<?php

function cari_mean($arr)
{
    //kode di sini
    $pjg = count($arr);

    $sum = 0;

    for ($x = 0; $x < $pjg; $x++) :
        $sum += $arr[$x];
    endfor;

    // $hasil = round($sum / $pjg, 2);
    $hasil = round($sum / $pjg);

    return "Nilai mean nya adalah <b>$hasil</b><br>";
}

// TEST CASE 
echo cari_mean([1, 2, 3, 4, 5]); // 3
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7
