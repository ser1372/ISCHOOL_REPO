<?php

namespace App\MoonShine\Resources;

use App\Models\Option;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\File;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;

class OptionResource extends Resource
{
    public static string $model = Option::class;

    public static string $title = 'Опции';

    public function fields(): array
    {
        $fields = [
            ID::make()->sortable(),
            Text::make('Имя опции', 'name')
                ->hideOnForm(),
            Text::make('Значение', 'value'),
        ];

        $fields[] = File::make('Preview', 'img')
            ->allowedExtensions(['jpg', 'gif', 'png'])
            ->removable()
            ->showOnDetail();


        return $fields;
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
