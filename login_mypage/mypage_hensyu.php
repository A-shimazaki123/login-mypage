<?php
mb_internal_encoding("utf8");

if (empty($_POST['form_mypage'])) {
    header("Location:login_error.php");
}

session_start();

?>

<DOCTYPE html>
<html lang="ja">

    <head>
       <meta charset="UTF-8">
       <title>マイページ登録</title>
       <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>

<body>

    <header>
        <img src="4eachblog_logo.jpg">
        <div class="login"><a href="login.php">ログイン</a></div>
    </header>
    
    <main>
        <div class="jouhou">
            <h1>会員情報</h1>
            <div class="hello">
                <?php echo "こんにちは！" .$_SESSION['name']. "さん"; ?>
            </div>
            <form action="mypage_update.php" method="post">
                <div class="profile_pic">
                    <img src="<?php echo $_SESSION['picture']; ?>">
                </div>
                <div class="hensyu_box">
                    <p>氏名：<br>
                        <input type="text" size="40" name="name" value="<?php echo $_SESSION['name'] ?>"></p>
                    <p>メール：<br>
                        <input type="text" size="40" name="mail" value="<?php echo $_SESSION['mail'] ?>"></p>
                    <p>パスワード：<br>
                        <input type="text" size="40" name="password" value="<?php echo $_SESSION['password'] ?>"></p>
                </div>
                <div class="comments">
                    <textarea rows="3" cols="75" name="comments"><?php echo $_SESSION['comments']; ?></textarea>
                </div>
                <div class="button_center">
                    <input type="submit" class="submit_button" size="35" value="この内容に変更する">
                </div>
            </form>
         </div>
    </main>

    <footer>
    © 2018 InterNous.inc. All rights reserved
    </footer>

</body>
</html>