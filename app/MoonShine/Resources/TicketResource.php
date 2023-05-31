<?php

namespace App\MoonShine\Resources;

use App\Models\Ticket;
use MoonShine\Fields\ID;

use MoonShine\Fields\Text;
use MoonShine\Fields\Number;
use MoonShine\Resources\Resource;
use MoonShine\Actions\FiltersAction;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\Url;

class TicketResource extends Resource
{
	public static string $model = Ticket::class;

	public static string $title = 'Ticket';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Url::make('Poster', 'poster')
            ->hideOnIndex()
            ->required(),
            Text::make('Title', 'title')
            ->required(),
            Text::make('Subtitle', 'subtitle'),
            Number::make('Price', 'price')
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
