<!--  /** +++++++++++++++++++++++++++
    　 *      menu.htmlを読込
    　 *　+++++++++++++++++++++++++++ */　-->
<?php require_once "menu.html"; ?>

<div>-- ファイル読み込み完了 --</div>
<hr>
<!-- ↓↓↓　2回目の読み込みは・・・？！ -->
<?php require_once "menu.html"; ?>
<div>-- ２回目読込したよ！！ --</div>