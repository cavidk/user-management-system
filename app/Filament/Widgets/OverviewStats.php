<?php

namespace App\Filament\Widgets;

use App\Models\Role;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OverviewStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Users', User::count())
                ->description('All registered users')
                ->icon('heroicon-o-users'),

            Stat::make('Total Roles', Role::count())
                ->description('Roles available in the system')
                ->icon('heroicon-o-shield-check'),

            Stat::make('Latest User', optional(User::latest()->first())->name ?? 'None')
                ->description('Most recently registered user')
                ->icon('heroicon-o-user-plus'),
        ];
    }
}
