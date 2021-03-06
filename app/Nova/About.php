<?php

namespace App\Nova;
use Digitalcloud\MultilingualNova\Multilingual;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class About extends Resource
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
    public static $model = 'App\About';

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
        'id','about_text','possibility_text','text'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return array(
            Multilingual::make('Languages')->hideFromIndex(),
            Trix::make('About text', function () {
                return app()->getLocale();
            }),

            Trix::make('about_text'),
            Image::make('background')->maxWidth(500)->disk('public'),


            Text::make('Title', function () {
                return app()->getLocale();
            }),
            Text::make('title'),


            Trix::make('Possibility Text', function () {
                return app()->getLocale();
            }),
            Trix::make('possibility_text'),


            ID::make()->sortable(),
            HasMany::make('possibilitys')
        );
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
