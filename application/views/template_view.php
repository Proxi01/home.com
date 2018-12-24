<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--    INCLUDE CSS-->
    <link rel="stylesheet" href="<?php __DIR__?>/style/style.css">
    <!--    bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Коммунальные услуги</title>
</head>
<body>

<div class="container-fluid flex-cont">
    <div class="col-md-2 sidebar">
        <nav>
            <ul>
                <li><a href="/electricity">Электроэнергия</a></li>
                <li><a href="/water">Вода</a></li>
                <li><a href="/gas">Газоснабжение</a></li>
                <li><a href="/warm">Теплоснабжение</a></li>
                <li><a href="/trash">Вывоз мусора</a></li>
                <li><a href="/zhek">ЖЭК</a></li>
            </ul>
        </nav>
    </div>
    <div class="col-md-6 table-wr">
        <?php include $content_view; ?>
    </div>
    <div class="col-md-4 right-sidebar">
        <form action="" method="post" class="targets">
            <label for="months">Месяц: <select name="month" id="months">
                    <option value="january">Январь</option>
                    <option value="february">Февраль</option>
                    <option value="march">Март</option>
                    <option value="april">Апрель</option>
                    <option value="may">Май</option>
                    <option value="june">Июнь</option>
                    <option value="july">Июль</option>
                    <option value="august">Август</option>
                    <option value="september">Сентябрь</option>
                    <option value="october">Октябрь</option>
                    <option value="november">Ноябрь</option>
                    <option value="december">Декабрь</option>
                </select></label>
            <label>Предыдущие показания:</label> <input type="number" name="prev"><br>
            <label>Текущие показания:</label> <input type="number" name="curr"><br>
            <label>Сумма:</label> <input type="number" name="sum"><br>
            <input type="submit">
        </form>
    </div>
</div>


<!--BOOTSTRAP-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

<!--JQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="../../scripts/form_handling.js"></script>
<script src="../../scripts/script.js"></script>
</body>
</html>