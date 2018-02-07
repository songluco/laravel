<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Faker\Factory as FakerFactory;
use Faker\Generator as FakerGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Faker 信息本地化。这里主要重写create方法，设置中文简体语言
         * @author SongLu
         */
        $this->app->singleton(FakerGenerator::class, function(){
            return FakerFactory::create('zh_CN');
        });

        /**
         * Carbon信息本地化
         * @author SongLu
         */
        Carbon::setLocale('zh');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
