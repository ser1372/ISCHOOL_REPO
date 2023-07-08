<?php

namespace App\Providers;

use App\MoonShine\Resources\AdvantageResource;
use App\MoonShine\Resources\OptionResource;
use App\MoonShine\Resources\PriceResource;
use App\MoonShine\Resources\ReviewResource;
use App\MoonShine\Resources\StudentResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\MoonShine;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            MenuGroup::make('moonshine::ui.resource.system', [
                MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
                    ->translatable()
                    ->icon('users'),
                MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
                    ->translatable()
                    ->icon('bookmark'),
            ])->translatable(),

            MenuItem::make('Опции', new OptionResource())
                ->icon('heroicons.cog-6-tooth'),
            MenuItem::make('Отзывы', new ReviewResource())
                ->icon('heroicons.eye'),
            MenuItem::make('Цены', new PriceResource())
                ->icon('heroicons.currency-dollar'),
            MenuItem::make('Заявки', new StudentResource())
                ->icon('heroicons.user-circle'),
            MenuItem::make('Преимущества', new AdvantageResource())
                ->icon('heroicons.plus-circle'),
        ]);
    }
}
