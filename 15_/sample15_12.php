<?php
    /**
     *      日にちの差を取得
     *      diff()
     *          d   日数
     *          m   月数
     *          y   年数
     */

    $d1 = new DateTime("2022-07-10");
    $d2 = new DateTime("2015-05-10");

    $diff = $d1->diff($d2);

    echo '$d1'.": ".$d1->format("Y-m-d")." ～ ".'$d2'.": ".$d2->format("Y-m-d")." 年数の差は… ";
    echo $diff->y;

    echo "<hr>";
    echo '$d1'.": ".$d1->format("Y-m-d")." ～ ".'$d2'.": ".$d2->format("Y-m-d")." 月数の差は… ";
    echo $diff->m;

    echo "<hr>";
    echo '$d1'.": ".$d1->format("Y-m-d")." ～ ".'$d2'.": ".$d2->format("Y-m-d")." 日数の差は… ";
    echo $diff->d;

?>