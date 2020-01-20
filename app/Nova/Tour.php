<?php

namespace App\Nova;

use Digitalcloud\MultilingualNova\Multilingual;
use Halimtuhu\ArrayImages\ArrayImages;
use Hnassr\NovaKeyValue\KeyValue;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Image;
use NovaItemsField\Items;
use Benjaminhirsch\NovaSlugField\Slug;
use Benjaminhirsch\NovaSlugField\TextWithSlug;

class Tour extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Tour';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'subtitle', 'details', 'about_tour', 'days', 'show_main_page'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Multilingual::make('Languages')->hideFromIndex(),
            Text::make('Title', function () {
                return app()->getLocale();
            }),
            TextWithSlug::make('title')->slug('slug'),
            Slug::make('Slug'),
            Text::make('Sub Title', function () {
                return app()->getLocale();
            }),
            Text::make('subtitle'),
            ArrayImages::make('Images', 'images')->disk('public'),
            KeyValue::make('details', function () {
                return app()->getLocale();
            }),
            KeyValue::make('details')->hideFromIndex(),
            Trix::make('about_tour', function () {
                return app()->getLocale();
            }),
            Trix::make('about_tour'),
            KeyValue::make('days', function () {
                return app()->getLocale();
            }),
            Select::make('type')->options([
                'Incoming' => 'Incoming',
                'Outgoing' => 'Outgoing',
            ])->displayUsingLabels(),
            Text::make('City', function () {
                return app()->getLocale();
            }),
            Text::make('city'),
            KeyValue::make('days')->hideFromIndex(),
            Number::make('price')->min(1)->max(50000)->step(0.01)->hideFromIndex(),
            Boolean::make('main_tour')
                ->trueValue('0')
                ->falseValue('1'),
            Boolean::make('show_main_page')
                ->trueValue('0')
                ->falseValue('1'),
            ID::make()->sortable(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
