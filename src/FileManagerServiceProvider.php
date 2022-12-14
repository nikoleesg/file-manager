<?php

namespace LaravelApp\FileManager;

use Illuminate\Support\ServiceProvider;

class FileManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(FileManager $extension)
    {
        if (! FileManager::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'file-manager');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/nikoleesg/file-manager')],
                'file-manager'
            );
        }

        $this->app->booted(function () {
            FileManager::routes(__DIR__.'/../routes/web.php');
        });
    }
}