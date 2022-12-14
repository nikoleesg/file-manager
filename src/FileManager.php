<?php

namespace LaravelApp\FileManager;

use Encore\Admin\Extension;

class FileManager extends Extension
{
    public $name = 'file-manager';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Filemanager',
        'path'  => 'file-manager',
        'icon'  => 'fa-gears',
    ];
}