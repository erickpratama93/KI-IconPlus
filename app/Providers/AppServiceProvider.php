<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                     ->label('Users')
                     ->icon('heroicon-o-user'),
                NavigationGroup::make()
                    ->label('Landing Page')
                    ->icon('heroicon-s-pencil'),
                NavigationGroup::make()
                    ->label('Homepage')
                    ->icon('heroicon-s-cog')
                    ->collapsed(),
            ]);
        });
    }
}
