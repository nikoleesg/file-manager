<?php

namespace LaravelApp\FileManager\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class FileManagerController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(view('file-manager::index'));
    }
}