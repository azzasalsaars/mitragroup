<?php

namespace App\Filament\Resources\StokProdukResource\Pages;

use App\Filament\Resources\StokProdukResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStokProduks extends ListRecords
{
    protected static string $resource = StokProdukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
