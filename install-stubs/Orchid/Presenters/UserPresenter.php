<?php

declare(strict_types=1);

namespace App\Orchid\Presenters;

use Orchid\Screen\Presenter;
use Orchid\Screen\Presenters\Search;
use Orchid\Screen\Presenters\User;

class UserPresenter extends Presenter implements Search, User
{

    /**
     * @return string
     */
    public function label(): string
    {
        return 'Users';
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return $this->entity->name;
    }

    /**
     * @return string
     */
    public function subTitle(): string
    {
        return 'Administrator';
    }

    /**
     * @return string
     */
    public function url(): string
    {
        return route('platform.systems.users.edit', $this->entity);
    }

    /**
     * @return string
     */
    public function image(): ?string
    {
        return $this->entity->getAvatar();
    }
}