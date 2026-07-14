<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録-入力</title>
</head>

<body>
    <h1>ユーザー登録（1/3）入力</h1>

    <form action="confirm.php" method="post">
        <label for="username">お名前:</label>
        <input type="text" id="username" name="name">

        <p>
            <label for="address">メールアドレス:</label>
            <input type="email" id="address" name="email">
        </p>

        <p>
            <label for="age">年齢:</label>
            <input type="number" id="age" name="age">
        </p>

        <p><input type="submit" value="確認画面へ"></p>

    </form>
</body>

</html>