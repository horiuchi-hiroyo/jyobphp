<?php
    //      3章 8
    /* ------------------------------------------------
     *   次のコードを実行した結果「Success」が表示されるとき、
     *      空欄１、２に入る記述の組み合わせとして
     *      正しいものを選択して下さい。（１つ選択）
     * ------------------------------------------------ */
    /* ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━
     *  Ａ　1：$data = 60;
     *      2:($data > 70) && ($data <= 100)
     *  ---------------------------------
     *  Ｂ　1：$data = 70;
     *      2:($data >= 70) || ($data > 100)
     *  ---------------------------------
     *  Ｃ　1：$data = 80;
     *      2:($data >= 70) && ($data <= 100)
     *  ---------------------------------
     *  Ｄ　1：$data = 90;
     *      2:($data =< 70) || ($data = 100)
     * ━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━…━ */
    $data = 80;

    if(($data >= 70) && ($data <= 100)){
        print "Success";
    }elseif(($data >= 30) && ($data <70)){
        print "Fail";
    }
?>