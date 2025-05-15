<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\StokProduk;


class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.pages.dashboard';

    public function getTotalProduk(): int
    {
        return StokProduk::count();
    }

    public function getStokMenipis()
    {
        return StokProduk::where('stok', '<=', 5)->get();
    }
}
