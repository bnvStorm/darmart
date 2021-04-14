<?php

namespace Rating1C\Darmart;

use Rating1C\Darmart\Favorites\Favorite;
use Rating1C\Darmart\Users\User;
use Rating1C\Darmart\Subscriptions\Subscribe;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * Класс App
 * @package Rating1C\Darmart
 */
class App
{
    /** @var User $user Экземпляр сервиса для работы с системными пользователями. */
    protected $user = null;

    /** @var Subscribe $subscribe Экземпляр сервиса для работы с подписками на товары. */
    protected $subscribe = null;

    /** @var Favorite $favorite Экземпляр сервиса для работы с избранными. */
    protected $favorite = null;

    /** @var App $instance Экземпляр этого класса. */
    protected static $instance = null;

    /**
     * Получить экземпляр класса.
     *
     * @return App
     */
    public static function getInstance(): App
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * Конструктор App
     *
     * Закрыли конструктор.
     */
    protected function __construct() { }

    /**
     * Получить вспомогательный сервис для работы с системными пользователями.
     *
     * @return User
     */
    public function user(): User
    {
        if (is_null($this->user)) {
            $this->user = new User();
        }
        return $this->user;
    }

    /**
     * Получить вспомогательный сервис для работы с подпиской на товары.
     *
     * @return Subscribe
     */
    public function subscribe(): Subscribe
    {
        if (is_null($this->subscribe)) {
            $this->subscribe = new Subscribe();
        }

        return $this->subscribe;
    }

    public function favorite(): Favorite
    {
        if (is_null($this->favorite)) {
            $this->favorite = new Favorite();
        }

        return $this->favorite;
    }
}
