<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Меню");
?>
<div class="lead">Категория</div>
<ul>
    <li><a href="#serv1">Холодные закуски</a></li>
    <li><a href="#serv2">Горячие закуски</a></li>
    <li><a href="#serv3">Супы</a></li>
    <li><a href="#serv4">Мясные блюда</a></li>
    <li><a href="#serv5">Напитки</a></li>
</ul>
<br>
<br>

<div class="table-responsive">
    <table class="table"> 
        <tbody> 
            <tr> 
                <th>№ пп</th>
                <th>Название блюда</th>
                <th>Цена</th>
            </tr>
 
            <tr>
                <th colspan="3"><a name='serv1'>Холодные закуски</a></th>
            </tr>
            <tr>
                <td>1</td>
                <td>Рыбное ассорти	 200гр	</td>
                <td>780 рублей</td>
            </tr>
            
            <tr>
                <td>2</td>
                <td>Семга слабого посола 100гр	</td>
                <td>360 рублей</td>
            </tr>
            
            <tr>
                <td>3</td>
                <td>Овощной букет 380гр	</td>
                <td>410 рублей</td>
            </tr>
            <tr>
                <th colspan="3"><a name='serv2'>Горячие закуски</a></th>
            </tr>
            <tr>
                <td>4</td>
                <td>Шеф бургер 1шт/150гр</td>
                <td>420 рублей</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Набор к пиву  210/150гр </td>
                <td>380 рублей</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Креветки к пиву 180/30</td>
                <td>380 рублей</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Гренки жареные с чесноком 100гр</td>
                <td>90 рублей</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Долма 200/50</td>
                <td>420 рублей</td>
            </tr>
            <tr>
                <th colspan="3"><a name='serv3'>Супы</a></th>
            </tr>
            <tr>
                <td>9</td>
                <td>Окрошка мясная 300 гр  </td>
                <td>280 рублей</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Окрошка на мацони 300 гр  </td>
                <td>240 рублей</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Шурпа с корейкой ягненка 300 гр  </td>
                <td>380 рублей</td>
            </tr>
            <tr>
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
            </tr>
        </tbody>
    </table>
</div>
    
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>