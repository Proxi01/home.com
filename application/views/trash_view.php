<h1>Вывоз мусора</h1>
<table>
    <tr>
        <th>Дата оплаты</th>
        <th>Пред.показания</th>
        <th>Показания на время оплаты</th>
        <th>Сумма оплаты</th>
    </tr>
    <?php
    for ($i = 0; $i < count($data); $i++) {
        echo "<tr><td>" . str_replace('-', '.', substr($data[$i]['date'], 0, 10)) . "</td>";
        echo "<td>{$data[$i]['previous_record']}</td>";
        echo "<td>{$data[$i]['current_record']}</td>";
        echo "<td>{$data[$i]['sum']}</td></tr>";
    }

    ?>

</table>
