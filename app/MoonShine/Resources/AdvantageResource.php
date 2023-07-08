<?php

namespace App\MoonShine\Resources;

use App\Models\Advantage;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\File;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;

class AdvantageResource extends Resource
{
    public static string $model = Advantage::class;

    public static string $title = 'Преимущества';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            File::make('Фотка', 'img')
                ->allowedExtensions(['jpg', 'gif', 'png'])
                ->removable()
            ,
            Text::make('Текст(англ)', 'advantages_en'),
            Text::make('Текст(укр)', 'advantages_ua'),
            Text::make('Дата', 'created_at'),
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
