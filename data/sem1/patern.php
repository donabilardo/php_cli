<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$name = "Admin";
$admin = false;
?>


//Простой динамический шаблон, если условие истино то отображается шаблон приветствия, иначе форма авторизации

<?php if ($admin) : ?>
    <b>Hello ADMIN</b>
<?php else : ?>
    <form action="patern.php">
        <input type="text" name="name" id="name" placeholder="Enter name">
        <button>SEND</button>
    </form>
<?php endif; ?>
</body>
</html>