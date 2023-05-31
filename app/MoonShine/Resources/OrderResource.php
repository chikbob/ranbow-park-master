<?php

namespace App\MoonShine\Resources;

use App\Models\Order;
use MoonShine\Fields\ID;

use MoonShine\Fields\Text;
use MoonShine\Fields\BelongsTo;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;

class OrderResource extends Resource
{
	public static string $model = Order::class;

	public static string $title = 'Order';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            BelongsTo::make('Ticket', 'ticket_id', fn($item) => $item->id ." | ". $item->title)
            ->required(),
            Text::make('Email', 'email')
            ->required(),
            Text::make('Hash', 'hash')
            ->required(),
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
