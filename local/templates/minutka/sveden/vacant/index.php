<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакантные места для приема (перевода)");
?>
<div class="table-responsive" itemscope itemtype="http://obrnadzor.gov.ru/microformats/Vacant">
    <table class="table">
        <tbody>
        <tr>
            <td>Уровни образования</td>
            <td style="text-align: center;">Классы</td>
            <td style="text-align: center;">Количество<br>классов-<br>комплектов</td>
            <td style="text-align: center;"><span>Количество</span><br><span>вакантных мест</span></td>
        </tr>
        <tr>
            <td rowspan="4">Начальное общее образование</td>
            <td style="text-align: center;">1</td>
            <td style="text-align: center;">3</td>
            <td style="text-align: center;">2</td>
        </tr>
        <tr>
            <td style="text-align: center;">2</td>
            <td style="text-align: center;">3</td>
            <td style="text-align: center;">0</td>
        </tr>
        <tr>
            <td style="text-align: center;">3</td>
            <td style="text-align: center;">3</td>
            <td style="text-align: center;">3</td>
        </tr>
        <tr>
            <td style="text-align: center;">4</td>
            <td style="text-align: center;">3</td>
            <td style="text-align: center;">1</td>
        </tr>
        <tr>
            <td rowspan="5">Основное общее образование</td>
            <td style="text-align: center;">5</td>
            <td style="text-align: center;">2</td>
            <td style="text-align: center;">6</td>
        </tr>
        <tr>
            <td style="text-align: center;">6</td>
            <td style="text-align: center;">3</td>
            <td style="text-align: center;">0</td>
        </tr>
        <tr>
            <td style="text-align: center;">7</td>
            <td style="text-align: center;">3</td>
            <td style="text-align: center;">0</td>
        </tr>
        <tr>
            <td style="text-align: center;">8</td>
            <td style="text-align: center;">3</td>
            <td style="text-align: center;">1</td>
        </tr>
        <tr>
            <td style="text-align: center;">9</td>
            <td style="text-align: center;">3</td>
            <td style="text-align: center;">1</td>
        </tr>
        <tr>
            <td rowspan="2">Среднее общее образование</td>
            <td style="text-align: center;">10</td>
            <td style="text-align: center;">2</td>
            <td style="text-align: center;">0</td>
        </tr>
        <tr>
            <td style="text-align: center;">11</td>
            <td style="text-align: center;">2</td>
            <td style="text-align: center;">2</td>
        </tr>
        </tbody>
    </table>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>