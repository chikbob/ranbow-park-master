<?php

namespace App\Providers;

use MoonShine\MoonShine;
use MoonShine\Menu\MenuItem;
use MoonShine\Menu\MenuGroup;
use Illuminate\Support\ServiceProvider;
use App\MoonShine\Resources\OrderResource;
use App\MoonShine\Resources\TicketResource;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            MenuGroup::make('moonshine::ui.resource.system', [
                MenuItem::make('Admins', new MoonShineUserResource())
                    ->translatable()
                    ->icon('heroicons.user-circle'),
                MenuItem::make('Roles', new MoonShineUserRoleResource())
                    ->translatable()
                    ->icon('heroicons.shield-exclamation'),
            ])->translatable()
            ->icon('heroicons.wrench-screwdriver'),

            MenuItem::make('Order', new OrderResource(), 'heroicons.shopping-cart'),
            MenuItem::make('Ticket', new TicketResource(), 'heroicons.ticket'),
        ]);
    }
}
