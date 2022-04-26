<?php

namespace App\Providers;

use App\Models\Design;
use App\Models\MetaSettings;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
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
        URL::forceScheme('https');

        $appType = env('CLIENT_TYPE');
        $setting = MetaSettings::firstWhere('client', env('CLIENT_ID'));
        $design = Design::firstWhere(['client' => env('CLIENT_ID'), 'form' => $setting->form ?? 'form-1']);
        View::share(['app_type' => $appType,'design' => $design, 'setting' => $setting]);
    }
}
