<?php
function tentukan_deret_aritmatika($arr)
{
    // kode di sini
    $pjg = count($arr);
    $temp = '';
    $sel = '';
    $result = 'true';

    for ($z = 0; $z < $pjg; $z++) :

        if ($z > 0) {
            if ($z == 1) {

                $temp = $arr[$z] - $arr[$z - 1];
            } else {
                $sel = $temp;
                $temp = $arr[$z] - $arr[$z - 1];
                if ($sel != $temp) {
                    $result = 'false';
                    break;
                }
            }
        }

    endfor;

    return "<b>" . $result . "</b><br>";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]); // true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]); // false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]); // false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
