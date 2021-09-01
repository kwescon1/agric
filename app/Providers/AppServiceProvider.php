<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Property;

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
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        //sharing data to multiple views
            view()->composer(['index', 'listings-list-full-width','admin.property'], function ($view) {

            $lists = Property::orderBy('created_at','DESC')->paginate(6);

            $view->with('lists', $lists);
        });

            view()->composer(['search.search','admin.search.search'], function ($view){

        $searchkey = trim(\Request::get('search_property'));

        // $search = Property::where('p_name','LIKE','%'.$searchkey.'%')->orWhere('p_location','LIKE','%'.$searchkey.'%')->orWhere('p_price','LIKE','%'.$searchkey.'%')->orWhere('p_status','LIKE','%'.$searchkey.'%')->orWhere('rent_duration','LIKE','%'.$searchkey.'%')->orWhere('p_type','LIKE','%'.$searchkey.'%')->paginate(6);

        //     $view->with('search',$search);

        // return view('search.search',['search'=>$search]);
        });
    }
}
