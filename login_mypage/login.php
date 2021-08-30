<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    <header>
        <img src="4eachblog_logo.jpg">
        <div class="login"><a href="login.php">ログイン</a></div>
    </header>
    <main>
        <div class="form_login">
            <form action="mypage.php" method="post">
                <div class="mail">
                    <label>メールアドレス</label><br>
                    <input type="text" class="formbox" size="40" name="mail" value="<?php if(isset($_COOKIE['login_keep'])){echo $_COOKIE['mail'];} ?>">
                </div>
                <div class="password">
                    <label>パスワード(半角英数字6文字以上）</label><br>
                    <input type="password" class="formbox" size="40" name="password" value="<?php if(isset($_COOKIE['login_keep'])){echo $_COOKIE['password'];} ?>">
                </div>
                <div class="login_check">
                    <label>
                        <input type="checkbox" class="formbox" size="40" name="login_keep" value="login_keep"
                        <?php 
                            if (isset($_COOKIE['login_keep'])) {
                                echo "checked='checked'";
                            }
                        ?>>ログイン状態を保持する
                    </label>
                </div>
                <br>
                <div class="button">
                    <input type="submit" class="button_login" size="35" value="ログイン">
                </div>
            </form>
        </div>
    </main>

    <footer>
     © 2018 InterNous.inc. All rights reserved
    </footer>

    <script>
        function ConfirmPassword(confilm){
            var input1 = password.value;
            var input2 = confirm.value;
            if(input1 != input2){
                confirm.setCustomValidity("パスワードが一致しません");
            }else{
                confirm.setCustomValidity('');
            }
        }
    </script>

</body>
</html>