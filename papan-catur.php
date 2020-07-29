<?php

function papan_catur($angka)
{
    // tulis kode di sini
    $html = "<table border=1>";


    for ($v = 1; $v <= $angka; $v++) :
        $html .= "<tr>";

        for ($h = 1; $h <= $angka; $h++) :
            if (($v % 2 == 1 && $h % 2 == 1) || ($v % 2 == 0 && $h % 2 == 0))
                $html .= "<td style='width:20px;text-align:center;'>#</td>";
            else
                $html .= "<td style='width:20px;text-align:center;'>&nbsp;</td>";

        endfor;
        $html .= "</tr>";

    endfor;
    $html .= "</table><br><hr>";

    return $html;
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

echo papan_catur(5) 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/