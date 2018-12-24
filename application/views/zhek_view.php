<h1>ЖЭК</h1>
<table>
    <tr>
        <th>Дата оплаты</th>
        <th>Месяц</th>
        <th>Пред.показания</th>
        <th>Показания на время оплаты</th>
        <th>Сумма оплаты</th>
        <th>Удалить</th>
    </tr>
    <?php
    for ($i = 0; $i < count($data); $i++) {
        echo "<tr><td>" . str_replace('-', '.', substr($data[$i]['date'], 0, 10)) . "</td>";
        echo "<td>{$data[$i]['month']}</td>";
        echo "<td>{$data[$i]['previous_record']}</td>";
        echo "<td>{$data[$i]['current_record']}</td>";
        echo "<td>{$data[$i]['sum']}</td>";
        echo "<td><a href='/zhek/del/{$data[$i]['id']}'>Удалить</a></td></tr>";

    }
    ?>

</table>
