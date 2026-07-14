<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$age = htmlspecialchars($_POST['age'], ENT_QUOTES, 'UTF-8');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録（２/３）確認</title>

    <style>
        table {
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        th,
        td {
            border: 1px solid #999;
            padding: 4px 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: normal;
        }

        .btn-group {
            display: flex;
            gap: 5px;
        }
    </style>
</head>

<body>

    <h1>ユーザー登録（２/３）確認</h1>

    <h1>以下の内容で登録します。よろしいですか？</h1>


    <table>
        <tr>
            <th>お名前</th>
            <td>
                <?php echo $name; ?>
            </td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td>
                <?php echo $email; ?>
            </td>
        </tr>
        <tr>
            <th>年齢</th>
            <td>
                <?php echo $age; ?>歳
            </td>
        </tr>
    </table>

    <div class="btn-group">
        <form action="input.php" method="GET">

            <input type="submit" value="戻る">

        </form>

        <form action="complete.php" method="post">

            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="age" value="<?php echo $age; ?>">
            <input type="submit" value="登録する">

        </form>
    </div>


</body>

</html>