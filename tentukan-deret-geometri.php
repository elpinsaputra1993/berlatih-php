<?php
function tentukan_deret_geometri($arr)
{
    // kode di sini
    $pjg = count($arr);
    $temp = '';
    $sel = '';
    $result = 'true';

    for ($z = 0; $z < $pjg; $z++) :

        if ($z > 0) {
            if ($z == 1) {

                $temp = $arr[$z] / $arr[$z - 1];
            } else {
                $sel = $temp;
                $temp = $arr[$z] / $arr[$z - 1];
                if ($sel != $temp) {
                    $result = 'false';
                    break;
                }
            }
        }

    endfor;

    return "<b>" . $result . "</b><br>";
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
