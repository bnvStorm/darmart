<?
$aMenuLinks = Array(
	Array(
		"Авторизация", 
		"/personal/?login=yes", 
		Array(), 
		Array(), 
		"\$GLOBALS[\"USER\"]->HasNoAccess() && \$_SERVER[\"REMOTE_USER\"]==\"\"" 
	),
	Array(
		"Регистрация", 
		"/personal/register/", 
		Array(), 
		Array(), 
		"\$GLOBALS[\"USER\"]->HasNoAccess() && \$_SERVER[\"REMOTE_USER\"]==\"\"" 
	),
	Array(
		"Напомнить пароль", 
		"/personal/change_password/?forgot_password=yes", 
		Array(), 
		Array(), 
		"\$GLOBALS[\"USER\"]->HasNoAccess() && \$_SERVER[\"REMOTE_USER\"]==\"\"" 
	),
	Array(
		"Личный кабинет", 
		"/personal/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Учетная запись", 
		"/personal/private/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Смена пароля", 
		"/personal/change_password/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Мои закладки", 
		"/personal/favorites/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Текущие заказы", 
		"/personal/orders/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"История заказов", 
		"/personal/orders/?filter_history=Y", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Подписка на новости", 
		"/personal/subscribe/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Возврат товара", 
		"/personal/return_order/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"Выйти", 
		"/personal/?logout=yes", 
		Array(), 
		Array(), 
		"\$USER->IsAuthorized()" 
	)
);
?>