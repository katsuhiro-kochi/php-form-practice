<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ユーザー登録（３/３）完了</h1>

    <?php
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $age = htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8');


    echo " $name さん、登録が完了しました！";
    echo "<p>確認メールを $email に送信しました。</p>";

    ?>

    <form action="input.php" method="GET">
        <p><a href="index.php">最初に戻る</a></p>


    </form>

</body>

</html>