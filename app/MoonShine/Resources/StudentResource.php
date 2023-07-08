<?php

namespace App\MoonShine\Resources;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;

class StudentResource extends Resource
{
    public static string $model = Student::class;

    public static string $title = 'Заявки';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Имя ученика', 'name'),
            Text::make('Город', 'city'),
            Text::make('Страна', 'country'),
            Text::make('Телефон или ник ТГ', 'phone_or_telegram'),
            Text::make('Ресурс(откуда узнали)', 'source'),
            Text::make('Дата', 'created_at')->hideOnForm(),
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
