<?php

namespace App\MoonShine;

use App\Models\Student;
use App\MoonShine\Resources\StudentResource;
use Illuminate\Support\Facades\DB;
use MoonShine\Dashboard\DashboardBlock;
use MoonShine\Dashboard\DashboardScreen;
use MoonShine\Dashboard\ResourcePreview;
use MoonShine\Metrics\DonutChartMetric;
use MoonShine\Metrics\LineChartMetric;

class Dashboard extends DashboardScreen
{
    public function blocks(): array
    {
        return [
            DashboardBlock::make([
                DonutChartMetric::make('Заявок за все время')
                    ->values(['Ученики' => Student::query()->get()]),
                LineChartMetric::make('Orders')
                    ->line([
                        'Profit' => Student::query()->get()->toArray(),
                        'Avg' => Student::query()->get()->toArray()
                    ], [
                        'red', 'blue'
                    ]),
                ResourcePreview::make(
                    new StudentResource(),
                    'Заявки',
                    Student::query()->whereDate('created_at', DB::raw('CURDATE()'))
                )
            ])
        ];
    }
}
