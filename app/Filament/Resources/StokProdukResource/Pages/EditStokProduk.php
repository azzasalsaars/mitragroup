<?php

namespace App\Filament\Resources\StokProdukResource\Pages;

use App\Filament\Resources\StokProdukResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStokProduk extends EditRecord
{
    protected static string $resource = StokProdukResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
