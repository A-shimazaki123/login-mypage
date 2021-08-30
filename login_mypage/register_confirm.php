<?php
mb_internal_encoding("utf8");

$temp_pic_name = $_FILES['picture']['tmp_name'];

$original_pic_name = $_FILES['picture']['name'];
$path_filename = './image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);
?>

<!DOCTYPE HTML>
<html lang="ja">

<head>
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="register_confirm.css">
</head>

<body>

    <header>
        <img src="4eachblog_logo.jpg">
        <div class="login"><a href="login.php">ログイン</a></div>
    </header>

    <main>
    <div class="confirm">
        <h1>会員登録　確認</h1>
        <p>こちらの内容で登録しても宜しいでしょうか？</p>
            <div class="name">
                氏名：<?php echo $_POST['name']; ?>
            </div> 
            <br>
            <div class="mail">
                メールアドレス：<?php echo $_POST['mail']; ?>    
            </div>
            <br>
            <div class="password">
                パスワード：<?php echo $_POST['password']; ?>
            </div>
            <br>
            <div class="picture">
                プロフィール写真：<?php echo $original_pic_name;?>
            </div>
            <br>
            <div class="comments">
                コメント：<?php echo $_POST['comments']; ?>
            </div>
            <br>
            <div class="buttons">
                <div class="modoru_button">
                    <div class="button_return">
                        <a href=register.php>戻って修正する</a>
                    </div>
                </div>
                <div class="submit_button">
                    <form action="register_insert.php" method="post">
                        <input type="submit" class="button_enter" value="登録する"/>
                        <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
                        <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                        <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                        <input type="hidden" value="<?php echo $path_filename; ?>" name="path_filename">
                        <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer>
        © 2018 InterNous.inc. All rights reserved
    </footer>

</body>
</html>