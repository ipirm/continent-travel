<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Naif\MapAddress\MapAddress;

class Social extends Resource
{
    public static function singleRecord(): bool
    {
        return true;
    }
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Social';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Text::make('facebook'),
            Text::make('facebook_url'),
            Text::make('instagram')->hideFromIndex(),
            Text::make('instagram_url')->hideFromIndex(),
            Text::make('youtube')->hideFromIndex(),
            Text::make('youtube_url')->hideFromIndex(),
            Text::make('mail')->hideFromIndex(),
            Text::make('text__footer')->hideFromIndex(),
            Number::make('first_number'),
            Number::make('second_number')->hideFromIndex(),
            Number::make('third_number')->hideFromIndex(),
            Text::make('first_address'),
            Text::make('second_address')->hideFromIndex(),
            MapAddress::make('location')
                ->initLocation(40.373752,49.852996)->zoom(8)->hideFromIndex(),
            ID::make()->sortable(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
