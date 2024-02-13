<?php

namespace App\Providers;

use App\Models\Reservation;
use App\Models\UserBook;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            
            if(session()->has('user')) {
                $user = session('user');
                $reservationCount = UserBook::where('user_id', $user->id)
                                            //    ->where('date_rec', '>', Carbon::now())
                                               ->count();
                $view->with('reservationCount', $reservationCount);
            }
        });
    }
}