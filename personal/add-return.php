<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Возврат товара");
$APPLICATION->SetTitle("Возврат товара");
?><div class="card">
      <h1 class="title-page">Возврат товара</h1>
      <p>Пожалуйста, заполните форму на возврат товара.</p>
      <form action="https://darmart.kz/add-return/" method="post" enctype="multipart/form-data">

            <h2 class="title-page">Информация о заказе</h2>
          <div class="form-group required">
            <label class="control-label" for="input-firstname">Имя:</label>
              <input type="text" name="firstname" value="" placeholder="Имя:" id="input-firstname" class="form-control">
                        </div>
          <div class="form-group required">
            <label class="control-label" for="input-lastname">Фамилия:</label>
              <input type="text" name="lastname" value="" placeholder="Фамилия:" id="input-lastname" class="form-control">
                        </div>
          <div class="form-group required">
            <label class=" control-label" for="input-email">E-Mail:</label>
              <input type="text" name="email" value="" placeholder="E-Mail:" id="input-email" class="form-control">
                        </div>
          <div class="form-group required">
            <label class="control-label" for="input-telephone">Телефон:</label>
              <input type="text" name="telephone" value="" placeholder="Телефон:" id="input-telephone" class="form-control">
                        </div>
          <div class="form-group required">
            <label class=" control-label" for="input-order-id">№ заказа:</label>
              <input type="text" name="order_id" value="" placeholder="№ заказа:" id="input-order-id" class="form-control">
                        </div>
          <div class="form-group">
            <label class="control-label" for="input-date-ordered">Дата заказа:</label>
              <div class="input-group date"><input type="text" name="date_ordered" value="" placeholder="Дата заказа:" data-date-format="YYYY-MM-DD" id="input-date-ordered" class="form-control"><span class="input-group-btn">
                <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                </span>
              </div>

          </div>

        <h2 class="title-page">Информация о товаре и причина возврата</h2>
          <div class="form-group required">
            <label class="control-label" for="input-product">Наименование:</label>
              <input type="text" name="product" value="" placeholder="Наименование:" id="input-product" class="form-control">
                        </div>
          <div class="form-group required">
            <label class="control-label" for="input-model">Модель:</label>
              <input type="text" name="model" value="" placeholder="Модель:" id="input-model" class="form-control">
                        </div>
          <div class="form-group">
            <label class="control-label" for="input-quantity">Количество:</label>
              <input type="text" name="quantity" value="1" placeholder="Количество:" id="input-quantity" class="form-control">
          </div>
          <div class="form-group required">
            <label class="control-label">Причина:</label>
                                          <div class="radio">
                <label>
                  <input type="radio" name="return_reason_id" value="5">
                  Другое (другая причина), пожалуйста, укажите/приложите подробности</label>
              </div>
                                                        <div class="radio">
                <label>
                  <input type="radio" name="return_reason_id" value="4">
                  Ошибочный, пожалуйста, укажите/приложите подробности</label>
              </div>
                                                        <div class="radio">
                <label>
                  <input type="radio" name="return_reason_id" value="2">
                  Получен не тот (ошибочный) товар</label>
              </div>
                                                        <div class="radio">
                <label>
                  <input type="radio" name="return_reason_id" value="1">
                  Получен/доставлен неисправным (сломанным)</label>
              </div>
                                                    </div>
          <div class="form-group required">
            <label class="control-label">Распакован:</label>
              <label class="radio-inline">
                                <input type="radio" name="opened" value="1">
                                Да</label>
              <label class="radio-inline">
                                <input type="radio" name="opened" value="0" checked="checked">
                                Нет</label>
          </div>
          <div class="form-group">
            <label class="control-label" for="input-comment">Описание:</label>
              <textarea name="comment" rows="10" placeholder="Описание:" id="input-comment" class="form-control"></textarea>
          </div>
                          <div class="buttons-overflow clearfix">
          <div class="pull-left"><a href="https://darmart.kz/my-account/" class="btn">Назад</a></div>
          <div class="pull-right">Мною прочитаны и я даю согласие с документом <a href="https://darmart.kz/index.php?route=information/information/agree&amp;information_id=13" class="agree"><b>Условия возврата и гарантии</b></a>                        <input type="checkbox" name="agree" value="1">
                        <input type="submit" value="Отправить" class="btn main-btn">
          </div>
        </div>
              </form>
      </div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>