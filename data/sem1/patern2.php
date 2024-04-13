<?php
$students = [
    [
        'name' => 'Ivan',
        'age' => 21
    ],
    [
        'name' => 'Petya',
        'age' => 33
    ],
    [
        'name' => 'Vasya',
        'age' => 26
    ],
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Перебор форычём массива студентов</title>
    <style>
        table {
            border: 1px solid black;
        }
    </style>
</head>
<body>


<table>
<!--Начало цикла-->
<?php foreach ($students as $user) : ?>

        <tr>
            <!--Перебор форычём массива студентов-->
            <td><?= $user['name'] ?></td>
            <td><?= $user['age'] ?></td>
        </tr>

<?php endforeach; ?>
<!--Начало цикла-->
</table>


</body>
</html>



