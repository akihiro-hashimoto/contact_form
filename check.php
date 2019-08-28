<?php
// スーパーグローバル変数
// (PHPがもともと用意している変数)

var_dump($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>入力内容確認</title>
</head>
<body>
    <h1>入力内容確認</h1>

    <p>名前：<?php echo $_POST['username']; ?></p>
    <p>メールアドレス：<?php echo $_POST['email']; ?></p>
    <p>内容：<?php echo $_POST['content']; ?></p>

    <form action="">
        <button>ボタン</button>
        <input type="submit" value="OK">
    </form>
    
</body>
</html>