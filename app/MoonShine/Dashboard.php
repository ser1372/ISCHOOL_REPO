<?php

namespace App\MoonShine;

use App\Models\Student;
use App\MoonShine\Resources\StudentResource;
use Illuminate\Support\Facades\DB;
use MoonShine\Dashboard\DashboardBlock;
use MoonShine\Dashboard\DashboardScreen;
use MoonShine\Dashboard\ResourcePreview;

class Dashboard extends DashboardScreen
{
    public function blocks(): array
    {
        return [
            DashboardBlock::make([
                ResourcePreview::make(
                    new StudentResource(),
                    'Заявки',
                    Student::query()->whereDate('created_at', DB::raw('CURDATE()'))
                )
            ])
        ];
    }
}