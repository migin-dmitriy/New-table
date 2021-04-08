<?php require_once "form.php"?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    <title></title>
    <<link rel="stylesheet" href="assets/css/style.css">

</head>
<body bgcolor="#ffa07a">
<div    class = "reg-form">

    <h1>Регистрация</h1>
    <form action=./ method="post">

        <input  class = "form-control" name="name" placeholder="Введите Имя" /><br>

        <input  class = "form-control" name="email" placeholder="Введите email" /><br>

        <input  class = "form-control" name="age" placeholder="Введите возвраст" /><br>

        <button type="submit">Отправить</button>

    </form>
    <div align="center">
        <?php q($_POST)?>
        <?php $validate = valid($_POST)?>
        <?php if (!empty($validate['error']) and $validate['error']): ?>
            <?php foreach ($validate['messages'] as $message): ?>
                <p style="color: red">
                    <?= $message ?>
                </p>
            <?php endforeach;  ?>
        <?php endif;?>
        <?php if (!empty($validate['success']) and $validate['success']):?>
            <?php foreach (getUsers() as $user):?>
                <div>
                    <?= $user ['name']?>    <?= $user ['email']?>   <?= $user ['age']?>
                </div>
            <?php endforeach;?>
        <?php endif;?>


    </div>
</div>
    <style lang="html">

        .reg-form {
            text-align: left;
            width: 40%;
        }

        .content label, input {
            width: 70%;
            display: block;
            padding: 5px;
        }

    </style>
