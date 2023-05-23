<?php

namespace App\Providers;

use App\Models\Notifikasi;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

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
        Builder::macro('search', function ($field, $string) {
            return $string ? $this->where($field, 'like', '%' . $string . '%') : $this;
        });

        Builder::macro('whereLike', function ($fields, string $string) {
            foreach (Arr::wrap($fields) as $field) {
                $this->orWhere($field, 'LIKE', "%{$string}%");
            }

            return $this;
        });

        View::composer('layouts.main', function ($view) {
            $notif = Notifikasi::where('user_id',Auth::user()->id)->orderBy('created_at','DESC')->get();
            $view->with('notif', $notif);
        });
    }
}
