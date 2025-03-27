<?php

namespace App\Providers;

use Native\Laravel\Facades\Window;
use Native\Laravel\Contracts\ProvidesPhpIni;
use Native\Laravel\Facades\Menu;

class NativeAppServiceProvider implements ProvidesPhpIni
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Window::open()->showDevTools(false)->route('login')->maximized()->fullscreen()->hideDevTools();
        Menu::create(
            Menu::route('pos', 'Касса магазин'),
            Menu::route('dashboard', 'Админ магазин'),
            Menu::route('home', 'Касса заправка'),
            Menu::route('dash', 'Админ заправка')
        );
    }

    /**
     * Return an array of php.ini directives to be set.
     */
    public function phpIni(): array
    {
        return [];
    }
}
