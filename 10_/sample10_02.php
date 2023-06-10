<?php
/**　◆ ◇ ◆ ------------------------------------------------------------- 　◆ ◇ ◆
 *      setcookie();    クッキーの設定
 *          引数１：クッキー名
 *          [option]
 *              値：
 *              有効期限：1970/1/1 からの経過秒数を設定
 *                  ※ time()：1970/1/1 からの経過秒数を返す
 *                  使用例）time() + 60*60*24*7     ・・・１週間 => 今 + 60秒*60分*24時間*7日 
 *              URLパス：有効範囲（デフォルト値：0 = 当ディレクトリとサブディレクトリで有効）
 *                  同サイト内でクッキーを有効にする場合、「／(= ルート)」指定
 *              ドメイン：
 *              secure属性の設定：
 *              httponly属性の設定：
 *   　++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 *      cookieを削除する場合、有効期限を「time()-1」とする。
 * 
 * 　◆ ◇ ◆ ------------------------------------------------------------- 　◆ ◇ ◆ */
    setcookie("user_id2",$_POST['id2'],time()+60*60*24*7,"/");

    var_dump($_COOKIE);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample10_02</title>
</head>
<body>
    <hr>
    <h2>coockieの設定</h2>
    <form method="POST" action="sample10_02.php">
        <input type="text" name="id2">
        <input type="submit" name="submit">
    </form>
</body>
</html>