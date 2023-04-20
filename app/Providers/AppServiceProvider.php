<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\public\frontend\css;
use bootstrap\app;
use App\Models\Theloai;
use App\Models\Slide;
use App\Models\Tintuc;
use Illuminate\Support\Facades\View;

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
      Paginator::useBootstrap();
      $theloai =  Theloai::all();
      $slide = Slide::all();
      $tintuc = Tintuc::all();
      View::share("theloai", $theloai);
      View::share("slide", $slide);
      View::share("tintuc", $tintuc);
    }
}
