<?php
namespace App\Filament\Resources\StokProdukResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\StokProdukResource;
use Illuminate\Routing\Router;


class StokProdukApiService extends ApiService
{
    protected static string | null $resource = StokProdukResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];

    }
}
