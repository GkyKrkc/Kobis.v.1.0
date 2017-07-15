<?php

namespace App\Providers;

use App\Setting;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        config()->set("ayarlar",\App\Setting::pluck("value","name")->all());
        setLocale(LC_TIME,'tr_TR');
        Carbon::setLocale('tr');

        //Hastane Form
        $this->app['form']->component('bsDate', 'components.form.date', ['name', 'value']);
        $this->app['form']->component('bsSelect', 'components.form.selectlist', ['name', 'value']);
        $this->app['form']->component('bsMetin', 'components.form.metin', ['name']);
        //Hasta Giriş Formu
        //$this->app['form']->component('bsText', 'components.HastaForm.text', ['name', 'value']);
        $this->app['form']->component('bsText', 'components.form.text', ['name','label_name','value'=>null,'attributes'=>[]]);
        $this->app['form']->component('bsSearch', 'components.HastaForm.search', ['name']);
        $this->app['form']->component('bsHidden', 'components.HastaForm.textHidden', ['name','value'=>null,'attributes'=>[]]);
        $this->app['form']->component('bsPassword', 'components.form.password', ['name','label_name','attributes'=>[]]);
        $this->app['form']->component('bsCheckbox', 'components.form.checkbox', ['name','label_name','elemanlar'=>[]]);
        $this->app['form']->component('bsDate', 'components.HastaForm.date', ['name', 'value']);
        $this->app['form']->component('bsTime', 'components.HastaForm.time', ['name', 'value']);
        $this->app['form']->component('bsSelect', 'components.HastaForm.selectlist', ['name', 'value']);
        $this->app['form']->component('bsMetin', 'components.HastaForm.metin', ['name']);
        $this->app['form']->component('bsSubmit', 'components.form.submit', ['name','url'=>URL::previous()]);
        //Hasta Giriş Formu
        $this->app['form']->component('bsFile', 'components.HastaForm.file', ['name','aciklama']);
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
