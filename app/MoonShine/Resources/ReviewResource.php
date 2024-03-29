<?php

namespace App\MoonShine\Resources;

use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\File;
use MoonShine\Fields\ID;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\Resource;

class ReviewResource extends Resource
{
    public static string $model = Review::class;

    public static string $title = 'Отзывы';

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make("Имя", "name"),
            Text::make("Имя(англ)", "name_en"),
            File::make("Фото", "img")
                ->allowedExtensions(['jpg', 'gif', 'png'])
                ->removable()
            ,
            Textarea::make("Описание", "description")->hideOnIndex(),
            Textarea::make("Описание(англ)", "description_en")->hideOnIndex(),
            Text::make("Дата создания", "date"),
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
