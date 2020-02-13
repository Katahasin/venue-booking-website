<?php
namespace App\Providers;
use App\C1 ;
use App\C2 ;
use App\C3 ;
use App\C4 ;
use App\C5 ;
use App\C6 ;
use Illuminate\Support\ServiceProvider;
class Cal1 extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('Calendar1', C1::all());
        });


        view()->composer('*',function($view){
            $view->with('Calendar2', C2::all());
        });



        view()->composer('*',function($view){
            $view->with('Calendar3', C3::all());
        });



        view()->composer('*',function($view){
            $view->with('Calendar4', C4::all());
        });


        view()->composer('*',function($view){
            $view->with('Calendar5', C5::all());
        });


        view()->composer('*',function($view){
            $view->with('Calendar6', C6::all());
        });


       
    }

}
