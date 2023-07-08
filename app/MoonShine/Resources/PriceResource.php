<?php

namespace App\MoonShine\Resources;

use App\Models\Price;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;

class PriceResource extends Resource
{
    public static string $model = Price::class;

    public static string $title = 'Цены';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make("Цена(грн)", "price_uah"),
            Text::make("Скидка(грн)", "sale_price_uah"),
            Text::make("Цена(фунты)", "price_gbp"),
            Text::make("Скидка(фунты)", "sale_price_gbp"),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
