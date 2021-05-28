<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Меню");
?>
<div class="lead">Категория</div>
<ul>
    <li><a href="#serv1">Конференц-залы</a></li>
    <li><a href="#serv2">Переговорные комнаты</a></li>
    <li><a href="#serv3">Визовая поддержка</a></li>
    <?/*<li><a href="#serv4">Мясные блюда</a></li>
    <li><a href="#serv5">Напитки</a></li>*/?>
</ul>
<br>
<br>

<div class="table-responsive">
    <table class="table"> 
        <tbody> 
            <tr> 
                <th>№ пп</th>
                <th>Название блюда</th>
                <th>Телефон</th>
            </tr>
 
            <tr>
                <th colspan="3"><a name='serv1'>Конференц-залы</a></th>
            </tr>
            <tr>
                <td>1</td>
                <td>Конференц-зал 1</td>
                <td>8 800-000-00-00</td>
            </tr>
            
            <tr>
                <td>2</td>
                <td>Конференц-зал 2</td>
                <td>8 800-000-00-00</td>
            </tr>
            
            <tr>
                <td>3</td>
                <td>Конференц-зал 3</td>
                <td>8 800-000-00-00</td>
            </tr>
            <tr>
                <th colspan="3"><a name='serv2'>Переговорные комнаты</a></th>
            </tr>
            <tr>
                <td>4</td>
                <td>Переговорная комната 1</td>
                <td>8 800-000-00-00</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Переговорная комната 2</td>
                <td>8 800-000-00-00</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Переговорная комната 3</td>
                <td>8 800-000-00-00</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Переговорная комната 4</td>
                <td>8 800-000-00-00</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Переговорная комната 5</td>
                <td>8 800-000-00-00</td>
            </tr>
            <tr>
                <th colspan="3"><a name='serv3'>Визовая поддержка</a></th>
            </tr>
            <tr>
                <td>9</td>
                <td>Детям</td>
                <td>8 800-000-00-00</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Взрослым</td>
                <td>8 800-000-00-00</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Студентам</td>
                <td>8 800-000-00-00</td>
            </tr>
            <?/*<tr>
                <th colspan="3"><a name='serv4'>Мясные блюда</a></th>
            </tr>
            <tr>
                <td>12</td>
                <td>Ассорти Ханское 400 гр  </td>
                <td>420 рублей</td>
            </tr>
            <tr>
                <td>13</td>
                <td>Казан кебаб 370 гр  </td>
                <td>560 рублей</td>
            </tr>
            <tr>
                <td>14</td>
                <td>Буглама из голени ягненка 400 гр </td>
                <td>520 рублей</td>
            </tr>
            <tr>
                <td>15</td>
                <td>Цыплёнок табака 1 шт. </td>
                <td>480 рублей</td>
            </tr>
            <tr>
                <th colspan="3"><a name='serv5'>Напитки</a></th>
            </tr>
            <tr>
                <td>16</td>
                <td>Перье  с/г 330 мл. </td>
                <td>200 рублей</td>
            </tr>
            <tr>
                <td>17</td>
                <td>Джермук с/г 500 мл. </td>
                <td>160 рублей</td>
            </tr>
            <tr>
                <td>18</td>
                <td>Виттель б/г 330 мл. </td>
                <td>200 рублей</td>
            </tr>
            <tr>
                <td>19</td>
                <td>Татни б/г 500 мл. </td>
                <td>160 рублей</td>
            </tr>*/?>
        </tbody>
    </table>
</div>
    
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>